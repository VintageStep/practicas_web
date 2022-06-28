<?php
include '..\..\template\header.php';
?>
<html>
    <head>
    <title>
        Modificar Usuarios
    </title>
    </head>
        <body>
            <div class="container">
            <form name="formulario_mu" method="POST" action="">
            <div class="form">
            <label for="tipo_id" class="form-label" id="tipo_id"> Tipo de Usuario</label>
            <input type="tipo_id" name="tipo_id" class="form-control" id="tipo_id"  required>
            <br>
            <label for="Nombre" class="form-label" id="Nombre">Nombre Usuario</label>
            <input type="text" name="Nombre" class="form-control" id="Nombre"  required>
            <br>
            <label for="Apellido" class="form-label" id="Apellido">Apellido Usuario</label>
            <input type="text" name="Apellido" class="form-control" id="Apellido"  required>
            <br>
            <label for="telefono" class="form-label" id="telefono">Telefono</label>
            <input type="text" name="telefono" class="form-control" id="telefono"  required>
            <br>
            <label for="psu" class="form-label" id="psu">Pregunta Seguridad Usuario</label>
            <input type="text" name="psu" class="form-control" id="psu"  required>
            <br>
            <label for="rsu" class="form-label" id="rsu">Respuestas Seguridad Usuario</label>
            <input type="text" name="clave" class="form-control" id="clave"  required>
            <br>
            </div>
            <div class="Buttons">
    <input type="button" id="aceptar" name="aceptar" value="Aceptar">
    <input type="button" id="aceptar" name="aceptar" value="Resetear">
</div>
            </form>
            </div>
        </body>
    
</html>