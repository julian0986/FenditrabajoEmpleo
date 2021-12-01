<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Ver cursos - Fendipetroleo Nacional</title>
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
                <h1 class="text-center">Ver Curso</h1>
            </div>
            <div class="col-md-6 text-center">
                <a href="<?php echo constant('URL'); ?>crudCursos" class="btn btn-secondary text-center">Volver</a>
            </div>
        </div>
        <div class="card" style="width: 100%;">
            <div class="card-header">
                <h4 class="card-title text-center">Datos generales</h4>
            </div>
            <div class="card-body">
                <div class="form-row">
                    <div class="col-md-8">
                        <div class="form-group col-md-12">
                            <label for="inputNombre">Nombre</label>
                            <input type="text" value="<?php echo $this->curso->nombre; ?>" name="nombre" class="form-control" id="inputNombre" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputPerfil">Descripción</label>
                            <textarea name="perfil" id="inputPerfil" class="form-control" rows="6" readonly><?php echo $this->curso->descripcion; ?></textarea>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputNombre">Enlace o link</label>
                            <input type="text" value="<?php echo $this->curso->link; ?>" name="link" class="form-control" id="inputNombre" readonly>
                        </div>
                        <div class="form-group col-md-12">
                            <label for="inputNombre">Nombre de la institución</label>
                            <input type="text" value="<?php echo $this->curso->entidad; ?>" name="entidad" class="form-control" id="inputNombre" readonly>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <img class="align-self-center" src="<?php echo constant('URL') . $this->curso->isotipo; ?>" width="100%">
                    </div>
                </div>
            </div>
        </div>
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