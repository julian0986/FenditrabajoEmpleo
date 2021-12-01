<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Empresa - Fendipetroleo Nacional</title>
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

<body>
    <?php require "views/header/header-admin.php"; ?>
    <div class="container pd">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center">Perfil de Empresa</h1>
            </div>
            <div class="col-md-6 text-center">
                <a href="<?php echo constant('URL'); ?>crudEmpresas" class="btn btn-secondary text-center">Volver</a>
                <a href="<?php echo constant('URL'); ?>verEmpresa/cambiarEstado" class="btn btn-primary text-center">
                    <?php if ($this->empresa->estado == 1) {
                        echo 'Aprobar';
                    } else {
                        echo 'Deshabilitar';
                    } ?>
                </a>
            </div>

        </div>
        <form action="" method="">
            <div class="card" style="width: 100%;border-radius: 0%;">
                <div class="card-header">
                    <h4 class="card-title text-center">Datos Generales</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombreEmpresa">Nombre de la empresa</label>
                            <input type="text" value="<?php echo $this->empresa->nombre; ?>" name="nombre" class="form-control" id="inputNombreEmpresa" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputNIT">NIT</label>
                            <input type="text" value="<?php echo $this->empresa->nit; ?>" name="nit" class="form-control" id="inputNIT" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputCorreoCon">Correo de la empresa</label>
                            <input type="email" value="<?php echo $this->empresa->correoCon; ?>" name="correoCon" class="form-control" id="inputCorreoCon" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputDireccion">Dirección de la empresa</label>
                            <input type="text" value="<?php echo $this->empresa->direccion; ?>" name="direccion" class="form-control" id="inputDireccion" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDepartamentoEmpresa">Departamento</label>
                            <input type="text" value="<?php echo $this->empresa->departamento; ?>" name="departamento" class="form-control" id="inputDepartamentoEmpresa" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputCiudadEmpresa">Ciudad / Municipio</label>
                            <input type="text" name="ciudadEmpresa" value="<?php echo $this->empresa->ciudad; ?>" class="form-control" id="inputCiudadEmpresa" readonly>
                        </div>
                        <div class="form-group col-md-8">
                            <label for="inputDescripcionEmpresa">Descripción de la empresa</label>
                            <textarea name="descripcionEmpresa" id="inputDescripcionEmpresa" class="form-control" rows="6" readonly><?php echo $this->empresa->descripcion; ?></textarea>
                        </div>
                        <div class="form-group col-md-4 text-center">
                            <img src="<?php echo constant('URL') . $this->empresa->isotipo; ?>" width="50%" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="card" style="border-radius: 0%;">
                <div class="card-header">
                    <h4 class="card-title text-center">Datos del contacto</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombre">Nombres persona contacto</label>
                            <input type="text" value="<?php echo $this->empresa->nombreE; ?>" name="nombre" class="form-control" id="inputNombre" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputApellido">Apellidos persona contacto</label>
                            <input type="text" value="<?php echo $this->empresa->apellidoE; ?>" name="apellido" class="form-control" id="inputApellido" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputCorreoE">Correo persona contacto</label>
                            <input type="email" value="<?php echo $this->empresa->correoE; ?>" name="correoE" class="form-control" id="inputCorreoE" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="selectCargo">Cargo persona contacto</label>
                            <input type="text" value="<?php echo $this->empresa->cargoE; ?>" name="apellido" class="form-control" id="selectCargo" readonly>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputTelefono">Teléfono persona contacto</label>
                            <input type="text" value="<?php echo $this->empresa->telefonoE; ?>" name="apellido" class="form-control" id="inputTelefono" readonly>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <?php require "views/footer/footer.php"; ?>
    <script type="text/javascript" src="<?php echo constant('URL'); ?>/public/js/fenditrabajo.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>