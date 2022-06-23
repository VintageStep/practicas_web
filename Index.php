<?php
include 'template\header.php';
include 'validacion\comprobar_mensaje.php';
?>

<!doctype html>
<html lang="es">

<head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link href="css/css-final.css" rel="stylesheet" type="text/css">
        <title>Login</title>
</head>

<body>
        <div class="container">
                <div class="row">
                        <div class="col-4"></div>
                        <div class="col-4">
                                <form name="formulario" method="post" action="/inicio_sesion_practica.php">
                                        <br><br><br><br><br>
                                        <h1 class="titulo" style=" font-family: 'BIZ UDPGothic', sans-serif; text-align: center; font-weight: bolder; color: #8864b4;">Inicio sesión</h1>

                                        <div class="mb-3">
                                                <label for="usuario" class="form-label">Usuario</label>
                                                <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Ingrese email" required>
                                        </div>
                                        <div class="mb-3">
                                                <label for="clave" class="form-label">Contraseña</label>
                                                <input type="password" class="form-control" name="clave" id="clave" placeholder="Ingrese contraseña" required><br>
                                                <a href="pregunta_seguridad.php">¿Olvidó contraseña?</a>
                                        </div>

                                        <span class="botonf">
                                                <div>
                                                        <input type="submit" id="boton_ingreso" name="boton_ingreso" value="Ingresar" class="btn btn-primary">
                                                </div>
                                        </span>
                                        <p class="error"><?php $mensaje ?></p>
                                </form>
                                <div class="col-4"></div>
                        </div>
                </div>
        </div>
</body>

</html>