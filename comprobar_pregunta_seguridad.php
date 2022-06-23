<?php
include 'template\header.php';
include 'validacion\comprobar_mensaje.php';



// PREGUNTA DE SEGURIDAD **************************************************************************************";
// Pagina de cambio de contraseña
$pagina_cambio_clave = "http://localhost/cambiar_clave.php";

if(isset($_POST['usuario_olvido']) and (isset($_POST['respuesta_usuario']))){
    $usuario_olvido = $_POST['usuario_olvido']; // Es un mail
    $respuesta_seguridad_usuario  = $_POST['respuesta_usuario'];
}

echo "<br>usuario: ", $usuario_olvido;
echo "<br>respuesta introducida: ", $respuesta_seguridad_usuario;

// CONECTAR BBDD
include 'conexion_practica.php';

// COMPROBAR SI EXISTE EL USUARIO EN LA BD   //// cambiar el mysqli_query
$sql = "SELECT respuesta_seguridad_usuario FROM usuarios WHERE email_usuario = '$usuario_olvido'"; 
$resultado = mysqli_query($conn,$sql);
echo "<br>Resultado";
var_dump($resultado);
echo "<br>Fila";
$fila = mysqli_fetch_row($resultado);
var_dump($fila);


if ($fila[0]) { // Existe el usuario en la BD
    // echo "Existe el usuario";
/*
    //    HACER QUERY-BUSCAR CONTRASEÑA EN LA BBDD A PARTIR DEL MAIL
    $sql = "SELECT respuesta_seguridad_usuario FROM usuarios WHERE email_usuario = '$usuario_olvido'"; 
    $resultado = mysqli_query($conn,$sql);
    echo "<br>";
    var_dump($resultado);
    echo "<br>";

    $fila = mysqli_fetch_row($resultado);
    echo "<br>Fila: ";
    var_dump($fila);
    */

    $respuesta_olvido_bd = $fila[0];
    echo "<br>Respuesta usuario en BD: ",$respuesta_olvido_bd;

    // COMPARAR CONTRASEÑAS
    // Convierte ambias variables a mayúsculas para evitar errores y luego compara.
    echo "<br>Respuesta seguridad usuario: ", strtoupper($respuesta_seguridad_usuario);
    echo "<br>Respuesta olvido BD: ", strtoupper($respuesta_olvido_bd);

    if (strtoupper($respuesta_seguridad_usuario) == strtoupper($respuesta_olvido_bd)){ //Coinciden las respuestas  
        //echo "<br>Coinciden";
        header('Location: '.$pagina_cambio_clave);   
        header('Location: '.$pagina_cambio_clave.'?$usuario_olvido');
        //$usuario_olvido      = $_POST['usuario_olvido'];      
    } 

    else {
        echo "<br>3 - No coinciden";
        header("Location: http:/pregunta_seguridad.php?mensaje=3");
    }

} else { // 2 - El usuario no existe en la base de datos. Pasar un mensaje de erro a 'error.php'
         // Volver a pregunta de seguridad.
    // echo "<br>3 - No existe";
    header("Location: http:/pregunta_seguridad.php?mensaje=2");
} 

?>