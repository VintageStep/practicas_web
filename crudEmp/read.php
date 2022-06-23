<!-- FINIQUITADO -->
<?php    
include '..\crud\conexion_practica.php';
include '..\template\header.php';
$conn = Conectar();
$sentencia = $conn->query("SELECT id_empresa,razon_social,cif_empresa,responsable_empresa,mujeres_empresa,hombres_empresa,contacto_empresa,mail_empresa,tlfn_empresa FROM empresa;");
$empresas = $sentencia->fetchAll(PDO::FETCH_OBJ);
?> 
<!-- FINIQUITADO! -->
<!doctype html>
<html lang="es">
  <head>
    <title>Igualdad</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="\css\css-final.css">
  </head>
  <body>   
    <br><br><h1>Consulta de EMPRESAS</h1><br>
    <div class="buscador">
        <nav class="navbar bg-light">
            <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Ingrese busqueda" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Buscar</button>
				<button style="margin: 3px" class="btn btn-outline-success" formaction="create.php" type="onclick"> Nueva Empresa</button>
			</form>
        </nav>
    </div>
	<table style="text-align:center">
		<thead>
			<tr>
				<th>ID</th>
				<th>Razon Social</th>
				<th>Cif</th>			
				<th>Responsable</th>
				<th>NºMujeres</th>
				<th>NºHombres</th>
				<th>Nombre</th>
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
			
			<?php foreach($empresas as $empresa){ ?>
			<tr>
				<td><?php echo $empresa->id_empresa ?></td>
				<td><?php echo $empresa->razon_social ?></td>
				<td><?php echo $empresa->cif_empresa ?></td>
				<td><?php echo $empresa->responsable_empresa ?></td>
				<td><?php echo $empresa->mujeres_empresa ?></td>
				<td><?php echo $empresa->hombres_empresa ?></td>
				<td><?php echo $empresa->contacto_empresa ?></td>
				<td><?php echo $empresa->mail_empresa ?></td>
				<td><?php echo $empresa->tlfn_empresa ?></td>
				<td><a href="<?php echo "..\crudEmp\update.php?id=" . $empresa->id_empresa?>"><img width="30px"; height="30px" src="..\imagenes\Lapíz.png"></a></td>
				<td><a href="<?php echo "..\crudEmp\delete.php?id=" . $empresa->id_empresa?>"><img width="30px"; height="30px" src="..\imagenes\Papelera.png"></a></td>
			</tr>
			<?php } ?>
  </body>
</html>