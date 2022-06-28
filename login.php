<?php
include 'template\header.php';
include 'validacion\comprobar_mensaje.php';
?>

<!doctype html>
<html lang="es">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="css/css-final.css" rel="stylesheet" type="text/css">
        <title>Login</title>
</head>

<body>
        <div class="container">
                <form name="formulario" method="post" action="/inicio_sesion_practica.php" class="formulario">
                        <h1 class="titulo" style=" font-family: 'BIZ UDPGothic', sans-serif; text-align: center; font-weight: bolder; color: #8864b4;">Inicio sesión</h1>
                                <div class="mb-3">
                                        <label for="usuario" class="form-label">Usuario</label>
                                        <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Ingrese email" required>
                                </div>
                                <div class="mb-3">
                                        <label for="clave" class="form-label">Contraseña</label>
                                        <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingrese contraseña" required><br>
                                        <a href="/validacion/pregunta_seguridad.php">¿Olvidó contraseña?</a>
                                </div>
                                <span class="botonf">
                                <div>
                                        <input type="submit" id="boton_ingreso" name="boton_ingreso" value="Ingresar" class="btn btn-primary">
                                </div>
                                </span>
                        <p class="error"><?php $mensaje ?></p>
                </form>
        </div>
</body>

</html>