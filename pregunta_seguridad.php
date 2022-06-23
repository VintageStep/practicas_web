<?php
include 'template\header.php';
include 'validacion\comprobar_mensaje.php';

?>
<!doctype html>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>clave</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="css-final.css" rel="stylesheet" type="text/css">
  </head>
    <body>
            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                        <div class="col-4">
                            <br><br><br><br><br><h1 class="titulo" style=" font-family: 'BIZ UDPGothic', sans-serif; text-align: center; font-weight: bolder; color: #8864b4;">Preguntas de seguridad</h1>
                                        <div class="mb-3">
                                                <label  for="usuario" 
                                                        class="form-label">Ingrese su usuario</label>
                                                <input  type="text"
                                                        name="usuario_olvido" 
                                                        class="form-control" 
                                                        id="usuario_olvido"
                                                        placeholder="Ingrese su usuario"
                                                        required>
                                        </div>
                                        <div class="mb-3">
                                                <label  for="clave" 
                                                        class="form-label">¿Cuál es tu ciudad favorita?</label>
                                                <input  type="text" 
                                                        class="form-control" 
                                                        name="respuesta_usuario"
                                                        id="respuesta_usuario"
                                                        placeholder="Pregunta de seguridad"
                                                        minlength="0"
                                                        maxlength="15"
                                                        required><br>
                                        </div>

                                        <span class="botonf">
                                        <input type="submit" 
                                            class="btn btn-primary" 
                                            role="button" 
                                            id="validar" 
                                            name="validar" 
                                            value="validar">
                                        <input  type="button" 
                                            class="volver"
                                            role="button"
                                            onclick="location.href='index.php'"
                                            value="Volver">
                                        </input>
                                </span>
                                    <!-- <p class="error"><?php echo $mensaje=2 ?></p> -->
                    <div class="col-4"></div>
                </div>
            </div>
        </div>
    </body>
</html>