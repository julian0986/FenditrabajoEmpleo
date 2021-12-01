<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Registro usuario - Fendipetroleo Nacional</title>
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
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
</head>
<style>
    .fondo2 {
        background-image: url("<?php echo constant('URL'); ?>public/images/FEN-02.png");
        background-repeat: no-repeat !important;
        background-attachment: scroll !important;
        background-position: center center !important;
        z-index: auto;
        background-size: cover !important;
        -webkit-background-size: cover !important;
        -moz-background-size: cover !important;
        -o-background-size: cover !important;
    }
</style>

<body>
    <?php require "views/header/header.php"; ?>
    <div class="fondo2">
        <div class="container pd">
            <div class="row">
                <div class="col-md-2">
                </div>
                <div class="col-md-8">
                    <div class="card" style="width: 100%; background-color:rgba(255,255,255,0.9);">
                        <div class="card-header">
                            <h4 class="card-title text-center">Crea tu CV gratis</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo constant('URL'); ?>registroPersona/nuevaPersona" method="POST">
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputNombre">Nombres <strong style="color:red">*</strong></label>
                                        <input type="text" name="nombre" class="form-control" id="inputNombre" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputApellido">Apellidos <strong style="color:red">*</strong></label>
                                        <input type="text" name="apellido" class="form-control" id="inputApellido" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="inputEmail">Email <strong style="color:red">*</strong></label>
                                        <input type="email" name="email" class="form-control" id="inputEmail" required>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputContraseña">Contraseña <strong style="color:red">*</strong></label>
                                        <input type="password" name="password" class="form-control" id="inputContraseña" required>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 text-center">
                                        <div class="form-check">
                                            <input class="form-check-input" type="checkbox" name="politicas" id="politicas" value="1" required>
                                            <label class="form-check-label" for="politicas">
                                                Acepta las <a target="_blank" class="btn-link" href="">Condiciones legales</a> y la <a target="_blank" class="btn-link" href="">Politica de privacidad</a> de Fenditrabajo.
                                            </label>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="g-recaptcha" data-sitekey="6LcTkskZAAAAAENUR6h9uG1DOABLmOu_fHZ9OQXm"></div>
                                    </div>
                                </div>
                                <br />
                                <div class="form-group text-center">
                                    <input type="submit" value="Registrarse" class="btn btn-primary btn-lg float-center">
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-2">
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center mt mb" style="border-color: transparent">
        <div class="row">
            <div class="col-md-12">
                <h1>Cursos virtuales</h1>
            </div>
            <div class="col-md-12">
                <div id="carruselCursosVirtuales" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="padding-left:2%; padding-right: 2%">
                            <div class="card-deck">
                                <?php
                                include_once 'models/entity/curso.php';
                                foreach ($this->cursos as $row) {
                                    $curso = new Curso();
                                    $curso = $row;
                                ?>
                                    <div class="card" style="border-color: transparent">
                                        <img style="border-radius: 10px;" src="<?php echo constant('URL') . $curso->isotipo; ?>" class="card-img-top" width="300px" height="200px">
                                        <div class="card-footer" style="border-color: transparent; background: transparent">
                                            <h5 class="card-title"><?php echo $curso->nombre; ?></h5>
                                            <a href="<?php echo $curso->link; ?>" class="btn btn-primary">Ir al Curso</a>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="card text-center mt mb" style="border-color: transparent">
        <div class="row">
            <div class="col-md-12">
                <h1>Nuestros anunciantes</h1>
            </div>
            <div class="col-md-12">
                <div id="carruselOfertas" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="padding-left:2%; padding-right: 2%">
                            <div class="card-deck">
                                <?php
                                include_once 'models/entity/publicidad.php';
                                foreach ($this->publicidadB as $row) {
                                    $publi = new Publicidad();
                                    $publi = $row;
                                ?>
                                    <div class="card" style="border-color: transparent">
                                        <a href="<?php echo $publi->link; ?>" target="_blank"><img style="border-radius: 10px;" width="50%" src="<?php echo constant('URL') . $publi->imagen; ?>"></a>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
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