<?php
$titulo = 'Alta Usuarios';
include '..\..\template\header.php';
?>
            <div class="container">
            <form name="formulario_as" method="POST" action="../../controladores/altausuario.control.php">
            <div class="form">
            <label for="email" class="form-label" id="Email">Email</label>
            <input type="text" name="email_usuario" class="form-control" id="email"  required>
            <br>
            <label for="clave_u" class="form-label" id="clave_u">Clave Usuario</label>
            <input type="text" name="clave_usuario" class="form-control" id="clave_u"  required>
            <br>
            <label for="clave_u" class="form-label" id="clave_u">Repita Clave Usuario</label>
            <input type="text" name="clave_usuario_r" class="form-control" id="clave_u"  required>
            <br>
            <label for="tipo_id" class="form-label" id="tipo_id"> Tipo de Usuario</label>
            <input type="tipo_id" name="tipo_usuario" class="form-control" id="tipo_id"  required>
            <br>
            <label for="Nombre" class="form-label" id="Nombre">Nombre Usuario</label>
            <input type="text" name="nombre_usuario" class="form-control" id="Nombre"  required>
            <br>
            <!-- <label for="Apellido" class="form-label" id="Apellido">Apellido Usuario</label>
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
            <br> -->
            </div>
            <div class="Buttons">
    <input type="submit" id="aceptar" name="alta_usuario" value="Aceptar">
    <input type="reset" id="aceptar" name="aceptar" value="Resetear">
</div>
            </form>
            </div>
        </body>
</html>