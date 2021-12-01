<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Hoja de vida - Fendipetroleo Nacional</title>
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
    <?php require "views/header/header-empresa.php"; ?>
    <div>
        <div class="pd-m">
            <div class="row">
                <div class="col-md-8">
                    <form action="">
                        <div class="card" style="border-radius: 0%">
                            <div class="card-header text-center">
                                <div class="row">
                                    <div class="col-md-8">
                                        <h3>Hoja de vida</h3>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body row pd-m">
                                <div class="col-md-4 text-center">
                                    <img class="rounded-circle" src="<?php echo constant('URL') . $this->hoja->foto; ?>" width="40%">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputNombre">Nombre</label>
                                    <input type="text" value="<?php echo $this->hoja->nombre; ?>" name="nombre" class="form-control" id="inputNombre" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputApellidos">Apellidos</label>
                                    <input type="text" value="<?php echo $this->hoja->apellido; ?>" name="apellido" class="form-control" id="inputApellidos" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputNIdentificacion">Estado civil</label>
                                    <input type="text" name="numeroId" value="<?php echo $this->hoja->estado; ?>" class="form-control" id="inputNIdentificacion" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputNIdentificacion">Número de identificación</label>
                                    <input type="number" name="numeroId" value="<?php echo $this->hoja->numero; ?>" class="form-control" id="inputNIdentificacion" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputTelefono">Telefono</label>
                                    <input type="number" name="numeroId" value="<?php echo $this->hoja->telefono; ?>" class="form-control" id="inputTelefono" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="estaticoDepartamento">Departamento</label>
                                    <input type="text" name="numeroId" value="<?php echo $this->hoja->departamento; ?>" class="form-control" id="estativoDepartamento" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="estaticoDireccion">Dirección</label>
                                    <input type="text" name="numeroId" value="<?php echo $this->hoja->direccion; ?>" class="form-control" id="estativoDepartamento" readonly>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="estaticoNacionalidad">Nacionalidad</label>
                                    <input type="text" name="numeroId" value="<?php echo $this->hoja->nacionalidad; ?>" class="form-control" id="estaticoNacionalidad" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-radius: 0%">
                            <div class="card-header text-center">
                                <h3>Perfil profesional</h3>
                            </div>
                            <div class="card-body row pd-m">
                                <div class="form-group col-md-12">
                                    <label for="estaticoCargoTitulo">Cargo o titulo</label>
                                    <input type="text" name="numeroId" value="<?php echo $this->hoja->titulo; ?>" class="form-control" id="estaticoCargoTitulo" readonly>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputPerfil">Descripción del perfil profesional</label>
                                    <textarea name="perfil" id="inputPerfil" class="form-control" rows="6" readonly><?php echo $this->hoja->perfil; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="card" style="border-radius: 0%">
                            <div class="card-header text-center">
                                <h3>Experiencias profesionales</h3>
                            </div>
                            <div class="card-body text-center">
                                <?php
                                include_once 'models/entity/oferta.php';
                                foreach ($this->experiencias as $row) {
                                    $experiencia = new Experiencia();
                                    $experiencia = $row;
                                ?>

                                    <div class="card mt text-center">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h4><?php echo $experiencia->cargo; ?></h4>
                                                    <h6><?php echo $experiencia->empresa; ?></h6>
                                                    <h6><?php echo $experiencia->fechaInicio ?><strong> | </strong><?php echo $experiencia->fechaFin; ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="card" style="border-radius: 0%">
                            <div class="card-header text-center">
                                <h3>Formación</h3>
                            </div>
                            <div class="card-body text-center">
                                <?php
                                include_once 'models/entity/oferta.php';
                                foreach ($this->formaciones as $row) {
                                    $formacion = new Formacion();
                                    $formacion = $row;
                                ?>
                                    <div class="card mt text-center">
                                        <div class="card-body">
                                            <div class="row">
                                                <div class="col-md-10">
                                                    <h4><?php echo $formacion->tituloF ?></h4>                                                    
                                                    <h5><?php echo $formacion->centro ?></h5>
                                                    <h6><?php echo $formacion->nivel ?></h6>
                                                    <h6><?php echo $formacion->fechaInicio; ?><strong> | </strong><?php echo $formacion->fechaFin; ?></h6>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="col-md-4">
                    <div class="card text-center">
                        <?php
                        include_once 'models/entity/publicidad.php';
                        foreach ($this->publicidadB as $row) {
                            $publi = new Publicidad();
                            $publi = $row;
                        ?>
                            <a href="<?php echo $publi->link; ?>" target="_blank"><img class="pd" src="<?php echo constant('URL') . $publi->imagen; ?>" width="80%"></a>
                        <?php } ?>
                    </div>
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