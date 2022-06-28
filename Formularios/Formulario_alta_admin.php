<?php
include '..\template\header.php';
?>
<!doctype html>
<html lang="es">
<head>
    <link rel="stylesheet" href="../css/style.css">
    <title>
        Formulario modificar empresas
    </title>
</head>

<body>
<<<<<<< HEAD
    <main class="formulario__main">
        <section class="formulario__container">
            <form class="formulario" name="formulario_a" method="POST" action="#">
                <h1 class="formulario__titulo">Alta Empresa</h1>
                <div class="formulario__grupo">
                    <label for="usuario" class="formulario__label" id="usuario">Empresa</label>
                    <input type="text" name="usuario" class="formulario__input" id="usuario_m" required>
                </div>
                <div class="formulario__grupo">
                    <label for="cif" class="formulario__label" id="cif">CIF</label>
                    <input type="text" name="cif" class="formulario__input" id="cif" required>
                </div>
                <div class="formulario__grupo">
                    <label for="rs" class="formulario__label" id="rs">Racion Social</label>
                    <input type="text" name="rs" class="formulario__input" id="rs" required>
                </div>
                <div class="formulario__botonera">
                    <input type="button" class="formulario__boton" id="aceptar" name="aceptar" value="Aceptar" />
                    <input type="button" class="formulario__boton" id="resetear" name="resetear" value="Resetear" />
                </div>
        </section>
    </main>
=======
<div class="container">
<form name="formulario_aad" method="POST" action="">
<div class="form">
<label for="usuario" class="form-label" id="usuario">Empresa</label>
<input type="text" name="usuario" class="form-control" id="usuario_m"  required>
<label for="cif" class="form-label" id="cif">CIF</label>
<input type="text" name="cif" class="form-control" id="cif"  required>
<label for="rs" class="form-label" id="rs">Racion Social</label>
<input type="text" name="rs" class="form-control" id="rs"  required>
</form>
</div>
<div class="Buttons">
<form>
    <input type="button" id="aceptar" name="aceptar" value="Aceptar">
    <input type="button" id="aceptar" name="aceptar" value="Resetear">
</form>
</div>
</div>
>>>>>>> miguel
</body>
</html>