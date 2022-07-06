<?php


$serverName = "192.168.34.27\\sqlexpress, 1433"; 

$connectionInfo = array( "Database"=>"practicas", "UID"=>"practicas", "PWD"=>"1234","TrustServerCertificate"=>True);

$conn = sqlsrv_connect( $serverName, $connectionInfo);

if(!$conn){
    echo "Conexión no se pudo establecer.<br />";
    die( print_r( sqlsrv_errors(), true));
}


