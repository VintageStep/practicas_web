<?php
include '..\..\template\header.php';
?>
<html>
<head>
    <title> Alta</title>
</head>
<body>
<div class="containter">
    <form name="formularios-ra" method="post" action="">
        <label for="idE" class="form-label" name="idE">ID Empresa</label>
        <input  type="text" id="idE" class="form-control" name="idE">
        <label for="idU" class="form-label" name="idU"></label>
        <input  type="text" id="idU" class="form-control" name="idU">

        <div class="Buttons">
    <input type="button" id="aceptar" name="aceptar" value="Aceptar">
    <input type="button" id="aceptar" name="aceptar" value="Resetear">
</div>
    </form>
</div>

</body>

</html>