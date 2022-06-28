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
<form name="formulario_m" method="POST" action="">
<div class="form">
<label for="usuario" class="form-label" id="usuario">Empresa</label>
<input type="text" name="usuario" class="form-control" id="usuario_m"  required>
<br>
<label for="domicilio-s" class="form-label" id="usuario">Domicilio Social</label>
<input type="text" name="domicilio-s" class="form-control" id="domicilio-s"  required>
<br>
<label for="forma-j" class="form-label" id="forma-j">Forma Juridica</label>
<input type="text" name="forma-j" class="form-control" id="forma-j"  required>
<br>
<label for="constitucion" class="form-label" id="constitucion">Año de Constitucion</label>
<input type="text" name="domicilio-s" class="form-control" id="constitucion"  required>
<br>
<label for="responsble" class="form-label" id="responsable">Responsable</label>
<input type="text" name="responsable" class="form-control" id="responsable"  required>
<br>
<label for="c-responsable" class="form-label" id="c-responsable">Domicilio Social</label>
<input type="text" name="c-responsable" class="form-control" id="c-responsable"  required>
<br>
<label for="cce" class="form-label" id="cce">Convenio Colectivo</label>
<input type="text" name="cce" class="form-control" id="cce"  required>
<br>
<label for="centros" class="form-label" id="centros">Centros</label>
<input type="text" name="centros" class="form-control" id="centros"  required>
<br>
<label for="contacto-e" class="form-label" id="contacto-e">Contacto</label>
<input type="text" name="contacto-e" class="form-control" id="contacto-e"  required>
<br>
<label for="mail" class="form-label" id="mail">Correo Empresa</label>
<input type="text" name="mail" class="form-control" id="mail"  required>
<br>
<label for="telefono" class="form-label" id="telefono">Telefono Empresa</label>
<input type="text" name="telefono" class="form-control" id="Telefono"  required>
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