<?php

session_start();

// COMPROBAR VARIABLES RECIBIDAS
// Recibe del formulario inicio.html el usuario y la contraseña, por el método POST. 
// Validar si llega usuario y contraseña
if(isset($_POST['usuario']) and isset($_POST['clave'])){
    $nombre_usuario = $_POST['usuario']; // Es un mail
    $clave_usuario  = $_POST['clave'];
}

// CONECTAR BBDD
include 'crud\conexionSQL.php';

// COMPROBAR SI EXISTE EL USUARIO EN LA BD Y LA CONTRASEÑA COINCIDEN
$conn= Conectar();
$sql = "SELECT id_usuario,id_tipo_usuario FROM usuarios WHERE email_usuario = '$nombre_usuario' and clave_usuario= '$clave_usuario'"; 
$resultado =sqlsrv_query( $conn,$sql);
if( $resultado === false)  
{  
     echo "Eres gilipollas te has confundido tolai\n";  
     die( print_r( sqlsrv_errors(), true));  
}  
while( $row = sqlsrv_fetch_array( $resultado,SQLSRV_FETCH_NUMERIC))  
{  
    $id_usuario=$row[0];
    $id_tipo_usuario=$row[1];
}  


if($id_tipo_usuario != NULL) {   // Si existe ese usuario y coincide con la contraseña devuelve el tipo de usuario con el Id_Tipo_usuario
    
    if($id_tipo_usuario == "1")
    header('Location: http:/Perfiles/portada.php');

    if($id_tipo_usuario == "2")
    header('Location: http:/Perfiles/portada.php');

    if($id_tipo_usuario == "3")
    header('Location: http:/Perfiles/portada.php');
}

$p_email = 'maria@hola.com';
$p_cont= '1234';
$p_resul = '';
$p_salida = 0;

$stmt = mssql_init('usp_simple', $conn);

mssql_bind($stmt, '@cadena', $p_cadena, SQLVARCHAR, false, false, 10);
mssql_bind($stmt, '@entero', $p_entero, SQLINT4);
mssql_bind($stmt, '@mensaje', $p_mensaje, SQLVARCHAR, true, false, 50);
mssql_bind($stmt, 'RETVAL', $p_salida, SQLINT4);

    //$sql = "SELECT clave_usuario, id_tipo_usuario, nombre_usuario, pregunta_seguridad_usuario FROM usuarios WHERE email_usuario = '$nombre_usuario'"; 
    //$resultado = mysqli_query($conn,$sql);
    // mysqli_close($conn);

    //echo "<br>";
    //var_dump($resultado);

    //echo "<br>";
    //$fila = mysqli_fetch_assoc($resultado);   
    //var_dump($fila);

    //$_SESSION["usuario"] = $fila['nombre_usuario'];
    //$keyword_bd = $fila['clave_usuario'];

    // COMPARAR CONTRASEÑAS
    //if ($clave_usuario == $keyword_bd){ // Coinciden las contraseñas

        // Extraer el nombre y asignárselo a la variable $_SESSION["usuario"]

        //if(isset($_GET['usuario'])){

            //$usuario = $_GET['usuario'];
                // Buscar en BD el nombre del usuario
            //include 'conexion_practica.php';
            //$sql = "SELECT nombre_usuario FROM usuarios WHERE email_usuario = '$usuario'"; 
            //$resultado = mysqli_query($conn,$sql);
            //$fila = mysqli_fetch_row($resultado);
            // $nombre = $fila[0]; // $nombre es el nombre (sin apellidos) del usuario
            //$nombre = $fila[0];    
        
        //}  

        //header('Location: http:/menu_opciones.php');

    //} else { // Las contraseñas no coinciden  

        //header("Location: http:/inicio.php?mensaje=1");
        
    //} 

else { // El usuario no existe en la base de datos. Pasar un mensaje de erro a 'error.php'
    echo "No existe ese usuario";
    // header("Location: http:/error.php?mensaje=2");
    //header("Location: http:/inicio.php?mensaje=2");
    
}
?>