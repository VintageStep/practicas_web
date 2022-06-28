<!doctype html>
<html lang="es">

<head>
</head>
<body>
    <section class="navbar">
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
    </section>
</body>
</html>