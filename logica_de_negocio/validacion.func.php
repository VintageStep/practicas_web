<?php

/*---------------------------------------------
SIGN UP FORM VALIDATION
-----------------------------------------------*/

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

function coincideClave($clave_usuario, $clave_usuario_r) {
    $resultado = false;
    if($clave_usuario !== $clave_usuario_r){
        $resultado = true;
    } else {
        $resultado = false;
    }
    return $resultado;
}
//IMPORTANT, USED IN LOGINUSER METHOD.
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
        $array_email= array(&$email_usuario);
        if(is_array($fila)){
            sqlsrv_close($conn);
            return $fila;
        } else {
            $resultado = false;
            return $resultado;
        }
    } else {
        //  
        $resultado = false;
        header('location: ../index.php?error=fallostmt');
        sqlsrv_close($conn);
        return $resultado;

    }
}
function crearUsuario($conn, $email_usuario, $clave_usuario, $tipo_usuario, $nombre_usuario) {
    //1. SQL string and password hashing
    $sql = "INSERT INTO usuarios (email_usuario, clave_usuario, id_tipo_usuario, nombre_usuario) VALUES (?,?,?,?);";
    $clave_hash = password_hash($clave_usuario, PASSWORD_DEFAULT);
    //2. Prepared statement, prevents injections by enveloping
    //  conn and sqlString.
    $stmtpreparado =sqlsrv_prepare($conn,$sql,array(&$email_usuario, &$clave_hash, &$tipo_usuario, &$nombre_usuario));
    //3. Checking errors in the prepstmt
    if(!$stmtpreparado){
        header('location: ../../Formularios/Formulariosusuarios/Altausuarios.php?error=stmtfailed');
        exit();
    }
    /* Execute the statement. */  
    if (sqlsrv_execute($stmtpreparado)) {
        //7. Redirect and close conn and stmt   
        header('location: ../Formularios/Formulariosusuarios/Altausuarios.php?error=none');
        sqlsrv_free_stmt($stmtpreparado);  
        sqlsrv_close($conn);  
        exit();  
    } else { 
        //7. Redirect and close conn and stmt 
        header('location: ../../Formularios/Formulariosusuarios/Altausuarios.php?error=stmtfailed');
        sqlsrv_free_stmt($stmtpreparado);  
        sqlsrv_close($conn);        
        die(print_r(sqlsrv_errors(), true));  
    }  
    

}

/*---------------------------------------------
Funciones para validar el login.
-----------------------------------------------*/

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



function loginUsuario($conn, $nombre_usuario, $clave_usuario) {
    // validating user name.
    // $userName param will fit in any of the categories
    // but we need to pass it twice, since uidExist needs 3 param
    $existeUsuario = existeUsuario($conn, $nombre_usuario);
    // Checking if $userName exist.
    if ($existeUsuario === false) {
        header("location: ../login.php?error=wronglogin");
        exit();
    }
    // $existe usuario es un array asociativo
    // podemos recoger los resultados con el nombre de columna
    $clave_hash = $existeUsuario["clave_usuario"];

    $clave_filtrada = password_verify($clave_usuario, $clave_hash);

    if($clave_filtrada === false) {
        header("location: ../error.php?error=errorlogin");
        exit();
    } 
    else if ($clave_filtrada === true) {
        session_start();
        $_SESSION["idusuario"] = $existeUsuario["id_usuario"];
        $_SESSION["idtipousuario"] = $existeUsuario["id_tipo_usuario"];
        $_SESSION["nombreusuario"] = $existeUsuario["nombre_usuario"];

        $tipo_usuario = $_SESSION["idtipousuario"];
        
        header('location: ../portada'.$tipo_usuario.'.php');
        exit();
    }
}