<?php

//Server de pedro
//$serverName = "192.168.34.27\\sqlexpress, 1433"; 

$serverName = "192.168.1.136\\sqlexpress, 1433";

//Servers de clase
//$connectionInfo = array( "Database"=>"practicas", "UID"=>"practicas", "PWD"=>"1234","TrustServerCertificate"=>True);

$connectionInfo = array( "Database"=>"practicas", "UID"=>"practicas", "PWD"=>"practicas","TrustServerCertificate"=>True);
$conn = sqlsrv_connect( $serverName, $connectionInfo);

if(!$conn){
    echo "Conexión no se pudo establecer.<br />";
    die( print_r( sqlsrv_errors(), true));
}


