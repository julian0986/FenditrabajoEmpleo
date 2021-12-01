<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/fenditrabajo.css">
    <title>Buscar oferta - Fendipetroleo Nacional</title>
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
    <?php require "views/header/header.php"; ?>
    <div>
        <div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner" style="height: 400px;position: relative;">
                <div class="carousel-item active">
                    <img src="<?php echo constant('URL'); ?>/public/images/FEN-01.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo constant('URL'); ?>/public/images/FEN-02.png" class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                    <img src="<?php echo constant('URL'); ?>/public/images/FEN-03.png" class="d-block w-100" alt="...">
                </div>
                <div class="container pd" style="padding-top: 8%">
                    <div class="card" style="width: 100%; border-color: rgba(128,128,128,1); background-color: rgba(255,255,255,0.8);">
                        <div class="card-body d-flex justify-content-center" style="background-color: rgba(255,255,255,0.1); padding: 0%; margin:0%;">
                            <form action="<?php echo constant('URL'); ?>resultadosGeneral/buscar" method="POST">
                                <div class="form-row" style="padding-left:2%; padding-right:2%">
                                    <div class="form-group col-md-12" style="margin:0%; padding-top:1%">
                                        <h5 class="card-title text-center mb-2">Comienza la busqueda de oportunidades de empleo</h5>
                                    </div>
                                    <div class="form-gruop col-md-5">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <ion-icon name="search-outline" style="color:black;"></ion-icon>
                                                </span>
                                            </div>
                                            <input name="nombre" type="text" class="form-control" id="inlineFormInputName2" placeholder="Palabra clave">
                                        </div>
                                        <p style="font-size: 15px"> Trabaje como administrador, jefe de patio, promotor de ventas.</p>
                                    </div>
                                    <div class="form-gruop col-md-4">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <ion-icon name="location-outline" style="color:black;"></ion-icon>
                                                </span>
                                            </div>
                                            <select name="departamento" class="form-control" id="departamento">
                                                <option value="" selected>Ubicación</option>
                                                <option value="Amazonas">Amazonas</option>
                                                <option value="Antioquia">Antioquia</option>
                                                <option value="Arauca">Arauca</option>
                                                <option value="SanAndres">Archipiélago de San Andrés, Providencia y Santa Catalina</option>
                                                <option value="Atlantico">Atlántico</option>
                                                <option value="Bogota">Bogotá, D.C.</option>
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
                                                <option value="Nivel nacional">Nivel nacional</option>
                                            </select>
                                        </div>
                                        <p style="font-size: 15px;"> Trabaje a nivel nacional</p>
                                    </div>
                                    <div class="form-gruop col-md-3 text-center">
                                        <button type="submit" class="btn btn-primary btn-block">Buscar oportunidades</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
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
            <div class="col-md-12" style="padding-bottom:2%">
                <h1>Nuestras ofertas</h1>
            </div>
            <div class="col-md-12">
                <div id="carruselOfertas" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" data-interval="3000" style="padding-left:2%; padding-right: 2%">
                            <div class="card-deck">
                                <div class="card text-center" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/Administrador.png" width="80px" alt="">
                                        <h5 class="card-title">Administradores</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/Administradores" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                                <div class="card" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/ingeniero.png" width="80px" alt="">
                                        <h5 class="card-title">Ingenieros</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/Ingenieros" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                                <div class="card" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/contador.png" width="80px" alt="">
                                        <h5 class="card-title">Contadores</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/Contadores" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                                <div class="card" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/programador.png" width="80px" alt="">
                                        <h5 class="card-title">Programadores</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/Programadores" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="3000" style="padding-left:2%; padding-right: 2%">
                            <div class="card-deck">
                                <div class="card text-center" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/cajero.png" width="80px" alt="">
                                        <h5 class="card-title">Cajeros</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/cajeros" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                                <div class="card" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/camarero.png" width="80px" alt="">
                                        <h5 class="card-title">Camareros</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/camareros" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                                <div class="card" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/conductor.png" width="80px" alt="">
                                        <h5 class="card-title">Conductores</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/conductores" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                                <div class="card" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/limpieza.png" width="80px" alt="">
                                        <h5 class="card-title">Oficios varios</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/oficios" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="carousel-item" data-interval="3000" style="padding-left:2%; padding-right: 2%">
                            <div class="card-deck">
                                <div class="card text-center" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/islero.png" width="80px" alt="">
                                        <h5 class="card-title">Isleros</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/isleros" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                                <div class="card" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/mensajero.png" width="80px" alt="">
                                        <h5 class="card-title">Asesor comercial</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/mensajero" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                                <div class="card" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/operador.png" width="80px" alt="">
                                        <h5 class="card-title">Operadores</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/operador" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
                                <div class="card" style="border-color: transparent">
                                    <div class="card-body">
                                        <img style="padding-bottom: 10px" src="<?php echo constant('URL'); ?>public/icono/secretario.png" width="80px" alt="">
                                        <h5 class="card-title">Secretarias</h5>
                                        <a href="<?php echo constant('URL'); ?>resultadosGeneral/buscarSugerido/secretaria" class="btn btn-primary">Ver ofertas</a>
                                    </div>
                                </div>
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

    <hr />
    <h3 class="text-center">Síguenos en nuestras redes sociales</h3>
    <br />
    <div class="row m-top">
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2FFendipetroleo&tabs=timeline&width=340&height=500&small_header=false&adapt_container_width=true&hide_cover=false&show_facepile=true&appId=1910519099068068" width="340" height="500" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media"></iframe>
        </div>
        <div class="col-md-1"></div>
        <div class="col-md-4">
            <a class="twitter-timeline" data-lang="es" data-height="500" href="https://twitter.com/Fendipetroleo?ref_src=twsrc%5Etfw">Tweets by Fendipetroleo</a>
            <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
        </div>
    </div>

    <?php include "views/footer/footer.php"; ?>

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
    <!--Start Cookie Script-->
    <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/3f64d4be21d20eb44e654b17532f4cab.js"></script>
    <!--End Cookie Script-->
</body>

</html>