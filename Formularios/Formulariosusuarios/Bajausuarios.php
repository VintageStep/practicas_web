<?php
include '..\..\template\header.php';
?>
<html>
    <head>
    <title>
       Baja Usuarios
    </title>
    </head>
        <body>
            <div class="container">
            <form name="formulario_bu" method="POST" action="">
            <div class="form">
            <label for="tipo_id" class="form-label" id="tipo_id"> Tipo de Usuario</label>
            <input type="tipo_id" name="tipo_id" class="form-control" id="tipo_id"  required>
            <br>
            <label for="Nombre" class="form-label" id="Nombre">Nombre Usuario</label>
            <input type="text" name="Nombre" class="form-control" id="Nombre"  required>
            <br>
            <label for="Apellido" class="form-label" id="Apellido">Apellido Usuario</label>
            <input type="text" name="Apellido" class="form-control" id="Apellido"  required>
            </div>
            <div class="Buttons">
    <input type="button" id="aceptar" name="aceptar" value="Aceptar">
    <input type="button" id="aceptar" name="aceptar" value="Resetear">
</div>
            </form>
</div>
        </body>
</html>