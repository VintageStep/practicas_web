<?php
include("..\crud\conexion_practica.php");
include '..\template\header.php';
?>
<!doctype html>
<html lang="es">
  <head>
    <title>Igualdad</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="\css\css-final.css">
  </head>
  <body>
  <div style="text-align=center">
	<form method="POST" action="createSave.php">
	<h1> Registro de usuarios </h1>
	<label>Nombre:</label>
	<input type="text" name="nombre_usuario" required> <br>
	<label>Apellido:</label>
	<input type="text" name="apellido_usuario" required> <br>
	<label>Email:</label>
	<input type="text" name="email_usuario" required> <br>
	<label>Contraseña:</label>
	<input type="password" name="clave_usuario" required> <br>
	<label>Telefono:</label>
	<input type="number" name="tlfn_usuario" required> <br> <br>
	<label>Tipo de Usuario:</label> 
		  <select name="id_tipo_usuario" id="id_tipo_usuario" required>
						<option value="1">Administrador</option>
						<option value="2">Técnico</option>
						<option value="3">Usuario</option>
		</select><br><br>
	<label> Empresa asociada: </label>
	<select name="id_empresa" id="id_empresa">
<?php
	$conn= Conectar();	//conexion base de datos
 	$sentencia = $conn->query("SELECT id_empresa,razon_social FROM empresa ;"); 
	$empresas = $sentencia->fetchAll(PDO::FETCH_OBJ);
  	foreach($empresas as $empresa){   ///asi rellenamos la select de creacion de usuario para asociar a 1 empresa 
?>
        <option value="<?php echo $empresa->id_empresa; ?>"><?php echo ($empresa->razon_social); ?></option>
    <?php
	} 
    ?> </select>
	
	<br><br>
	<span class="botonf">
	<button onclick="location.href='../crud/read.php'" id="boton_ingreso" name="boton_ingreso" value="Volver" class="volver">Volver</button> </a></td>
	<input class="btn btn-primary" type="reset" name="Reset" value="Limpiar">
	<input class="btn btn-primary" type="submit" name="Enviar" value="Enviar">
	</span>
</form>
</div>
  </body>
</html>