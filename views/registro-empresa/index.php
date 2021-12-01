<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Registro empresa - Fendipetroleo Nacional</title>
    <link rel="icon" href="<?php echo constant('URL'); ?>public/images/favicon.png" sizes="32x32">

    <!-- Generic -->
    <meta name="description" content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">

    <!-- Fancy -->
    <meta property="fancy:name" content="Fendipetroleo - Federación Nacional de Distribuidores de Combustibles y Energéticos">
    <meta property="fancy:images" content="assets/favicon.png">
    <meta property="fancy:description" content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">
    <meta property="fancy:category" content="Workplace">

    <!-- Global Canonical -->
    <link rel="canonical" href="https://fendipetroleo.com">
    <meta property="og:url" content="https://fendipetroleo.com">

    <!-- Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="Fendipetroleo - Federación Nacional de Distribuidores de Combustibles y Energéticos">
    <meta property="og:description" content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">
    <meta property="og:image" content="https://fendipetroleo.com/nuevoF/public/icon/favicon.ico">
    <meta property="og:locale" content="es_ES">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@fendinaloficial">
    <meta name="twitter:creator" content="@fendinaloficial">
    <meta name="twitter:title" content="Fendipetroleo - Federación Nacional de Distribuidores de Combustibles y Energéticos">
    <meta name="twitter:description" content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">
    <meta name="twitter:image" content="https://fendipetroleo.com/nuevoF/public/icon/favicon.ico">

</head>
<style>
    .fondo2 {
        background-image: url("<?php echo constant('URL'); ?>public/images/FEN-03.png");
        background-repeat: no-repeat !important;
        background-attachment: scroll !important;
        background-position: center center !important;
        z-index: auto;
        background-size: cover !important;
        -webkit-background-size: cover !important;
        -moz-background-size: cover !important;
        -o-background-size: cover !important;
    }

    .pd-mx {
        padding-right: 20%;
        padding-left: 20%;
        padding-bottom: 2%;
        padding-top: 2%
    }
</style>

<body>
    <?php require "views/header/header.php"; ?>
    <div class="fondo2">
        <div class="container pd">
            <div class="card" style="width: 100%; margin-top:5%; background-color: rgba(255,255,255,0.9); border-radius: 0%;">
                <div class="card-header">
                    <h4 class="card-title text-center">Registra tu Empresa</h4>
                </div>
                <div class="card-body">
                    <form action="<?php echo constant('URL'); ?>loginEmpresa/nuevaEmpresa" method="POST" enctype="multipart/form-data">
                        <h5 class="card-title text-center">Datos de acceso</h5>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputEmail">Correo <strong style="color:red">*</strong></label>
                                <input type="email" name="email" class="form-control" id="inputEmail">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputContraseña">Contraseña <strong style="color:red">*</strong></label>
                                <input type="password" name="password" class="form-control" id="inputContraseña">
                            </div>
                        </div>
                        <h5 class="card-title text-center">Datos de la empresa</h5>
                        <div class="form-group">
                            <label for="inputNombreEmpresa">Nombre comercial de la empresa <strong style="color:red">*</strong></label>
                            <input type="text" name="nombre" class="form-control" id="inputNombreEmpresa" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{4,100}" required title="Solo se aceptan letras">
                        </div>
                        <div class="form-group">
                            <label for="inputNit">NIT de la empresa <strong style="color:red">*</strong></label>
                            <input type="text" name="nit" class="form-control" id="inputNit" pattern="[0-9.- ]{8,50}" title="Solo se aceptan numeros">
                        </div>
                        <div class="form-group">
                            <label for="inputCorreoCon">Correo de la empresa<strong style="color:red">*</strong></label>
                            <input type="email" name="correoCon" class="form-control" id="inputCorreoCon">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="selectDepartamento">Departamento <strong style="color:red">*</strong></label>
                                <select id="inputDepartamentoEmpresa" class="form-control" name="departamento" aria-required="true" aria-invalid="false" required>
                                    <option value="">Seleccione</option>
                                    <option value="Bogota">Bogotá, D.C.</option>
                                    <option value="Antioquia">Antioquia</option>
                                    <option value="Amazonas">Amazonas</option>
                                    <option value="Arauca">Arauca</option>
                                    <option value="SanAndres">Archipiélago de San Andrés, Providencia y Santa Catalina</option>
                                    <option value="Atlantico">Atlántico</option>
                                    <option value="Bolivar">Bolívar</option>
                                    <option value="Boyaca">Boyacá</option>
                                    <option value="Caldas">Caldas</option>
                                    <option value="Caqueta">Caquetá</option>
                                    <option value="Casanare">Casanare</option>
                                    <option value="Cauca">Cauca</option>
                                    <option value="Cesar">Cesar</option>
                                    <option value="Choco">Chocó</option>
                                    <option value="Cordoba">Córdoba</option>
                                    <option value="Cundinamarca">Cundinamarca</option>
                                    <option value="Guainia">Guainía</option>
                                    <option value="Guaviare">Guaviare</option>
                                    <option value="Huila">Huila</option>
                                    <option value="LaGuajira">La Guajira</option>
                                    <option value="Magdalena">Magdalena</option>
                                    <option value="Meta">Meta</option>
                                    <option value="Narino">Nariño</option>
                                    <option value="NorteSantander">Norte de Santander</option>
                                    <option value="Putumayo">Putumayo</option>
                                    <option value="Quindio">Quindio</option>
                                    <option value="Risaralda">Risaralda</option>
                                    <option value="Santander">Santander</option>
                                    <option value="Sucre">Sucre</option>
                                    <option value="Tolima">Tolima</option>
                                    <option value="ValleCauca">Valle del Cauca</option>
                                    <option value="Vaupes">Vaupés</option>
                                    <option value="Vichada">Vichada</option>
                                    <option value="Extranjero">Extranjero</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputCiudad">Ciudad / Municipio <strong style="color:red">*</strong></label>
                                <input type="text" name="ciudad" class="form-control" id="inputCiudad" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputDireccion">Dirección de la empresa <strong style="color:red">*</strong></label>
                                <input type="text" name="direccion" class="form-control" id="inputDireccion" pattern="[a-zA-Záéíóúüñ0-9.,#-°/\$% ]{5,50}" required title="Se aceptan letras, numeros y caracteres especiales (.#-°).">
                            </div>
                            <div class="form-group col-md-8">
                                <label for="inputDescripcion">Descripción de la empresa <strong style="color:red">*</strong></label>
                                <textarea class="form-control" name="descripcion" id="inputDescripcion" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{10,500}" rows="6" title="Solo se aceptan letras y numeros."></textarea>
                            </div>
                            <div class="form-group col-md-4">
                                <label for="selectLogo">Logo <strong style="color:red">*</strong></label>
                                <input type="file" name="file" class="form-control-file" id="selectLogo">
                            </div>
                        </div>
                        <h5 class="card-title text-center">Datos de persona de contacto</h5>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="inputNombre">Nombres persona contacto<strong style="color:red">*</strong></label>
                                <input type="text" name="nombreE" class="form-control" id="inputNombre" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputApellidos">Apellidos persona contacto <strong style="color:red">*</strong></label>
                                <input type="text" name="apellidoE" class="form-control" id="inputApellidos" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="inputCorreoE">Correo persona contacto<strong style="color:red">*</strong></label>
                            <input type="email" name="correoE" class="form-control" id="inputCorreoE">
                        </div>
                        <div class="form-row">
                            <div class="form-group col-md-6">
                                <label for="selectCargo">Cargo persona contacto <strong style="color:red">*</strong></label>
                                <select class="form-control" name="cargoE" id="selectCargo">
                                    <option value="">Seleccione un cargo</option>
                                    <option value="Presidente">Presidente</option>
                                    <option value="Director">Director</option>
                                    <option value="Gerente">Gerente</option>
                                    <option value="Jefe">Jefe</option>
                                    <option value="Coordinador">Coordinador</option>
                                    <option value="Analista">Analista</option>
                                </select>
                            </div>
                            <div class="form-group col-md-6">
                                <label for="inputTelefono">Telefono persona contacto <strong style="color:red">*</strong></label>
                                <input type="text" class="form-control" name="telefonoE" class="form-control" id="inputTelefono" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{6,50}" required title="Solo se aceptan numeros">
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="submit" class="btn btn-primary">Registrarse</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php require "views/footer/footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>