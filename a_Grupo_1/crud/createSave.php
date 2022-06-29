<?php 
//conexion modelo PDO
include("..\crud\conexion_practica.php");

//Traemos datos del formulario.
$nombre=$_POST['nombre_usuario']; 
$apellido=$_POST['apellido_usuario'];
$email=$_POST['email_usuario'];
$clave=$_POST['clave_usuario'];
$telefono=$_POST['tlfn_usuario'];
$idUs=$_POST['id_tipo_usuario'];
//preparamos consulta : valores int sin ' '
$insertar="INSERT INTO usuarios (nombre_usuario,apellido_usuario,email_usuario,clave_usuario,tlfn_usuario,id_tipo_usuario) VALUES ('$nombre','$apellido','$email','$clave',$telefono,$idUs)";
//establecemos conexion
$conn = Conectar();
//ejecutamos consulta
$ejecutar=$conn->query($insertar);
//si la consulta es correcta se sigue con la asociacion emp_usu
if($ejecutar){
	$idUsuario=$conn->lastInsertId($insertar); //se trae el ID de la ultima creacion para insertar la asociacion ya que es en otra tabla
	$idEmpresa=$_POST['id_empresa'];
	$asociar = "INSERT INTO emp_usu (id_empresa,id_usuario) VALUES ( $idEmpresa,$idUsuario )";
	$ejecutar1 = $conn->query($asociar);
			}
	else{
		echo "Error: " . $insertar . $asociar . "<br>" . $conn->error;
	}

?>
<!DOCTYPE html>

<html lang="es" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <link rel="stylesheet" type="text/css" href="..\css\css-final.css">
    <title></title>
</head>
<body>
<div style="text-align: center">
<h2>Usuario creado</h2>
    <span class="botonf">

		<button onclick="location.href='../crud/create.php'" id="boton_ingreso" name="boton_ingreso" value="Nuevo Usuario" class="btn btn-primary">Nuevo Usuario</button>
        <button onclick="location.href='../crud/read.php'" id="boton_ingreso" name="boton_ingreso" value="Otra consulta" class="btn btn-primary">Otra consulta</button>
    </span>
</div>
</body>
</html>

