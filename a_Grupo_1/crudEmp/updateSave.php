<!-- FINIQUITADO -->
<?php
/*------------------Conexion a la base de datos-----------------------------*/
include 'conexion_practica.php';
$conn = Conectar();
//-----------------EXTRAER DATOS DEL FORMULARIO-------------------------------------//
   $razon_social = $_POST['razon_social'];
   $cif_empresa = $_POST['cif_empresa'];
   $domicilio_social = $_POST['domicilio_social'];
   $forma_juridica = $_POST['forma_juridica'];
   $anio_constitucion = $_POST['anio_constitucion'];
   $responsable_empresa = $_POST['responsable_empresa'];
   $cargo_responsable_empresa = $_POST['cargo_responsable_empresa'];
   $sector_empresa = $_POST['sector_empresa'];
   $cnae_empresa = $_POST['cnae_empresa'];
   $convenio_colectivo_empresa = $_POST['convenio_colectivo_empresa'];
   $mujeres_empresa = $_POST['mujeres_empresa'];
   $hombres_empresa = $_POST['hombres_empresa'];
   $centros_empresa = $_POST['centros_empresa'];
   $contacto_empresa = $_POST['contacto_empresa'];
   $mail_empresa = $_POST['mail_empresa'];
   $tlfn_empresa = $_POST['tlfn_empresa'];
   $id=$_POST["id_empresa"];
   /*$usu_alta = htmlentities(trim($_POST['usu_alta']));
   $fecha_alta = htmlentities(trim($_POST['fecha_alta']));
   $usu_modif = htmlentities(trim($_POST['usu_modif']));
   $fecha_modific = htmlentities(trim($_POST['fecha_modific']));*/   

/*---------------------------Actualizar datos de la empresa------------------*/
$sentencia =$conn->prepare("UPDATE empresa SET razon_social = ?,cif_empresa = ?,domicilio_social = ?,  
    forma_juridica = ?,anio_constitucion= ?,responsable_empresa= ?,cargo_responsable_empresa= ?,  
    sector_empresa= ?,cnae_empresa= ?,convenio_colectivo_empresa= ?,mujeres_empresa= ?,hombres_empresa= ?,  
    centros_empresa= ?,contacto_empresa= ?,mail_empresa= ?,tlfn_empresa= ? 
    where id_empresa = ?;");

#pasar en el mismo orden de los ?

$resultado =$sentencia->execute([$razon_social,$cif_empresa,$domicilio_social,
    $forma_juridica,$anio_constitucion,$responsable_empresa,$cargo_responsable_empresa, 
    $sector_empresa,$cnae_empresa,$convenio_colectivo_empresa,$mujeres_empresa,$hombres_empresa,
    $centros_empresa,$contacto_empresa,$mail_empresa,$tlfn_empresa,$id]);


   $actualurl=$_SERVER['PHP_SELF'];

if($resultado === TRUE){
   header("location: ../crudEmp/updateSave.html");
} else echo "Algo salio mal... Verifique los datos";
?>




