<?php
include '..\crud\conexion_practica.php';
include '..\template\header.php';
?>
<?php
#----------------------------------------------------------#
#Salir si alguno de los datos no está presente
/* if(	!isset($_POST["nombre_usuario"]) || 
	!isset($_POST["apellido_usuario"]) || 
	!isset($_POST["email_usuario"]) ||
	!isset($_POST["tlfn_usuario"]) ||
	!isset($_POST["id"])
	
) exit(); */

#Si todo va bien, se ejecuta esta parte del código...

$nombre_usuario = $_POST["nombre_usuario"];
$apellido_usuario = $_POST["apellido_usuario"];
$email_usuario = $_POST["email_usuario"];
$clave_usuario = $_POST["clave_usuario"];
$tlfn_usuario = $_POST["tlfn_usuario"];
$id = $_POST["id_usuario"];
$conn= Conectar();
$sentencia = $conn->prepare("UPDATE usuarios SET nombre_usuario = ?, apellido_usuario = ?, email_usuario = ?, clave_usuario = ? ,tlfn_usuario = ?  WHERE id_usuario = ?;");
$resultado = $sentencia->execute([$nombre_usuario, $apellido_usuario, $email_usuario ,$clave_usuario,$tlfn_usuario,$id]);
 # Pasar en el mismo orden de los ?
 $actualurl= $_SERVER['PHP_SELF'];

if($resultado === TRUE){
	header("location: ../crud/updateSave.html");	//redireccionamiento
}
else echo "Algo salió mal. Por favor verifica que la tabla exista, así como el ID del usuario";
?>