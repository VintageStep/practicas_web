<!-- FINIQUITADO! -->
<?php
include 'conexion_practica.php';
$conn = Conectar();
if(isset($_GET['id'])){
  $eliminar_id=$_GET['id'];

	$borrar="DELETE FROM empresa WHERE id_empresa = $eliminar_id";
	
	$ejecutar=$conn->query($borrar);

	if($ejecutar){
		echo header("location: ../crudEmp/delete.html");
				}
	else{
		die(print_r(sqlsrv_errors(),true));
	}
}

echo "<br><br>";
echo "<a href='../crudEmp/read.php'> OTRA CONSULTA </a>";