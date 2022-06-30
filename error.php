<?php

function Mensaje($mensaje){
    if (isset($_POST["boton_ingreso"])){
        if ($mensaje==='1'){
            $mensaje1='Error usuario o contraseña';
            paginaerror($mensaje1);
        }    
    }
}
function paginaerror($mensaje1){

    $pagina= "<head>
    </head>
    <body>
    <title>$mensaje1</title>
    <h1>$mensaje1</h1>
    <p><a href='index.php'>Volver al Login </a></p>
    </body>
    </html>";
    echo $pagina;    
}

