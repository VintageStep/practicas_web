<?php
function Conectar(){
$serverName = "192.168.34.28\\sqlexpress, 1433"; 

$connectionInfo = array( "Database"=>"Practicas", "UID"=>"Practica", "PWD"=>"1234","TrustServerCertificate"=>True);

$conn = sqlsrv_connect( $serverName, $connectionInfo);
if( $conn ) {
    echo "Connection established.<br />";
}else{
    echo "Connection could not be established.<br />";
    die( print_r( sqlsrv_errors(), true));
}
return $conn;  
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