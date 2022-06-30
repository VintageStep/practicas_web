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