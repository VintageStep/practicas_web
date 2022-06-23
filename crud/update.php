<?php
include '..\crud\conexion_practica.php';
include '..\template\header.php';
$conn= Conectar();
$id_usuario = $_GET["id"]; 
$sentencia = $conn->prepare("SELECT id_usuario,nombre_usuario,apellido_usuario,email_usuario,tlfn_usuario,clave_usuario FROM usuarios WHERE id_usuario = ?;");
$sentencia->execute([$id_usuario]);
$usuario = $sentencia->fetch(PDO::FETCH_OBJ);
?>

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="\css\css-final.css">
	<title>Igualdad</title>
</head>
<body>
<div style="text-aling=center">
	<form method="POST" action="updateSave.php">
		<!-- Ocultamos el ID para que el usuario no pueda cambiarlo (en teoría) -->
		<h1>Actualizacion de usuarios:</h1>
		<input type="hidden" name="id_usuario" value="<?php echo $usuario->id_usuario; ?>">
		<label>Nombre:</label>		
			<input value="<?php echo $usuario->nombre_usuario; ?>" name="nombre_usuario" required type="" placeholder="Escribe tu nombre...">
		<br>
		<label>Apellido:</label>		
			<input value="<?php echo $usuario->apellido_usuario; ?>" name="apellido_usuario" required type="" placeholder="Escribe tus apellido...">
		<br>
		<label>Email:</label>		
			<input value="<?php echo $usuario->email_usuario; ?>" name="email_usuario" required type="" placeholder="Escribe tu email...">
		<br>
		<label>Telefono:</label>
			<input value="<?php echo $usuario->tlfn_usuario; ?>" name="tlfn_usuario" required type="" placeholder="Escribe tu telefono...">
		<br>
		<label>Contraseña:</label>
			<input value="<?php echo $usuario->clave_usuario; ?>" name="clave_usuario" required type="" placeholder="Escriba su nueva contraseña...">
		<br><br>
		<span class="botonf">
		<input  class="btn btn-primary" type="submit" value="Guardar cambios">
		<input class="volver" type="reset" value="Reestablecer datos usuario">
		</span>
	</form>
</div>
</body>
</html>