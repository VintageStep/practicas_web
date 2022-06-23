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
   /*$usu_alta = htmlentities(trim($_POST['usu_alta']));
   $fecha_alta = htmlentities(trim($_POST['fecha_alta']));
   $usu_modif = htmlentities(trim($_POST['usu_modif']));
   $fecha_modific = htmlentities(trim($_POST['fecha_modific']));*/   

/*---------------------------Crear datos de la empresa------------------*/
$insertar = "INSERT INTO empresa (razon_social,cif_empresa,domicilio_social,forma_juridica,anio_constitucion,responsable_empresa,cargo_responsable_empresa,  
    sector_empresa,cnae_empresa,convenio_colectivo_empresa,mujeres_empresa,hombres_empresa,  
    centros_empresa,contacto_empresa,mail_empresa,tlfn_empresa) VALUES ('$razon_social',$cif_empresa,'$domicilio_social','$forma_juridica',$anio_constitucion,'$responsable_empresa','$cargo_responsable_empresa','$sector_empresa',$cnae_empresa,'$convenio_colectivo_empresa',$mujeres_empresa,$hombres_empresa,'$centros_empresa','$contacto_empresa','$mail_empresa',$tlfn_empresa)";
$conn = Conectar();
#pasar en el mismo orden de los ?
$ejecutar=$conn->query($insertar);

if($ejecutar){
	echo header("location: ../crudEmp/createSave.html");
			}
	else{
		 die(print_r(sqlsrv_errors(),true));
	}

?>


