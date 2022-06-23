<?php
include '..\template\header.php';
include '..\validacion\comprobar_mensaje.php';
?>
<!doctype html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Igualdad</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="stylesheet" type="text/css" href="\css\css-final.css">
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
                            <form name="formulario" method="post" action="../crudEmp/createSave.php">
                                <br><br><h1>Registro de Empresas</h1><br>
                                <div class="mb-2">
                                    <label class="razon_social" for="razon_social">
                                        Razón Social
                                    </label>
                                    <input type="text" id="razon_social" name="razon_social" minlength="1" maxlength="50" required>
                                </div>
                                <div class="mb-2">
                                    <label for="cif_empresa">
                                        CIF Empresa
                                    </label>
                                    <input type="text" id="cif_empresa" name="cif_empresa" minlength="9" maxlength="9" pattern="[0-9A-a]{9}" required>
                                    <label for="domicilio_social">
                                        Domicilo Social            
                                    </label>
                                    <input type="text" id="domicilio_social" name="domicilio_social" minlength="1" maxlength="50" required>
                                </div>
                                <div class="mb-2">
                                    <label for="forma_juridica">
                                        Forma Jurídica    
                                    </label>
                                        <select name="forma_juridica">
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
                                        <input type="text" id="anio_constitucion" name="anio_constitucion" maxlength="4" minlength="4" pattern="[0-9]{4}" required>
                                </div>
                                <div class="mb-2">
                                    <label for="responsable_empresa">
                                        Nombre del Responsable
                                    </label>
                                    <input type="text" id="responsable_empresa" name="responsable_empresa" minlength="1" maxlength="50" required>
                                
                                    <label for="cargo_responsable_empresa">
                                        Cargo del Responsable
                                    </label>
                                    <input type="text" id="cargo_responsable_empresa" name="cargo_responsable_empresa" minlength="1" maxlength="50" required>
                                </div>
                                <div class="mb-2">
                                    <label class="sector" for="sector_empresa">
                                        Sector de la Empresa
                                    </label>
                                    <select name="sector_empresa">
                                        <option value="sector_primario">Sector Primario</option>
                                        <option value="sector_secundario">Sector Secundario</option>
                                        <option value="sector_terciario">Sector Terciario</option>
                                    </select>
                                    
                                </div>
                                <div class="mb-2">
                                    <label for="cnae_empresa">
                                        CNAE
                                    </label>
                                    <input type="text" id="cnae_empresa" name="cnae_empresa" minlength="1" maxlength="5" pattern="[0-9]{5}" required>
                                    <label for="convenio_colectivo_empresa">
                                        Convenio Colectivo
                                    </label>
                                    <input type="text" id="convenio_colectivo_empresa" name="convenio_colectivo_empresa" minlength="1" maxlength="50" required>
                                </div>
                                <div class="mb-2">
                                    <label for="mujeres_empresa">
                                        Número de Mujeres
                                    </label>
                                    <input type="text" id="mujeres_empresa" name="mujeres_empresa" minlength="1" maxlength="5" pattern="[0-9]" required>
                                    <label for="hombres_empresa">
                                        Número de Hombres
                                    </label>
                                    <input type="text" id="hombres_empresa" name="hombres_empresa" minlength="1" maxlength="5" pattern="[0-9]" required>
                                </div>
                                <div class="mb-2">
                                    <label for="centros_empresa">
                                        Centros de la Empresa
                                    </label>
                                    <input type="text" id="centros_empresa" name="centros_empresa" minlength="1" maxlength="50" required>
                                    <label for="mujeres_empresa">
                                        Contacto en la Empresa
                                    </label>
                                    <input type="text" id="contacto_empresa" name="contacto_empresa" minlength="1" maxlength="50" required>
                                </div>
                                <div class="mb-2">
                                    <label for="mail_empresa">
                                        Email empresa </label>
                                    <input type="mail" id="mail_empresa" name="mail_empresa" minlength="1" maxlength="50" required>
                        <!--pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,4}$"      [implemntar .com/es en el final]-->
                                    <label for="tlfn_empresa">
                                        Teléfono Empresa </label>
                                    <input type="tel" id="tlfn_empresa" name="tlfn_empresa" minlength="1" maxlength="11" pattern="[0-9]{11}" required>
                                </div><br>
                                <span class="botonf">
                                    <input type="submit" class="btn btn-primary" role="button" id="registrar_empresa" name="registrar_empresa" value="Registrar Empresa">
                                    <input type="button" class="volver" role="button" onclick="location.href='read.php'" value="Volver">
                                    <input type="reset"  class="btn btn-primary" value="Limpiar">
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