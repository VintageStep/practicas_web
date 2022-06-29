<?php    
include '..\crud\conexion_practica.php';
include '..\template\header.php';
$conn= Conectar(); //Conexion Base de Datos PDO
$sentencia = $conn->query("SELECT id_usuario,nombre_usuario,apellido_usuario,email_usuario,tlfn_usuario FROM usuarios;");
$usuarios = $sentencia->fetchAll(PDO::FETCH_OBJ);
?> 

<!doctype html>
<html lang="es">
  <head>
    <title>Crud - R</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="..\css\css-final.css">

	


  </head>
  <body>   
    <br><br><h1>Consulta de Usuarios</h1><br>
    <div class="buscador" >
        <nav class="navbar bg-light">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ingrese busqueda" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
				<button class="btn btn-outline-success" type="onclick" style="margin: 3px;" formaction="create.php">Nuevo Usuario</button>
			</form>
        </nav>
    </div>
<!-- Cabezera de la tabla -->
	<table style="text-align:center">
		<thead>
			<tr style="border: 1px solid black;">  
				<th>ID</th>
				<th>Nombre</th>
				<th>Apellido</th>
				<th>Email</th>
				<th>Telefono</th>
				<th colspan="2"> </th>
			</tr>
		</thead>
		<tbody>
			<!--
				Atención aquí, sólo esto cambiará
				Pd: no ignores las llaves de inicio y cierre {}
			-->
<!-- ECHO para los DATOS A LEER [cojemos id para update/delete] --> 
			<?php foreach($usuarios as $usuario){ ?>
			<tr>
				<td style="color:purple"><?php echo $usuario->id_usuario ?></td>
				<td style="color:purple"><?php echo $usuario->nombre_usuario ?></td>
				<td style="color:purple"><?php echo $usuario->apellido_usuario ?></td>
				<td style="color:purple"><?php echo $usuario->email_usuario ?></td>
				<td style="color:purple"><?php echo $usuario->tlfn_usuario ?></td>
				<td style="color:purple"><a href="<?php echo "..\crud\update.php?id=" . $usuario->id_usuario?>"><img width="30px"; height="30px" src="..\imagenes\Lapíz.png"></a></td>
				<td style="color:purple"><a href="<?php echo "..\crud\delete.php?id=" . $usuario->id_usuario?>"><img width="30px"; height="30px" src="..\imagenes\Papelera.png"></a></td>
			</tr>
			<?php } ?>
		</tbody>
	</table>
	
  </body>
</html>