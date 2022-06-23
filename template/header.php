<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script> 
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href="css\css-final.css" rel="stylesheet" type="text/css">
    <style>
      .d-flex{border: none;
  
      }
      .div{width: 250px;
           box-sizing: border-box;
           width: 100px;
           padding-top: 60px;
           border-top: 60px solid;
      }
     
     </style>
    <title>Menu</title>
</head>
  <body class="formulario" style="overflow-block:auto;">
 
      <div class="inicio">
        <nav class="navbar navbar-expand-lg bg-transparent">
            <div class="container-fluid" style="background-color: #ffffff00;">

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <div>
                        <a  href="..\index.php" >
                            <img src="\imagenes\logo.png" alt="" width="250" style="float: left;clear:left">
                        </a>
                    </div>
                    <br />
                    
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        
                        
                           <li class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Consultas</a>
                        <div class="dropdown-menu">
                            <a href="../crud/read.php" class="dropdown-item">Consultas Usuarios</a>
                            <a href="../crudEmp/read.php" class="dropdown-item">Consultas Empresas</a>
                            </div>
                    </li>

                        <li class="nav-item">
                            <a class="nav-link" href="../calendar/Calendario.php">Calendario</a>
                        </li>
                       
                    </ul>

                </div>
                <div>
                <form class="d-flex">
                    <input type="button" style="margin-left: auto; width:auto;background-color:#5b3b7c" class="btn btn-primary" onclick="location.href='../index.php';" value="Cerrar Sesión">
                </form>
                </div>
            </div>
        </nav>    
      </div>
  </body>
</html>