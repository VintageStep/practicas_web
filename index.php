<?php
//include 'template\header.php';
//include 'validacion\comprobar_mensaje.php';
?>

<!doctype html>
<html lang="es">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/style.css" rel="stylesheet">
        <title>Login</title>
</head>

<body>
        <div class="container">
                <form name="formulario" method="post" action="/inicio_sesion_practica.php" class="login">
                        <h1 class="formulario__titulo">Inicio sesión</h1>

                                <div class="mb-3">
                                        <label for="usuario" class="usuario__etiqueta">Usuario</label>
                                        <input type="text" name="usuario" class="login__usuario" id="usuario" placeholder="Ingrese email" required>
                                </div>
                                <div class="mb-3">
                                        <label for="clave" class="clave__etiqueta">Contraseña</label>
                                        <input type="password" class="login__clave" name="clave" id="clave" placeholder="Ingrese contraseña" required><br>
                                        <a href="#" class="login__enlace">¿Olvidó contraseña?</a>
                                </div>
                                        <input type="submit" id="boton_ingreso" name="boton_ingreso" value="Ingresar" class="login__boton">
                        <p class="formulario__error"><?php $mensaje ?></p>
                </form>
        </div>
</body>

</html>