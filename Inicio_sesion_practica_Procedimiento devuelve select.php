<?php

session_start();

if(isset($_POST['usuario']) and isset($_POST['clave'])){
    $nombre_usuario = $_POST['usuario']; // Es un mail
    $clave_usuario  = $_POST['clave'];
}


include 'crud\conexionSQL.php';

$conn= Conectar();

$sql='Practicas.dbo.login_id_tipo ?,?';


$email_usuario = 'maria@hola.com';
$clave_usuario='123';

$resultado =sqlsrv_prepare( $conn,$sql,array(&$email_usuario,&$clave_usuario));

$result = sqlsrv_execute($resultado);



if( $result === false)  
{  
    echo "Eres gilipollas te has confundido tolai\n";  
     die( print_r( sqlsrv_errors(), true));  
}  
while( $row = sqlsrv_fetch_array( $resultado,SQLSRV_FETCH_NUMERIC))  
{  
    $id_usuario=$row[0];
    if ($id_usuario=='0'){
    exit;
    }
    $id_tipo_usuario=$row[1];
} 