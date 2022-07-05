<?php

// Verificar si se llega a este script desde el formulario login
if(isset($_POST['boton_login'])){
    // Recoger losdatos del formulario
    $nombre_usuario = $_POST['usuario']; //Se ingresa con el email
    $clave_usuario  = $_POST['clave'];

    require_once '../logica_de_negocio/conexion.func.php';
    require_once '../logica_de_negocio/validacion.func.php';

    // Si no es falso, es decir si existe el error ->
    if(inputVacioLogin($nombre_usuario, $clave_usuario) !== false) {
        header("location: ../index.php?error=inputvacio");
        exit();
    }

    loginUsuario($conn, $nombre_usuario, $clave_usuario);

} else {
    header("location: ../index.php?error=emptyinput");
    exit();
}