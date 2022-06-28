<?php
include '..\..\template\header.php';
?>
<html>
    <head>
        <title>Baja Puestos</title>
    </head>
    <body>
            <div class="container">
                <form name="formulario_ap" method="POST" action="">
                <label for="idP" class="form-label" id="idP">ID Puesto</label>
                <input type="text" id="idP" class="form-control" name="idP">
                <br>
                <label for="idR" class="form-label" id="idR"> ID Rango</label>
                <input type="text" id="idR" class="form-control" name="idR">
                <br>
                <label for="idE" class="form-label" id="idE">ID Empresa</label>
                <input type="text" id="idE" class="form-control" name="idE">
                <br>
                <label for="mp" class="form-label" id="mp"> Puestos mujeres</label>
                <input type="text" id="mp" class="form-control" name="mp">
                <br>
                <label for="hp" class="form-label" id="hp">Pustos Hombres</label>
                <input type="text" id="hp" class="form-control" name="hp">
                <br>
                <label for="pm" class="form-label" id="pm">Porcentaje mujeres</label>
                <input type="text" id="pm" class="form-control" name="pm">
                <br>
                <label for="ph" class="form-label" id="ph">Porcentaje Hombres</label>
                <input type="text" id="ph" class="form-control" name="ph">
                <br>
                
                
                <div class="Buttons">
        <input type="button" id="aceptar" name="aceptar" value="Aceptar">
         <input type="button" id="aceptar" name="aceptar" value="Resetear">
                </div>
                </form>
            </div>
    </body>
</html>
