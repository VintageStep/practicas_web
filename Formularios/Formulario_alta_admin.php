<?php
include '..\template\header.php';
$titulo = "Formulario modificar empresas";
?>

    <main class="main">
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
</body>
</html>