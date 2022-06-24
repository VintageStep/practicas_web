<?php
//include 'template\header.php';
//include 'validacion\comprobar_mensaje.php';
?>

<!doctype html>
<html lang="es">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <title>Login</title>
</head>
<body>
        <main class="container">
                <form name="formulario" method="POST" action="/inicio_sesion_practica.php" class="login">
                        <h1 class="login__titulo">Inicio de sesión</h1>
                                        <label for="clave" class="clave__etiqueta">Contraseña</label>
                                <div class="usuario__container">
                                        <label for="usuario" class="usuario__etiqueta">Usuario</label>
                                        <input type="text" name="usuario" class="login__usuario" id="usuario" placeholder="Ingrese email" required>
                                        <input type="submit" id="boton_ingreso" name="boton_ingreso" value="Ingresar" class="login__boton">
                                <div class="clave__container">
                                        <label for="clave" class="clave__etiqueta">Contraseña</label>
                                        <input type="password" class="login__clave" name="clave" id="clave" placeholder="Ingrese contraseña" required><br>
                                        <a href="#" class="login__enlace">¿Olvidó contraseña?</a>
                                        <input type="submit" id="boton_ingreso" name="boton_ingreso" value="Ingresar" class="login__boton">
                        <p class="formulario__error"><?php $mensaje ?></p>
        </main>
</body>
</html>