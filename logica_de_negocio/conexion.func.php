<?php

$serverName = "192.168.34.27\\sqlexpress, 1433"; 

$connectionInfo = array( "Database"=>"practicas", "UID"=>"practicas", "PWD"=>"1234","TrustServerCertificate"=>True);

$conn = sqlsrv_connect( $serverName, $connectionInfo);

if(!$conn){
    echo "Conexión no se pudo establecer.<br />";
    die( print_r( sqlsrv_errors(), true));
}


function cerrarconexion($conn){
if($conn===false){
    die(print_r(sqlsrv_errors(),true));
}
    sqlsrv_close($conn);
}
function cerrar_sesion(){
@session_start();
session_destroy();
echo '<li class="navbar__list"><a class="navbar__link" href="..\index.php">Cerrar Sesión</a></li>';
}

?>