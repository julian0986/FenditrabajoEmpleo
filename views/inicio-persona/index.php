<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Inicio - Fendipetroleo Nacional</title>
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
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body row">
                        <div class="col-md-7">
                            <h5><?php echo $this->persona['nombre'] . ' ' . $this->persona['apellido']; ?></h5>
                            <h6 style="color: gray"><?php echo $this->persona['titulo']; ?></h6>
                            <h6 style="color: gray"><?php echo $this->persona['departamento']; ?></h6>
                            <a style="color:#224b8b" href="<?php echo constant('URL'); ?>hojaVidaUsuario">
                                <ion-icon name="document-text-outline"></ion-icon> Ver hoja de vida
                            </a>
                            <a class="d-block" style="color: #224b8b;" href="<?php echo constant('URL'); ?>cambioUsuario">
                                <ion-icon name="lock-closed-outline"></ion-icon> Cambiar contraseña
                            </a>
                        </div>
                        <div class="col-md-5 align-self-center">
                            <img class="rounded-circle" src=<?php if ($this->persona['foto'] != "") {
                                                                echo constant('URL') . $this->persona['foto'];
                                                            } else {
                                                                echo constant('URL') . "public/logos/usuario.png";
                                                            } ?> alt="" width="100%">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-8">
                <div class="card" style="border-color: #224b8b;">
                    <div class="card-header bg-blue">
                        <h5 class="card-title text-center mb-2">Comienza la busqueda de empleo</h5>
                    </div>
                    <div class="card-body d-flex justify-content-center" style="background-color: rgba(255,255,255,0.5);">
                        <form action="<?php echo constant('URL'); ?>resultadosUsuario/buscar" method="POST">
                            <div class="form-row">
                                <div class="form-gruop col-md-5">
                                    <div class="input-group mb-3">
                                        <div class="input-group-prepend">
                                            <span class="input-group-text">
                                                <ion-icon name="search-outline" style="color:black;"></ion-icon>
                                            </span>
                                        </div>
                                        <input name="nombre" type="text" class="form-control" id="inlineFormInputName2" placeholder="Palabra clave">
                                    </div>
                                </div>
                                <div class="form-gruop col-md-5">
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
                                </div>
                                <div class="form-gruop col-md-2">
                                    <button type="submit" class="btn btn-primary">Buscar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card text-center mb">
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
            <div class="col-md-8">
                <div class="card mb">
                    <div class="card-header">
                        <h4>Ofertas recomendadas</h4>
                    </div>
                    <div class="card-body">

                        <?php
                        include_once 'models/entity/oferta.php';
                        foreach ($this->ofertas as $row) {
                            $oferta = new Oferta();
                            $oferta = $row;
                        ?>

                            <div class="card" style="margin-bottom: 2%; border-color: transparent;">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">
                                        <ion-icon name="briefcase-outline" style="font-size:30px;"></ion-icon>
                                    </div>
                                    <div class="col-md-10">
                                        <h5><a style="color: #224b8b" href=<?php echo constant('URL') . 'detalleOfertaUser/detalle/' . $oferta->id ?>><?php echo $oferta->nombre; ?></a></h5>
                                        <?php echo $oferta->fechaInicial; ?>
                                    </div>
                                </div>
                            </div>

                        <?php } ?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Cursos en linea</h4>
                    </div>
                    <div class="card-body">
                        <?php
                        include_once 'models/entity/curso.php';
                        foreach ($this->cursos as $row) {
                            $curso = new Curso();
                            $curso = $row;
                        ?>
                            <div class="card" style="margin-bottom: 2%; border-color: transparent;">
                                <div class="row">
                                    <div class="col-md-1"></div>
                                    <div class="col-md-1">
                                        <ion-icon name="ribbon-outline"  style="font-size:30px;"></ion-icon>
                                    </div>
                                    <div class="col-md-6">
                                        <h5><a style="color: #224b8b" target="_blank" href="<?php echo $curso->link; ?>"><?php echo $curso->nombre; ?></a></h5>
                                        <p><strong>Descripción: </strong><?php echo $curso->descripcion; ?></p>
                                    </div>
                                    <div class="col-md-4">
                                        <a href="<?php echo $curso->link; ?>">
                                            <img style="border-radius: 10px;" src="<?php echo constant('URL') . $curso->isotipo; ?>" alt="" width="70%">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
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