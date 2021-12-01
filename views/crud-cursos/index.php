<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Cursos - Fendipetroleo Nacional</title>
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
    <div>
        <div class="container pd">
            <div class="col-md-12 text-center">
                <form action="<?php echo constant('URL') . 'crudCursos/buscar'; ?>" method="POST">
                    <div class="row">
                        <div class="col-md-6">
                            <input name="nombre" type="text" class="form-control" id="inlineFormInputName2" placeholder="Buscar la empresa o el contacto">
                        </div>
                        <div class="col-md-2">
                            <button type="submit" class="btn btn-primary">Buscar</button>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo constant('URL'); ?>crearCurso" class="btn btn-success">Crear Cursos</a>
                        </div>
                        <div class="col-md-2">
                            <a href="<?php echo constant('URL'); ?>inicioAdmin" class="btn btn-secondary">Volver</a>
                        </div>
                    </div>
                </form>
            </div>
            <table class="table table-bordered" style="margin-top:2%">
                <thead>
                    <tr>
                        <th style="width:35%" scope="col">Nombre del Curso</th>
                        <th style="width:35%" scope="col">Instituto educativo</th>
                        <th style="width:30%" scope="col">Opciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    include_once 'models/entity/curso.php';
                    foreach ($this->cursos as $row) {
                        $curso = new Curso();
                        $curso = $row;
                    ?>
                        <tr>
                            <td><?php echo $curso->nombre; ?></td>
                            <td><?php echo $curso->entidad; ?></td>
                            <td class="text-center">
                                <a class="btn btn-sm btn-info" href="<?php echo constant('URL') . 'verCurso/detalles/' . $curso->id; ?>">
                                    <ion-icon style="font-size:20px" name="eye"></ion-icon>
                                </a>
                                <a class="btn btn-sm btn-primary" href="<?php echo constant('URL') . 'editarCurso/detalles/' . $curso->id; ?>">
                                    <ion-icon style="font-size:20px" name="build-outline"></ion-icon>
                                </a>
                                <a class="btn btn-sm btn-danger" href="<?php echo constant('URL') . 'crudCursos/eliminar/' . $curso->id; ?>">
                                    <ion-icon style="font-size:20px" name="trash-outline"></ion-icon>
                                </a>
                            </td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>
            <nav aria-label="Page navigation example">
                <ul class="pagination justify-content-center">
                    <?php if ($this->numPaginas != "0") { ?>
                        <li class="page-item <?php echo  $_SESSION['pagina'] <= 1 ? 'disabled' : '' ?>">
                            <a class="page-link" href="<?php echo constant('URL'); ?>crudCursos/nuevaPagina/<?php echo $_SESSION['pagina'] - 1; ?>">Anterior</a>
                        </li>
                        <?php for ($i = 0; $i < $this->numPaginas; $i++) { ?>
                            <li class="page-item <?php echo $_SESSION['pagina'] == $i + 1 ? 'active' : '' ?>">
                                <a class="page-link" href="<?php echo constant('URL'); ?>crudCursos/nuevaPagina/<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a>
                            </li>
                        <?php } ?>
                        <li class="page-item <?php echo  $_SESSION['pagina'] >= $this->numPaginas ? 'disabled' : '' ?>">
                            <a class="page-link" href="<?php echo constant('URL'); ?>crudCursos/nuevaPagina/<?php echo $_SESSION['pagina'] + 1; ?>">Siguiente</a>
                        </li>
                    <?php } ?>
                </ul>
            </nav>
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