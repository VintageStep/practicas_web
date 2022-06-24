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
include 'crud\conexion_practica.php';

// COMPROBAR SI EXISTE EL USUARIO EN LA BD
$sql = "SELECT * FROM usuarios WHERE email_usuario = '$nombre_usuario'"; 
$resultado = mysqli_query($conn,$sql);
$fila = mysqli_fetch_row($resultado);
if($fila[4]<>0) { // Si existe ese usuario, buscar su contraseña en la BD 
    
    $sql = "SELECT clave_usuario, id_tipo_usuario, nombre_usuario, pregunta_seguridad_usuario FROM usuarios WHERE email_usuario = '$nombre_usuario'"; 
    $resultado = mysqli_query($conn,$sql);
    // mysqli_close($conn);

    echo "<br>";
    var_dump($resultado);

    echo "<br>";
    $fila = mysqli_fetch_assoc($resultado);   
    var_dump($fila);

    $_SESSION["usuario"] = $fila['nombre_usuario'];
    $keyword_bd = $fila['clave_usuario'];

    // COMPARAR CONTRASEÑAS
    if ($clave_usuario == $keyword_bd){ // Coinciden las contraseñas

        // Extraer el nombre y asignárselo a la variable $_SESSION["usuario"]

        if(isset($_GET['usuario'])){

            $usuario = $_GET['usuario'];
                // Buscar en BD el nombre del usuario
            include 'conexion_practica.php';
            $sql = "SELECT nombre_usuario FROM usuarios WHERE email_usuario = '$usuario'"; 
            $resultado = mysqli_query($conn,$sql);
            $fila = mysqli_fetch_row($resultado);
            // $nombre = $fila[0]; // $nombre es el nombre (sin apellidos) del usuario
            $nombre = $fila[0];    
        
        }  

        header('Location: http:/menu_opciones.php');

    } else { // Las contraseñas no coinciden  

        header("Location: http:/inicio.php?mensaje=1");
        
    } 

} else { // El usuario no existe en la base de datos. Pasar un mensaje de erro a 'error.php'
    //echo "No existe ese mail";
    // header("Location: http:/error.php?mensaje=2");
    header("Location: http:/inicio.php?mensaje=2");
    
}

?>