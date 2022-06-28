<?php
include '..\..\template\header.php';
?>
<html>
    <head>
        <title>
            Alta Salario
        </title>
        <body>
        <div class="container">
            <form name="formulario_as" method="POST" action="">
            <div class="form">
                <label for="id_R" class="form-label" id="id_R"> ID Rango</label>
                <input type="text" id="id_R" class="form-control" name="id_R" >
                <br>
                <label for="desde" class="form-label" id="desde">Desde</label>
                <input type="text" id="desde" class="form-control" name="desde">
                <br>
                <label for="hasta" class="form-label" id="hasta">Hasta</label>
                <input type="text" id="hasta" class="form-control" name="hasta">
                <br>
            </div>
            <div class="Buttons">
    <input type="button" id="aceptar" name="aceptar" value="Aceptar">
    <input type="button" id="aceptar" name="aceptar" value="Resetear">
</div>
            </form>
        </div>
        </body>
    </head>
</html>