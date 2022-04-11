<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Cursos - Fendipetroleo Nacional</title>
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
table {
    background-color: white;
    text-align: left;
    border-collapse: collapse;
    width: 100%;
}

th,
td {
    padding: 20px;
}

thead {
    background-color: #007bff;
    border-bottom: solid 5px #3B83BD;
    color: white;
}

tr:nth-child(even) {
    background-color: #ddd;
}

tr:hover td {
    background-color: #cadffb;
    color: white;
}


img {

    height: auto;
    line-height: 100%;
    outline: none;
    box-align: center"

}
</style>


<body>
    <?php require "views/header/header-admin.php"; ?>
    <div>
        <div class="container pd">
            <div class="col-md-12 text-center">
                <h1>Reportes</h1>
            </div>

            <td bgcolor="#ffffff" valign="top">

            </td>


            <table>
                <thead>
                    <tr>
                        <th>NOMBRE_REPORTE</th>
                        <th>Reportes_TXT</th>
                        <th>Reportes_CSV</th>
                    </tr>
                </thead>

                <tr>
                    <td># Numero Vacantes</td>
                    <td><a href=<?php echo constant('URL') . 'reportes/numeroVacantestxt/'?>><i class="fas fa-file"
                                style="font-size: 20px; color:#1b4573" aria-hidden="true"></i></a></td>
                    <td><a href=<?php echo constant('URL') . 'reportes/numeroVacantescvs/'?>><i class="fas fa-file-csv"
                                style="font-size: 20px; color:#1b4573" aria-hidden="true"></i>
                        </a></td>

                </tr>
                <tr>
                    <td># hojas remitidas</td>
                    <td><a href="https://example.com"><i class="fas fa-file" style="font-size: 20px; color:#1b4573"
                                aria-hidden="true"></i>
                            </i></a></td>
                    <td><a href="https://example.com"><i class="fas fa-file-csv" style="font-size: 20px; color:#1b4573"
                                aria-hidden="true"></i>
                        </a></td>
                </tr>
                <tr>
                    <td># Empleadores</td>
                    <td><a href="https://example.com"><i class="fas fa-file" style="font-size: 20px; color:#1b4573"
                                aria-hidden="true"></i>
                        </a></td>
                    <td><a href="https://example.com"><i class="fas fa-file-csv" style="font-size: 20px; color:#1b4573"
                                aria-hidden="true"></i>
                        </a></td>
                </tr>
                <tr>
                    <td># Peronas Registradas</td>
                    <td><a href="https://example.com"><i class="fas fa-file" style="font-size: 20px; color:#1b4573"
                                aria-hidden="true"></i></a></td>
                    <td><a href="https://example.com"><i class="fas fa-file-csv" style="font-size: 20px; color:#1b4573"
                                aria-hidden="true"></i>
                        </a></td>
                </tr>
            </table>

            <iframe width="900" height="2000"
                src="https://datastudio.google.com/embed/reporting/861223a5-5904-446b-b030-79b7cf25627a/page/ZF9pC"
                frameborder="0" style="border:0" allowfullscreen></iframe>


        </div>
    </div>
    <?php include "views/footer/footer.php"; ?>
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