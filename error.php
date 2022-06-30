<?php
include 'errorlogin.php';

function Mensaje($mensaje){
    if (isset($_POST["boton_ingreso"])){
        if ($mensaje==='1'){
            $mensaje1='Error usuario o contraseña';
            //echo $mensaje1;
            echo ("Location: http:/errorlogin.php?mensaje1=$mensaje1");
            // sleep(5);
            // header("Location: http:/index.php");
            // die();
        }    
    }
}

// function paginaerror($mensaje1){
//     $pagina= "<!doctype html>
//     <head>
//     </head>
//     <body>
//     <title>'$mensaje1'</title>
//     <h1>'$mensaje1'</h1>
//     </body>
//     </html>";
//     header($pagina);
// }

function paginaerror($mensaje1){

    $pagina= "<head>
    </head>
    <body>
    <title>'$mensaje1'</title>
    <h1>'$mensaje1'</h1>
    <p><a href='index.php'>Enlace para volver </a></p>
    </body>
    </html>
    ";
    header("Location:html://error.html");
    echo $pagina;    
}