<?php
include 'template\header.php';
//include 'validacion\comprobar_mensaje.php';
?>

<!doctype html>
<html lang="es">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300;400;700&display=swap" rel="stylesheet">        
        <title>Login</title>
</head>
<body>
        <main class="login__main container">
                <form name="formulario" method="POST" action="/inicio_sesion_practica.php" class="login">
                        <h1 class="login__titulo">Inicio de sesión</h1>
                        <div class="login__contenedor">
                                <div class="login__grupo">
                                        <input type="text" name="usuario" class="login__input" id="usuario" placeholder=" " required>
                                        <label for="usuario" class="login__label">Usuario</label>
                                </div>
                                <div class="login__grupo">
                                        <input type="password" class="login__input" name="clave" id="clave" placeholder=" " required>
                                        <label for="clave" class="login__label">Contraseña</label>
                                </div>
                                        <input type="submit" id="boton_ingreso" name="boton_ingreso" value="Ingresar" class="login__boton">
                                <p class="login__parrafo">
                                        <a href="#" class="login__enlace">¿Olvidó su contraseña?</a>
                                        <a href="#" class="login__enlace">Sobre nosotros</a>
                                </p>        
                                <p class="login__error"><?php $mensaje ?></p>
                        </div>
        </main>
</body>
</html>
