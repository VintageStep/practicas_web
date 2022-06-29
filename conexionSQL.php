<?php
function Conectar(){
$serverName = "192.168.34.28\\sqlexpress, 1433"; 
$connectionInfo = array( "Database"=>"Practicas", "UID"=>"Practica", "PWD"=>"1234");
try{
        $conn = sqlsrv_connect( $serverName, $connectionInfo);
     }

catch(Exception $e){
    echo "Ocurrió algo con la base de datos: " . $e->getMessage();
    exit;
}
return $conn;  
}
?>