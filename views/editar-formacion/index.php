<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Editar Formacion - Fendipetroleo Nacional</title>
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
    <?php require "views/header/header-usuario.php"; ?>
    <div class="container pd">
        <div class="row">
            <div class="col-md-8">
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <h4 class="card-title text-center">Editar Formación</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo constant('URL'); ?>editarFormacion/editar" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Centro educativo <strong style="color:red">*</strong></label>
                                    <input type="text" name="centro" value="<?php echo $this->formacion->centro; ?>" class="form-control" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,100}" required title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-12">
                                    <label>Titulo otorgado <strong style="color:red">*</strong></label>
                                    <input type="text" name="tituloF" value="<?php echo $this->formacion->tituloF; ?>" class="form-control" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,100}" required title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputNivelEstudios">Nivel de estudios<strong style="color:red">*</strong></label>
                                    <select id="inputNivelEstudios" class="form-control" name="nivel" aria-required="true" aria-invalid="false" required>
                                        <option value="">Nivel de estudios</option>
                                        <option <?php if ($this->formacion->nivel == 'Educación Básica Primaria') echo 'selected'; ?> value="Educación Básica Primaria">Educación Básica Primaria</option>
                                        <option <?php if ($this->formacion->nivel == 'Educación Básica Secundaria') echo 'selected'; ?> value="Educación Básica Secundaria">Educación Básica Secundaria</option>
                                        <option <?php if ($this->formacion->nivel == 'Bachillerato / Educación Media') echo 'selected'; ?> value="Bachillerato / Educación Media">Bachillerato / Educación Media</option>
                                        <option <?php if ($this->formacion->nivel == 'Universidad / Carrera técnica') echo 'selected'; ?> value="Universidad / Carrera técnica">Universidad / Carrera técnica</option>
                                        <option <?php if ($this->formacion->nivel == 'Universidad / Carrera tecnológica') echo 'selected'; ?> value="Universidad / Carrera tecnológica">Universidad / Carrera tecnológica</option>
                                        <option <?php if ($this->formacion->nivel == 'Universidad / Carrera Profesional') echo 'selected'; ?> value="Universidad / Carrera Profesional">Universidad / Carrera Profesional</option>
                                        <option <?php if ($this->formacion->nivel == 'Postgrado / Especialización') echo 'selected'; ?> value="Postgrado / Especialización">Postgrado / Especialización</option>
                                        <option <?php if ($this->formacion->nivel == 'Postgrado / Maestría') echo 'selected'; ?> value="Postgrado / Maestría">Postgrado / Maestría</option>
                                        <option <?php if ($this->formacion->nivel == 'Postgrado / Doctorado') echo 'selected'; ?> value="Postgrado / Doctorado">Postgrado / Doctorado</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputEstado">Estado<strong style="color:red">*</strong></label>
                                    <select id="inputEstado" class="form-control" name="estado" aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->formacion->estado == 'Culminado') echo 'selected'; ?> value="Culminado">Culminado</option>
                                        <option <?php if ($this->formacion->estado == 'Cursando') echo 'selected'; ?> value="Cursando">Cursando</option>
                                        <option <?php if ($this->formacion->estado == 'Abandonado/aplazado') echo 'selected'; ?> value="Abandonado/aplazado">Abandonado/aplazado</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputPeriodo">Periodo<strong style="color: red">*</strong></label>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="date" value="<?php echo $this->formacion->fechaInicio; ?>" name="fechaInicio" class="form-control" min="1920-01-01">
                                        </div>
                                        <div class="col-md-2">
                                            <h2 class="text-center">-</h2>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="date" name="fechaFin" value="<?php echo $this->formacion->fechaFin; ?>" class="form-control" min="1920-01-01">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
    <?php include "views/footer/footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>