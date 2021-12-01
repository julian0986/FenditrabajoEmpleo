<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Usuario - Fendipetroleo Nacional</title>
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
                <h1 class="text-center">Perfil de usuario</h1>
            </div>
            <div class="col-md-6 text-center">
                <a href="<?php echo constant('URL'); ?>crudUsuarios" class="btn btn-secondary text-center">Volver</a>
            </div>
        </div>
        <form action="" method="">
            <div class="card" style="width: 100%;">
                <div class="card-header">
                    <h4 class="card-title text-center">Datos personales</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="col-md-8">
                            <div class="form-group col-md-12">
                                <label for="inputNombre">Nombre</label>
                                <input type="text" value="<?php echo $this->hoja->nombre; ?>" name="nombre" class="form-control" id="inputNombre" readonly>
                            </div>
                            <div class="form-group col-md-12">
                                <label for="inputApellidos">Apellidos</label>
                                <input type="text" value="<?php echo $this->hoja->apellido; ?>" name="apellido" class="form-control" id="inputApellidos" readonly>
                            </div>
                        </div>
                        <div class="col-md-4 text-center">
                            <img class="rounded-circle" src="<?php echo constant('URL') . $this->hoja->foto; ?>" alt="" width="50%">
                        </div>
                        <div class="form-group col-md-3">
                            <label for="inputIdentificacion">Tipo de identificación</label>
                            <input type="text" value="<?php echo $this->hoja->tipoId; ?>" name="tipoId" class="form-control" id="inputIdentificacion" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputNIdentificacion">Número de identificación</label>
                            <input type="text" name="numeroId" value="<?php echo $this->hoja->numero; ?>" class="form-control" id="inputNIdentificacion" readonly>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="">Fecha de nacimiento</label>
                            <input type="date" value="<?php echo $this->hoja->fecha; ?>" name="fecha" class="form-control" min="1920-01-01" readonly>
                        </div>
                        <div class="form-group col-md-5">
                            <label for="inputGenero">Genero</label>
                            <input type="text" value="<?php echo $this->hoja->genero; ?>" name="inputGenero" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-7">
                            <label for="inputEstadoCivil">Estado civil</label>
                            <input type="text" value="<?php echo $this->hoja->genero; ?>" name="inputEstadoCivil" class="form-control" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputTipoTelefono">Teléfono</label>
                            <div class="form-row">
                                <div class="form-group col-md-5">
                                    <input type="text" value="<?php echo $this->hoja->tipoTel; ?>" name="inputTipoTelefono" class="form-control" readonly>
                                </div>
                                <div class="form-group col-md-7">
                                    <input type="number" value="<?php echo $this->hoja->telefono; ?>" name="telefono" class="form-control" id="inputTelefono" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputDepartamento">Departamento</label>
                            <input type="text" value="<?php echo $this->hoja->departamento; ?>" name="telefono" class="form-control" id="inputDepartamento" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputDireccion">Dirección</label>
                            <input type="text" value="<?php echo $this->hoja->direccion; ?>" name="direccion" class="form-control" id="inputDireccion" readonly>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputNacionalidad">Nacionalidad</label>
                            <input type="text" value="<?php echo $this->hoja->nacionalidad; ?>" name="nacionalidad" class="form-control" id="inputNacionalidad" readonly>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title text-center">Perfil profesional</h4>
                </div>
                <div class="card-body">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputTitulo">Cargo o titulo breve de su hoja de vida</label>
                            <input type="text" value="<?php echo $this->hoja->titulo; ?>" name="titulo" class="form-control" id="inputTitulo" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPerfil">Descripción breve de su perfil profesional</label>
                            <textarea name="perfil" id="inputPerfil" class="form-control" rows="6" readonly>
                                <?php echo $this->hoja->perfil; ?>
                            </textarea>
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