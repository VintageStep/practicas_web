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

            <li class="navbar__list">
                <div class="dropdown">
                    <a href="#0" class="navbar__link">Consultas</a>
                    <div class="dropdown-content">
                        <a href="../crud/read.php" class="dropdown-item">Consultas Usuarios</a>
                        <a href="../crudEmp/read.php" class="dropdown-item">Consultas Empresas</a>
                    </div>
                </div>
            </li>
            <li class="navbar__list">
                <div class="dropdown">
                    <a href="#0" class="navbar__link">Formularios</a>
                    <div class="dropdown-content">
                    <a href="../Formularios/Formulario_alta_admin.php" class="dropdown-item">Nueva Empresa</a>
                        <a href="../Formularios/Formulario_alta_usuario.php" class="dropdown-item">Configurar Empresa</a>
                        <a href="../Formularios/Formulario_modificacion.php" class="dropdown-item">Modificacion</a>
                    </div>
                </div>
            </li>
            <a class="navbar__link" href="../calendar/Calendario.php">Calendario</a> 
            </ul>
        </nav>
    </section>
</body>
</html>