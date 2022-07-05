<?php


if (isset($_POST["alta_usuario"])){

    $email_usuario = $_POST["email_usuario"];
    $clave_usuario = $_POST["clave_usuario"];
    $clave_usuario_r = $_POST["clave_usuario_r"];
    $tipo_usuario = $_POST["tipo_usuario"];
    $nombre_usuario = $_POST["nombre_usuario"];

    require_once '../logica_de_negocio/conexion.func.php';
    require_once '../logica_de_negocio/validacion.func.php';

    // if (emptyInputSignup($name, $email, $username, $pwd, $pwdRepeat) !== false){
    //     header("location: ../signup.php?error=emptyinput");
    //     exit();
    // }
    // if (invalidedUid($username) !== false){
    //     header("location: ../signup.php?error=invaliduid");
    //     exit();
    // }    
    // if (invalidEmail($email) !== false){
    //     header("location: ../signup.php?error=invalidemail");
    //     exit();
    // } 
    if (coincideClave($clave_usuario, $clave_usuario_r) !== false){
        header("location: ../Formularios/Altausuarios.php?error=clavenocoincide");
        exit();
    }
    if (existeUsuario($conn, $email_usuario) !== false){
        header("location: ../Formularios/Altausuarios.php?error=existeusuario");
        exit();
    }
    //regex check for username, email and password

    crearUsuario($conn, $email_usuario, $clave_usuario, $tipo_usuario, $nombre_usuario);
} else {
    header("location: ../signup.php");
    exit();
}