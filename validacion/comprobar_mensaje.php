<?php

// Este script comprueba el número del mensaje y le asigna un texto.

if(isset($_GET['mensaje'])){
    switch ($_GET['mensaje']) {
        case '1':
            $mensaje = "1 - La contraseña no es correcta.";
            // $destino='inicio.html';            
            break;
        case '2':
            $mensaje = "2 - Ese usuario no existe en la base de datos.";           
            // $destino='pregunta_seguridad.php';           
            break;

        case '3':
            $mensaje = "3 - La respuesta a la pregunta de seguridad no es correcta.";            
            // $destino ='pregunta_seguridad.php';           
            break;

        case '4':
            $mensaje = "4 - Página en construcción.";            
            // $destino ='menu_opciones.php';          
            break;

        case '5':
            $mensaje = "5 - Usuario duplicado.";            
            // $destino ='menu_opciones.php';          
            break;
                
        case '6':
            $mensaje = "6 - Empresa duplicada.";            
            // $destino ='menu_opciones.php';          
            break;
                
        case '7':
            $mensaje = "7 - Contraseña modificada con éxito.";            
            // $destino ='menu_opciones.php';          
            break;
    }
} else {
    $mensaje = "";
}
?>