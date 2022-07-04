<?php
include 'conexionSQL.php';
session_start();

// Verificar si se llega a este script desde el formulario login
if(isset($_POST['boton_login'])){
    // Recoger losdatos del formulario
    $nombre_usuario = $_POST['usuario']; 
    $clave_usuario  = $_POST['clave'];

    //Comprobaciones pendientes.
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
      if ($id_usuario=='0'){
        cerrarconexion($conn);
        header("Location: http:/a_Grupo_1/validacion/comprobar_mensaje.php?mensaje=1");
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