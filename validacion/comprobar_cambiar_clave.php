<?php
include 'template\header.php';
include 'validacion\comprobar_mensaje.php';


// PÁGINA CAMBIO CLAVE*****************************************************************************
include 'conexion_practica.php';
echo "<br>RECUPERAR CONTRASEÑA **********************************************************************";
// Trae los datos desde cambiar_clave.html

if(isset($_POST['usuario_olvido']) and 
   isset($_POST['password_nueva']) and 
   isset($_POST['password_confi'])){
    $usuario_olvido      = $_POST['usuario_olvido'];
    $clave_nueva_usuario = $_POST['password_nueva']; 
    $clave_confi_usuario = $_POST['password_confi'];
} else {
    echo "ERROR";
}


echo $usuario_olvido;
echo "<br>";
echo $clave_nueva_usuario;
echo "<br>";
echo $clave_confi_usuario; 


echo "Mail usuario: ", $_POST['usuario_olvido'];
echo "<br>";
echo "Clave nueva: " , $_POST['password_nueva'] ;
echo "<br>";
echo "Confirmacion: ", $_POST['password_confi'];


// COMPROBAR QUE COINCIDEN LA NUEVA CONTRASEÑA Y LA CONFIRMACIÓN
if($clave_nueva_usuario == $clave_confi_usuario) { // Coinciden las contraseñas
   
    echo ' - coinciden ambas contraseñas';

    // HACER CONSULTA
    $sql = "UPDATE usuarios SET clave_usuario = '$clave_nueva_usuario' WHERE email_usuario = '$usuario_olvido'";
    $resultado = mysqli_query($conn,$sql);
    echo "<br>Registro actualizado ";
    
    var_dump($resultado);
    header('Location: http:/inicio.php?mensaje=7'); // Enviar mensaje "Clave actualizada"

} else {

    echo ' - Las contraseñas no coinciden';
    header('Location: http:/cambiar_clave.php');

}