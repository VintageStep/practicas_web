<?php

/*--------------------------------------------------------
Funciones para crear un usuario y validar esa creación.
----------------------------------------------------------*/

function emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) {
    $result = false;
    if(empty($name) || empty($email) || empty($username) || empty($pwd) || empty($pwdRepeat)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidedUid($username) {
    $result = false;
    if(!preg_match("/^[a-zA-Z0-9]*$/", $username)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

function invalidEmail($email) {
    if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $result = true;
    } else {
        $result = false;
    }
    return $result;
}

// Compara que las dos contraseñas sean iguales
function coincideClave($clave_usuario, $clave_usuario_r) {
    $resultado = false;
    if($clave_usuario !== $clave_usuario_r){
        $resultado = true;
    } else {
        $resultado = false;
    }
    return $resultado;
}
// Esta función se usa en el controlador de alta usuario para validar si el usuario(en este caso email) existe en la BBDD y abortar la operación
// Pero además se usa en la funcion loginUsuario() para saber si no existe el usuario, si existe, sin embargo, devolverá un array
// con datos del usuario que en la función de login se usan para validar la contraseña y luego pasar los id a variables de sesión
function existeUsuario($conn,$email_usuario) {
    //1. SQL string
    $sql = "select id_usuario, email_usuario, clave_usuario, id_tipo_usuario, nombre_usuario from usuarios where email_usuario = ?;";
    //2. Prepara un statement, envolviendo la conexión y el string sql con sus parametros
    //  para evitar inyecciones.
    $stmtpreparado =sqlsrv_prepare( $conn,$sql,array(&$email_usuario));
    //3. Revisando si hay errores en el stmtpreparado
    if (!$stmtpreparado){
        header('location: ../index.php?error=fallostmt');
        exit();
    }
    //5. Ejecuta  y verifica el stmt preparado 
    
    if($resultado = sqlsrv_execute($stmtpreparado))  {
        //6. Se recoge array asociativo con el email
        $fila = sqlsrv_fetch_array($stmtpreparado,SQLSRV_FETCH_ASSOC);
        //6b. Tenemos que comprobar que la select no venga vacía (null) y devolverla
        if(is_array($fila)){
            sqlsrv_close($conn);
            return $fila;    
        } else {
            $resultado = false;
            return $resultado;
        }
    } else {
        //5b. En este caso habría fallado el statement preparado
        $resultado = false;
        header('location: ../index.php?error=fallostmt');
        sqlsrv_close($conn);
        return $resultado;

    }
}
function crearUsuario($conn, $email_usuario, $clave_usuario, $tipo_usuario, $nombre_usuario) {
    //1. String SQL y creación del hash
    $sql = "INSERT INTO usuarios (email_usuario, clave_usuario, id_tipo_usuario, nombre_usuario) VALUES (?,?,?,?);";
    $clave_hash = password_hash($clave_usuario, PASSWORD_DEFAULT);
    //2. Prepara un statement, envolviendo la conexión y el string sql con sus parametros
    //  para evitar inyecciones.
    $stmtpreparado =sqlsrv_prepare($conn,$sql,array(&$email_usuario, &$clave_hash, &$tipo_usuario, &$nombre_usuario));
    //3. Revisa errores en el prepared statement
    if(!$stmtpreparado){
        header('location: ../../Formularios/Formulariosusuarios/Altausuarios.php?error=stmtfailed');
        exit();
    }
    //4. Ejecuta el statement y comprueba si es correcto
    if (sqlsrv_execute($stmtpreparado)) {
        //5a. Hace la redirección si es correcto y cierra el statement y la conexión   
        header('location: ../Formularios/Formulariosusuarios/Altausuarios.php?error=none');
        sqlsrv_free_stmt($stmtpreparado);  
        sqlsrv_close($conn);  
        exit();  
    } else { 
        //5a. Hace la redirección si es falso y cierra el statement y la conexión 
        header('location: ../../Formularios/Formulariosusuarios/Altausuarios.php?error=stmtfailed');
        sqlsrv_free_stmt($stmtpreparado);  
        sqlsrv_close($conn);        
        die(print_r(sqlsrv_errors(), true));  
    }  
    
}

/*-------------------------------------------------------
Funciones para validar el login.
--------------------------------------------------------*/

// Devuelve verdadero si el error aparece.
function inputVacioLogin($nombre_usuario, $clave_usuario) {
    $resultado = false;
    if(empty($nombre_usuario) || empty($clave_usuario)){
        $resultado = true;
    } else {
        $resultado = false;
    }
    return $resultado;
}


// Función de login
function loginUsuario($conn, $nombre_usuario, $clave_usuario) {
    //1. Validamos el usuario, si existe recoge un array con sus datos
    //  de lo contrario devolverá un booleano con valor falso 
    $existeUsuario = existeUsuario($conn, $nombre_usuario);
    //2. Se verifica que ha devuelto
    if ($existeUsuario === false) {
        header("location: ../index.php?error=errorlogin");
        exit();
    }
    // $existeUsuario es un array asociativo
    // podemos recoger los resultados con el nombre de columna
    //2. Recogemos en una variable el hash de la clave alojado en la BBDD
    $clave_hash = $existeUsuario["clave_usuario"];

    //3. Validamos la clave
    $clave_filtrada = password_verify($clave_usuario, $clave_hash);
    if($clave_filtrada === false) {
        header("location: ../index.php?error=errorlogin");
        exit();
    } 
    //En caso de que la validación sea correcta pasamos la información de la query 
    //Alojada como un array asociativo en la variable $existeUsuario, y por ejemplo
    //se pueden usar para generar contenido dinámico como la redirección del final.
    //que nos llevará a diferentes portadas dependiendo del tipo de usuario que inicie sesión.
    else if ($clave_filtrada === true) {
        session_start();
        $_SESSION["idusuario"] = $existeUsuario["id_usuario"];
        $_SESSION["idtipousuario"] = $existeUsuario["id_tipo_usuario"];
        $_SESSION["nombreusuario"] = $existeUsuario["nombre_usuario"];

        $tipo_usuario = $_SESSION["idtipousuario"];
        
        header('location: ../perfiles/portada'.$tipo_usuario.'.php');
        exit();
    }
}

function cerrar_sesion(){
    @session_start();
    session_destroy();
    echo '<div class="logout__contenedor">
    <a class="logout__boton" href="..\index.php">Cerrar Sesión</a>
    </div>
    ';
    }