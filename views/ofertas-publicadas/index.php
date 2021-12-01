<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Ofertas - Fendipetroleo Nacional</title>
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
<script type="text/javascript">
    function confirmar() {
        var respuesta = confirm("¿Desea archivar esta oferta?\n Se dará como finalizada esta oferta")
        if (respuesta === true) {
            return true;
        } else {
            return false;
        }
    }
</script>

<body>
    <?php require "views/header/header-empresa.php"; ?>
    <div>
        <div class="pd-m">
            <div class="row">
                <div class="col-md-8">
                    <h3>Mis ofertas publicadas</h3>
                    <?php
                    include_once 'models/entity/oferta.php';
                    foreach ($this->ofertas as $row) {
                        $oferta = new Oferta();
                        $oferta = $row;
                    ?>
                        <div class="card mb">
                            <div class="card-header" id="ofertaUno">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="row">
                                            <div class="col-md-1 align-self-center">
                                                <ion-icon name="briefcase-outline" style="font-size:25px;"></ion-icon>
                                            </div>
                                            <div class="col-md-11">
                                                <h4><?php echo $oferta->nombre; ?></h4>
                                            </div>
                                        </div>
                                        <h6>Fecha de publicación: <?php echo $oferta->fechaInicial; ?></h6>
                                        <h6>Fecha de Final: <?php echo $oferta->fechaFinal; ?></h6>
                                        <h6>Inscritos: <?php echo $oferta->empresa; ?></h6>
                                        <h6>Estado: <?php if ($oferta->estado == 1) {
                                                        echo 'activo';
                                                    } else {
                                                        echo 'inactivo';
                                                    }  ?></h6>
                                    </div>
                                    <div class="col-md-6 align-self-center">
                                        <a href="<?php echo constant('URL') . 'editarOfertaPublicada/verEditar/' . $oferta->id; ?>" class="btn btn-primary btn-sm">EDITAR</a>
                                        <a href=<?php echo constant('URL') . 'postulados/verPostulados/' . $oferta->id; ?> class="btn btn-success btn-sm">VER POSTULADOS</a>
                                        <a href="<?php echo constant('URL') . 'ofertasPublicadas/archivarOferta/' . $oferta->id; ?>"><button class="btn btn-danger btn-sm" type="button" onclick="return confirmar()">ARCHIVAR / ELIMINAR</button></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination justify-content-center">
                            <?php if ($this->numPaginas != "0") { ?>

                                <li class="page-item <?php echo  $_SESSION['paginaOP'] <= 1 ? 'disabled' : '' ?>">
                                    <a class="page-link" href="<?php echo constant('URL'); ?>ofertasPublicadas/nuevaPagina/<?php echo $_SESSION['paginaOP'] - 1; ?>">Anterior</a>
                                </li>
                                <?php for ($i = 0; $i < $this->numPaginas; $i++) { ?>
                                    <li class="page-item <?php echo $_SESSION['paginaOP'] == $i + 1 ? 'active' : '' ?>">
                                        <a class="page-link" href="<?php echo constant('URL'); ?>ofertasPublicadas/nuevaPagina/<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a>
                                    </li>
                                <?php } ?>
                                <li class="page-item <?php echo  $_SESSION['paginaOP'] >= $this->numPaginas ? 'disabled' : '' ?>">
                                    <a class="page-link" href="<?php echo constant('URL'); ?>ofertasPublicadas/nuevaPagina/<?php echo $_SESSION['paginaOP'] + 1; ?>">Siguiente</a>
                                </li>
                            <?php } ?>
                        </ul>
                    </nav>
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

    <?php require "views/footer/footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>