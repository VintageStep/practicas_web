<?php
include '..\template\header.php';
?>
<!doctype html>
<html lang="es">

<head>
    <title>
        Formulario modificar empresas
    </title>
</head>
<body>

<div class="container">
<form name="formulario_a" method="POST" action="">
<div class="">
<label for="usuario" class="form-label" id="usuario">Empresa</label>
<input type="text" name="usuario" class="form-control" id="usuario_m"  required>
<label for="cif" class="form-label" id="cif">CIF</label>
<input type="text" name="cif" class="form-control" id="cif"  required>
<label for="rs" class="form-label" id="rs">Racion Social</label>
<input type="text" name="rs" class="form-control" id="rs"  required>


</div>
<div class="Buttons">
    <input type="button" id="aceptar" name="aceptar" value="Aceptar">
    <input type="button" id="aceptar" name="aceptar" value="Resetear">

</div>


</div>


</body>
</html>