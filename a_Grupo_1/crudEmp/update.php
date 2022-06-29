<!-- FINIQUITADO -->
<?php
include '..\template\header.php';
include '..\crud\conexion_practica.php';
$conn = Conectar();
$id_empresa = $_GET["id"];
$sentencia = $conn->prepare("SELECT id_empresa,razon_social,cif_empresa,domicilio_social,forma_juridica,anio_constitucion,responsable_empresa,cargo_responsable_empresa,sector_empresa,cnae_empresa,convenio_colectivo_empresa,mujeres_empresa,hombres_empresa,centros_empresa,contacto_empresa,mail_empresa,tlfn_empresa FROM empresa WHERE id_empresa = ?;");
$sentencia->execute([$id_empresa]);
$empresa = $sentencia->fetch(PDO::FETCH_OBJ); 
?>

<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Igualdad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link href="..\css\css-final.css" rel="stylesheet" type="text/css">
    <style>
        span{display: flex; justify-content: center;}
        label{display:inline-block; width: 210px; text-align: right;}   
        form{margin:0; padding:0; text-align: left;}
        .botonf{margin-bottom: 20px;}
        .razon_social{margin-left:420px}; 
        .sector{margin-right:400px};       
    </style>
<body class="formulario" id="empresa">
    <div class="container">
                <div class="row">
                    <div class="col-2"></div>
                        <div class="col-8">
                            <form name="formulario" method="POST" action="updateSave.php">
                                <br><br><h1>Actualizacion de Empresas</h1><br>
                                		<!-- Ocultamos el ID para que el usuario no pueda cambiarlo (en teoría) -->
                                <input type="hidden" name="id_empresa" value="<?php echo $empresa->id_empresa; ?>">
                                <div class="mb-2">
                                     <label class="razon_social" for="razon_social">
                                        Razón Social
                                    </label>
                                    <input 
                                        value="<?php echo $empresa->razon_social; ?>"
                                        type="text"
                                        id="razon_social"
                                        name="razon_social"
                                        minlength="1"
                                        maxlength="50"
                                        required>
                                </div>
                                <div class="mb-2">
                                    <label for="cif_empresa">
                                        CIF Empresa
                                    </label>
                                    <input 
                                        value="<?php echo $empresa->cif_empresa; ?>"
                                        type="text"
                                        id="cif_empresa"
                                        name="cif_empresa"
                                        minlength="9"
                                        maxlength="9"
                                        pattern="[0-9A-a]{9}"
                                        required>
                                    
                                    <label for="domicilio_social">
                                        Domicilo Social            
                                    </label>
                                    <input 
                                        value="<?php echo $empresa->domicilio_social; ?>"
                                        type="text"
                                        id="domicilio_social"
                                        name="domicilio_social"
                                        minlength="1"
                                        maxlength="50"
                                        required>
                                </div>
                                <div class="mb-2">
                                    <label for="forma_juridica">
                                        Forma Jurídica    
                                    </label>
                                        <select value="<?php echo $empresa->forma_juridica; ?>"name="forma_juridica">
                                            <option value="empresario_individual">Empresario Individual</option>
                                            <option value="sociedad_limitada">Sociedad Limitada (SL)</option>
                                            <option value="sociedad_anonima">Sociedad Anónima (SA)</option>
                                            <option value="sin_animo_de_lucro">Sin ánimo de lucro</option>
                                            <option value="sociedad_colectiva">Sociedad Colectiva</option>
                                            <option value="sociedad_comanditaria">Sociedad Comanditaria</option>
                                            <option value="comunidad_bienes">Comunidad de Bienes</option>
                                            <option value="sociedad_cooperativa">Sociedad Cooperativa</option>
                                        </select>
                                        <label for="anio_constitucion">
                                            Año de Constitución
                                        </label>
                                        <input 
                                            value="<?php echo $empresa->anio_constitucion; ?>"
                                            type="text"
                                            id="anio_constitucion"
                                            name="anio_constitucion"
                                            maxlength="4"
                                            minlength="4"
                                            pattern="[0-9]{4}"
                                            required>
                                </div>
                                <div class="mb-2">
                                    <label for="responsable_empresa">
                                        Nombre del Responsable
                                    </label>
                                    <input 
                                        value="<?php echo $empresa->responsable_empresa; ?>"
                                        type="text"
                                        id="responsable_empresa"
                                        name="responsable_empresa"
                                        minlength="1"
                                        maxlength="50">
                                
                                    <label for="cargo_responsable_empresa">
                                        Cargo del Responsable
                                    </label>
                                    <input 
                                        value="<?php echo $empresa->cargo_responsable_empresa; ?>"
                                        type="text"
                                        id="cargo_responsable_empresa"
                                        name="cargo_responsable_empresa"
                                        minlength="1"
                                        maxlength="50"
                                        required>
                                </div>
                                <div class="mb-2">
                                    <label class="sector" for="sector_empresa">
                                        Sector de la Empresa
                                    </label>
                                    <select value="<?php echo $empresa->sector_empresa; ?>" name="sector_empresa">
                                        <option value="sector_primario">Sector Primario</option>
                                        <option value="sector_secundario">Sector Secundario</option>
                                        <option value="sector_terciario">Sector Terciario</option>
                                    </select>
                                    
                                </div>
                                <div class="mb-2">
                                    <label for="cnae_empresa">
                                        CNAE
                                    </label>
                                    <input 
                                        value="<?php echo $empresa->cnae_empresa; ?>"
                                        type="text"
                                        id="cnae_empresa"
                                        name="cnae_empresa"
                                        minlength="1"
                                        maxlength="5"
                                        pattern="[0-9]{5}"
                                        required>
                                    
                                    <label for="convenio_colectivo_empresa">
                                        Convenio Colectivo
                                    </label>
                                    <input 
                                        value="<?php echo $empresa->convenio_colectivo_empresa; ?>"
                                        type="text"
                                        id="convenio_colectivo_empresa"
                                        name="convenio_colectivo_empresa"
                                        minlength="1"
                                        maxlength="50"
                                        required>
                                </div>
                                <div class="mb-2">
                                    <label for="mujeres_empresa">
                                        Número de Mujeres
                                    </label>
                                    <input 
                                    value="<?php echo $empresa->mujeres_empresa; ?>"
                                        type="text"
                                        id="mujeres_empresa"
                                        name="mujeres_empresa"
                                        minlength="1"
                                        maxlength="6"
                                        pattern="[0-9]"
                                        required>
                                
                                    <label for="hombres_empresa">
                                        Número de Hombres
                                    </label>
                                    <input 
                                    value="<?php echo $empresa->hombres_empresa; ?>"
                                        type="text"
                                        id="hombres_empresa"
                                        name="hombres_empresa"
                                        minlength="1"
                                        maxlength="6"
                                        pattern="[0-9]"
                                        required>
                                </div>
                                <div class="mb-2">
                                    <label for="centros_empresa">
                                        Centros de la Empresa
                                    </label>
                                    <input 
                                    value="<?php echo $empresa->centros_empresa; ?>"
                                        type="text"
                                        id="centros_empresa"
                                        name="centros_empresa"
                                        minlength="1"
                                        maxlength="50"
                                        required>
                                
                                    <label for="contacto_empresa">
                                        Contacto en la Empresa
                                    </label>
                                    <input 
                                    value="<?php echo $empresa->contacto_empresa; ?>"
                                        type="text"
                                        id="contacto_empresa"
                                        name="contacto_empresa"
                                        minlength="1"
                                        maxlength="50"
                                        required>
                                </div>
                                <div class="mb-2">
                                    <label for="mail_empresa">
                                        Email empresa
                                    </label>
                                    <input 
                                    value="<?php echo $empresa->mail_empresa; ?>"
                                        type="mail"
                                        id="mail_empresa"
                                        name="mail_empresa"
                                        minlength="1"
                                        maxlength="50"
                                        required>
                        <!--pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"-->

                                
                                    <label for="tlfn_empresa">
                                        Teléfono Empresa
                                    </label>
                                    <input 
                                    value="<?php echo $empresa->tlfn_empresa; ?>"
                                        type="tel"
                                        id="tlfn_empresa"
                                        name="tlfn_empresa"
                                        minlength="1"
                                        maxlength="11"
                                        pattern="[0-9]{11}"
                                        required>
                                </div><br>
                                <span class="botonf">
                                    <input type="submit" class="btn btn-primary" value="Actualizar Empresa">
                                    <input type="reset" class="volver" value="Reestablecer datos usuario">                                  
                               		
                                </span>
                                <?php
                                    //mensaje de error
                                    if(isset($_GET['error1'])){
                                    echo '<p class = "error">Empresa duplicada, ingrese otra empresa<p>';}
                                    if(isset($_GET['error2'])){
                                    echo '<p class = "error">Empresa no ingresada, intente de nuevo<p>';
                                    }
                                    ?> 
                            </form>
    
                        <div class="col-2"></div>   
                    </div>
                </div>
            </div>
    </body>
</html>