<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Iniciar sesión [Usuario] - Fendipetroleo Nacional</title>
    <link rel="icon" href="<?php echo constant('URL'); ?>public/images/favicon.png" sizes="32x32">

    <!-- Generic -->
    <meta name="description"
        content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">

    <!-- Fancy -->
    <meta property="fancy:name"
        content="Fendipetroleo - Federación Nacional de Distribuidores de Combustibles y Energéticos">
    <meta property="fancy:images" content="assets/favicon.png">
    <meta property="fancy:description"
        content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">
    <meta property="fancy:category" content="Workplace">

    <!-- Global Canonical -->
    <link rel="canonical" href="https://fendipetroleo.com">
    <meta property="og:url" content="https://fendipetroleo.com">

    <!-- Facebook -->
    <meta property="og:type" content="website">
    <meta property="og:title"
        content="Fendipetroleo - Federación Nacional de Distribuidores de Combustibles y Energéticos">
    <meta property="og:description"
        content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">
    <meta property="og:image" content="https://fendipetroleo.com/nuevoF/public/icon/favicon.ico">
    <meta property="og:locale" content="es_ES">

    <!-- Twitter -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:site" content="@fendinaloficial">
    <meta name="twitter:creator" content="@fendinaloficial">
    <meta name="twitter:title"
        content="Fendipetroleo - Federación Nacional de Distribuidores de Combustibles y Energéticos">
    <meta name="twitter:description"
        content="La Federación Nacional de Distribuidores de Combustibles y Energéticos – Fendipetróleo, es una organización gremial, creada en 1971 para representar los intereses de los empresarios distribuidores minoristas de combustibles líquidos y gas natural vehicular, promover la sostenibilidad del sector y contribuir al desarrollo social y económico del país. ">
    <meta name="twitter:image" content="https://fendipetroleo.com/nuevoF/public/icon/favicon.ico">

</head>
<style>
.fondo2 {
    background: #f0f0f0;
    padding: 50px 0;
    min-height: 400px;
    /*   background-image: url("<?php echo constant('URL'); ?>public/images/FEN-05.png");
    background-repeat: no-repeat !important;
    background-attachment: scroll !important;
    background-position: center center !important;
    z-index: auto;
    background-size: cover !important;
    -webkit-background-size: cover !important;
    -moz-background-size: cover !important;
    -o-background-size: cover !important; */
}

.socialLogin {
    margin-bottom: 20px;
    text-align: center;
    border-bottom: 1px solid #eee;
    padding-bottom: 20px;
    background-color: #fff;
}

.formpanel .btn {
    width: 100%;
    background: #1b4573;
    color: #fff;
    border-radius: 0;
    padding: 10px;
    font-size: 16px;
    font-weight: 700;
    text-transform: uppercase;
}

.logemp {
    background-color: #fff;
}
</style>

<script type="text/javascript">
function myFunction() {
    var x = document.getElementById("password");
    if (x.type === "password") {
        x.type = "text";
    } else {
        x.type = "password";
    }
}
</script>

<body>
    <?php require "views/header/header.php"; ?>
    <div class="fondo2">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 col-md-offset-3">
                    <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                        <div class="card-header socialLogin">
                            <img src="./public/images/logofenditrabajo.png" class="logo" width="50%" height="50%"
                                alt="" />
                            <h4>Inicia sesión como Persona</h4>
                        </div>
                        <div class="card-body">
                            <form action="<?php echo constant('URL'); ?>loginPersona/login" method="POST">
                                <div class="form-row pd-mx">
                                    <div class="form-group col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <ion-icon name="at-outline" style="color:black;"></ion-icon>
                                                </span>
                                            </div>
                                            <input type="email" name="email" class="form-control" id="inputEmail"
                                                placeholder="Ingrese el correo electronico" required>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <ion-icon name="lock-closed-outline" style="color:black;">
                                                    </ion-icon>
                                                </span>
                                            </div>
                                            <input type="password" name="password" class="form-control" id="password"
                                                placeholder="Ingrese la contraseña" required>
                                        </div>
                                        <input type="checkbox" onclick="myFunction()"> Mostrar contraseña
                                    </div>
                                </div>
                                <div class="text-center formpanel">
                                    <button type="submit" class="btn btn-primary">Ingresar</button>
                                </div>

                                <div class="message">

                                    <?php if(isset($message)) echo $message; ?>
                                </div>

                                <div class="card-footer text-center logemp">
                                    <p>Aún no tienes cuenta, registrate <a
                                            href="<?php echo constant('URL'); ?>registroPersona"
                                            style="color:#055eb0;">aquí</a></p>
                                </div>
                            </form>
                        </div>
                        <div class="card-footer text-center logemp">
                            <a style="color: #0069d9;" href="<?php echo constant('URL'); ?>recuperarUsuario">¿Olvidó su
                                contraseña?</a>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>

    <!-- Codigo de csursos, se deja mientras comentado -->

    <!--  <div class="card text-center mt mb" style="border-color: transparent">
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
                                    <img style="border-radius: 10px;"
                                        src="<?php echo constant('URL') . $curso->isotipo; ?>" class="card-img-top"
                                        width="300px" height="200px">
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
    </div> -->

    <!-- Codigo de publicidad -->
    <!-- <div class="card text-center mt mb" style="border-color: transparent">
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
                                    <a href="<?php echo $publi->link; ?>" target="_blank"><img
                                            style="border-radius: 10px;" width="50%"
                                            src="<?php echo constant('URL') . $publi->imagen; ?>"></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
 -->

    <?php require "views/footer/footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>