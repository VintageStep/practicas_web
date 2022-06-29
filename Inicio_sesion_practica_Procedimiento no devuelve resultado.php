<?php

session_start();

if(isset($_POST['usuario']) and isset($_POST['clave'])){
    $nombre_usuario = $_POST['usuario']; // Es un mail
    $clave_usuario  = $_POST['clave'];
}


include 'crud\conexionSQL.php';

$conn= Conectar();

$sql='Practicas.dbo.alta_emp_usu ?,?';


$id_empresa = 1;
$id_usuario=4;

$resultado =sqlsrv_prepare( $conn,$sql,array(&$id_empresa,&$id_empresa));

$result = sqlsrv_execute($resultado);


if( $result === false)  
{  
    echo "resultado ya esta en la Base de datos\n";  
     die( print_r( sqlsrv_errors(), true));  
}  
