<?php
include 'template\header.php';
include 'validacion\comprobar_mensaje.php';
////Esto es del grupo anterior y hay que adaptarlo.  cambiar el mysqli_query a pdo (conexion)
?>

<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>clave</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="CSSformularios.css" rel="stylesheet" type="text/css">
    <style>          
    </style>
  </head>
    <body>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" 
                integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
            <div class="container">
                <div class="row">
                    <div class="col-4"></div>
                        <div class="col-4">
                            <form name="formulario" method="post" action="/comprobar_cambiar_clave.php">
                                <h2>Recuperar Contraseña</h2>
                                    
                                    <div class="mb-2">
                                        
                                        <label  for="usuario_olvido" class="form-label">Ingrese su usuario</label> <br>
                                        <input  type="text" 
                                                name="usuario_olvido" 
                                                id="usuario_olvido"
                                                required> 
                                    </div>
                                    
                                                                      
                                    <div class="mb-2">
                                        <label for="password_new" class="form-label">Nueva contraseña</label>
                                        <input type="password" class="form-control" id="password_new" name="password_nueva">
                                    </div>
                                    <div class="mb-2">
                                        <label for="password2" class="form-label">Confirme contraseña</label>
                                        <input type="password" class="form-control" id="password2" name="password_confi">
                                    </div>
                                        <span>
                                            <input type="submit" class="button-crear" role="button" value="Cambiar Clave">
                                                <!--Agregar Mensaje If passwordNew == password2 Mensaje:"Clave cambiada exitosamente"
                                                else "Verifique clave"-->                                        
                                        </span>
                                        
                                    </div>
                                      
                            </form>   
                        <div class="col-4"></div>
                    </div>
                </div>
            </div>
    </body>
</html>