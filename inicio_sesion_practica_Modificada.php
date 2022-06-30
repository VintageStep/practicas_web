<?php
include 'conexionSQL.php';
include 'error.php';
session_start();

// COMPROBAR VARIABLES RECIBIDAS
// Recibe del formulario inicio.html el usuario y la contraseña, por el método POST. 
// Validar si llega usuario y contraseña
if(isset($_POST['usuario']) and isset($_POST['clave'])){
    $nombre_usuario = $_POST['usuario']; // Es un mail
    $clave_usuario  = $_POST['clave'];
}

// CONECTAR BBDD
$conn= Conectar();

// COMPROBAR SI EXISTE EL USUARIO EN LA BD Y LA CONTRASEÑA COINCIDEN
$sql='Practicas.dbo.login_id_tipo ?,?';
$resultado =sqlsrv_prepare( $conn,$sql,array(&$nombre_usuario,&$clave_usuario));
$result = sqlsrv_execute($resultado);

// EN EL CASO QUE EL USUARIO Y LA CONTRASEÑA NO COINCIDAN DA ERROR
while( $row = sqlsrv_fetch_array( $resultado,SQLSRV_FETCH_NUMERIC))  
{  
    $id_usuario=$row[0];
      if ($id_usuario== 0){
        cerrarconexion($conn);
        Mensaje('1');
        exit;
    }
    $id_tipo_usuario=$row[1];
  } 
cerrarconexion($conn);
//CREACION DE LAS VARIABLES DE SESION
$_SESSION["usuario"] = $id_usuario;
$_SESSION["tipo_usuario"] = $id_tipo_usuario;


 //DEPENDIENDO DEL PERFIL(ADMINISTRADOR,TECNICO O USUARIO ENTRA EN UNA U OTRA PORTADA)
if($id_tipo_usuario == 1){
header('Location: http:/Perfiles/portada1.php');
}
elseif($id_tipo_usuario == 2){
header('Location: http:/Perfiles/portada2.php');
}

elseif($id_tipo_usuario == 3){
header('Location: http:/Perfiles/portada3.php');
}
else{
    ('Location: http:/portada.php');
}

?>