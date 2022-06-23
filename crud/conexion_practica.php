<?php
function Conectar(){
	$conn = null;
	$host = "127.0.0.1"; //LOCAL HOST
	$contraseña = ""; //M3d1t3rr4n30 --- pwd
	$usuario = "root";
	$db = "practicas";
	try{
		$conn = new PDO('mysql:host='.$host.';dbname=' . $db, $usuario, $contraseña);
	}catch(Exception $e){
		echo "Ocurrió algo con la base de datos: " . $e->getMessage();
		exit;
	}
	return $conn;
}
?>