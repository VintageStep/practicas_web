<?php
include 'conexion_practica.php';
$conn = Conectar();
if(isset($_GET['id'])){
  $eliminar_id=$_GET['id'];

	$borrar="DELETE FROM usuarios WHERE id_usuario =$eliminar_id";
	
	$ejecutar=$conn->query($borrar);

	if($ejecutar){
		header("location: ../crud/delete.html");
				}
	else{
		die(print_r(sqlsrv_errors(),true));
	}
}

echo "<br><br>";
echo "<a href='read.php'> OTRA CONSULTA </a>";

?>