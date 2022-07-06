<?php
include '../logica_de_negocio/conexion.func.php';
include '../logica_de_negocio/validacion.func.php';
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Radio+Canada:wght@300;400;700&display=swap" rel="stylesheet">        
    <title><?php echo $titulo ?></title>
</head>
<body class="body">
    <header class="navbar">
        <nav class="navbar__container">   
            <a  href="..\index.php" class="navbar__logo__link">
                <img src="\imagenes\logo.png" alt="Logo de la pagina" class="navbar__logo">
            </a>
            <ul class="navbar__buttons">
                <li class="navbar__list"><a href="#" aria-haspopup="true" class="navbar__link">Consultas</a>
                    <ul class="dropdown" aria-label="submenu">
                        <li class="navbar__list"><a href="../crud/read.php" class="navbar__link">Consultas Usuarios</a></li>
                        <li class="navbar__list"><a href="../crudEmp/read.php" class="navbar__link">Consultas Empresas</a></li>
                    </ul>
                </li>
                <li class="navbar__list"><a href="#0" class="navbar__link">Formularios</a>
                    <ul class="dropdown" aria-label="submenu">
                        <li class="navbar__list"><a href="../../Formularios/Formulario_alta_admin.php" class="navbar__link">Nueva Empresa</a></li>
                        <li class="navbar__list"><a href="../../Formularios/Formulario_alta_usuario.php" class="navbar__link">Configurar Empresa</a></li>
                        <li class="navbar__list"><a href="../../Formularios/Formulario_modificacion.php" class="navbar__link">Modificacion</a></li>
                    </ul>
                </li>
                <li class="navbar__list"><a class="navbar__link" href="../calendar/Calendario.php">Calendario</a></li>
            </ul>
        </nav>
    </header>
    <?php cerrar_sesion() ?>