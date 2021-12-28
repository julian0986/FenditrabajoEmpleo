<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Postulados - Fendipetroleo Nacional</title>
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

<script type="text/javascript">
function confirmar() {
    var respuesta = confirm("¿Seleccionar este usuario como seleccionado?")
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

                <div class="col-md-12 ">
                    <h2>Preselección</h2>
                    <form action="<?php echo constant('URL'); ?>postulados/buscar" method="POST">
                        <div class="form-row">
                            <!-- <div class="col-md-3 text-center">
                                <div class="input-group mb-3">
                                    <input type="text" name="nombre" class="form-control" placeholder="Palabra clave"
                                        value="<?php echo $_SESSION['palabra']; ?>" aria-label="Recipient's username"
                                        aria-describedby="basic-addon2">
                                    <div class="input-group-append btninicioper">
                                        <button class="btn btn-primary" type="submit">Buscar</button>
                                    </div>
                                </div>
                            </div> -->
                            <div class="col-md-3 text-center">
                                <div class="input-group">
                                    <select id="inputUbicacion" class="custom-select" name="departamento"
                                        aria-required="true" aria-invalid="false">
                                        <option value="">Seleccione</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Amazonas') echo 'selected'; ?>
                                            value="Amazonas">Amazonas</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Antioquia') echo 'selected'; ?>
                                            value="Antioquia">Antioquia</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Arauca') echo 'selected'; ?>
                                            value="Arauca">Arauca</option>
                                        <option <?php if ($_SESSION['departamento'] == 'SanAndres') echo 'selected'; ?>
                                            value="SanAndres">Archipiélago de San Andrés, Providencia y Santa Catalina
                                        </option>
                                        <option <?php if ($_SESSION['departamento'] == 'Atlantico') echo 'selected'; ?>
                                            value="Atlantico">Atlántico</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Bogota') echo 'selected'; ?>
                                            value="Bogota">Bogotá, D.C.</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Bolivar') echo 'selected'; ?>
                                            value="Bolivar">Bolívar</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Boyaca') echo 'selected'; ?>
                                            value="Boyaca">Boyacá</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Caldas') echo 'selected'; ?>
                                            value="Caldas">Caldas</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Caqueta') echo 'selected'; ?>
                                            value="Caqueta">Caquetá</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Casanare') echo 'selected'; ?>
                                            value="Casanare">Casanare</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Cauca') echo 'selected'; ?>
                                            value="Cauca">Cauca</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Cesar') echo 'selected'; ?>
                                            value="Cesar">Cesar</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Choco') echo 'selected'; ?>
                                            value="Choco">Chocó</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Cordoba') echo 'selected'; ?>
                                            value="Cordoba">Córdoba</option>
                                        <option
                                            <?php if ($_SESSION['departamento'] == 'Cundinamarca') echo 'selected'; ?>
                                            value="Cundinamarca">Cundinamarca</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Guainia') echo 'selected'; ?>
                                            value="Guainia">Guainía</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Guaviare') echo 'selected'; ?>
                                            value="Guaviare">Guaviare</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Huila') echo 'selected'; ?>
                                            value="Huila">Huila</option>
                                        <option <?php if ($_SESSION['departamento'] == 'LaGuajira') echo 'selected'; ?>
                                            value="LaGuajira">La Guajira</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Magdalena') echo 'selected'; ?>
                                            value="Magdalena">Magdalena</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Meta') echo 'selected'; ?>
                                            value="Meta">Meta</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Narino') echo 'selected'; ?>
                                            value="Narino">Nariño</option>
                                        <option
                                            <?php if ($_SESSION['departamento'] == 'NorteSantander') echo 'selected'; ?>
                                            value="NorteSantander">Norte de Santander</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Putumayo') echo 'selected'; ?>
                                            value="Putumayo">Putumayo</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Quindio') echo 'selected'; ?>
                                            value="Quindio">Quindio</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Risaralda') echo 'selected'; ?>
                                            value="Risaralda">Risaralda</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Santander') echo 'selected'; ?>
                                            value="Santander">Santander</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Sucre') echo 'selected'; ?>
                                            value="Sucre">Sucre</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Tolima') echo 'selected'; ?>
                                            value="Tolima">Tolima</option>
                                        <option <?php if ($_SESSION['departamento'] == 'ValleCauca') echo 'selected'; ?>
                                            value="ValleCauca">Valle del Cauca</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Vaupes') echo 'selected'; ?>
                                            value="Vaupes">Vaupés</option>
                                        <option <?php if ($_SESSION['departamento'] == 'Vichada') echo 'selected'; ?>
                                            value="Vichada">Vichada</option>
                                        <option
                                            <?php if ($_SESSION['departamento'] == 'Nivel nacional') echo 'selected'; ?>
                                            value="Nivel nacional">Nivel nacional</option>
                                    </select>
                                    <div class="input-group-append btninicioper">
                                        <button class="btn btn-primary" type="submit">Ubicacion</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="input-group">
                                    <select class="custom-select" name="jornada" id="inputGroupSelect04">
                                        <option value="">Seleccione</option>
                                        <option value="Tiempo completo">Tiempo completo</option>
                                        <option value="Medio tiempo">Medio tiempo</option>
                                        <option value="Jornada parcial">Jornada parcial</option>
                                        <option value="Estudiante en practicas">Estudiante en prácticas</option>
                                    </select>
                                    <div class="input-group-append btninicioper">
                                        <button class="btn btn-primary" type="submit">jornada</button>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 text-center">
                                <div class="row">
                                    <div class="col-md-10">
                                        <div class="input-group">
                                            <select id="inputSalario" class="custom-select" name="salario"
                                                aria-required="true" aria-invalid="false">
                                                <option value="">Seleccione</option>
                                                <option value="7">Más de $ 700.000</option>
                                                <option value="10">Más de $ 1.000.000</option>
                                                <option value="20">Más de $ 2.000.000</option>
                                                <option value="30">Más de $ 3.000.000</option>
                                                <option value="40">Más de $ 4.000.000</option>
                                                <option value="50">Más de $ 5.000.000</option>
                                                <option value="60">Más de $ 6.000.000</option>
                                                <option value="70">Más de $ 7.000.000</option>
                                                <option value="80">Más de $ 8.000.000</option>
                                                <option value="90">Más de $ 9.000.000</option>
                                                <option value="100">Más de $ 10.000.000</option>
                                                <option value="150">Más de $ 15.000.000</option>
                                                <option value="200">Más de $ 20.000.000</option>
                                            </select>
                                            <div class="input-group-append btninicioper">
                                                <button class="btn btn-primary" type="submit">Salario</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-2 btninicioper">
                                        <a class="btn btn-sm btn-primary"
                                            href="<?php echo constant('URL') . 'postulados/reiniciar' ?>">
                                            <ion-icon style="font-size:20px" name="sync-outline"></ion-icon>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </form>
                    <hr size="10" />
                </div>
                <div class="col-md-8 ">
                    <h2>Postulados</h2>
                    <table class="table table-bordered">
                        <thead>
                            <tr class="table bg-blue">
                                <th scope="col">Nombre</th>
                                <th scope="col">Apellido</th>
                                <th scope="col">Departamento</th>
                                <th scope="col">Ciudad</th>
                                <th scope="col">Estado</th>
                                <th scope="col">Hoja de Vida</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            include_once 'models/entity/personaAsp.php';
                            foreach ($this->personas as $row) {
                                $persona = new PersonaAsp();
                                $persona = $row;
                            ?>
                            <tr>
                                <td><?php echo $persona->nombres; ?></td>
                                <td><?php echo $persona->apellidos; ?></td>
                                <td><?php echo $persona->departamento; ?></td>
                                <td><?php echo $persona->ciudad; ?></td>
                                <td><?php echo $persona->estado; ?></td>
                                <td class="centrar-contenido">
                                    <a href="<?php echo constant('URL') . 'verHojaVida/verHojaVida/' . $persona->idUser; ?>"
                                        class="btn btn-sm btn-info">
                                        <ion-icon style="font-size:20px" name="eye-outline"></ion-icon>
                                    </a>
                                    <a href="<?php echo constant('URL') . 'postulados/seleccionar/' . $persona->id; ?>"
                                        class="btn btn-sm btn-success">
                                        <ion-icon style="font-size:20px" name="checkmark-done-outline"></ion-icon>
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
                                <a class="page-link"
                                    href="<?php echo constant('URL'); ?>postulados/nuevaPagina/<?php echo $_SESSION['pagina'] - 1; ?>">Anterior</a>
                            </li>
                            <?php for ($i = 0; $i < $this->numPaginas; $i++) { ?>
                            <li class="page-item <?php echo $_SESSION['pagina'] == $i + 1 ? 'active' : '' ?>">
                                <a class="page-link"
                                    href="<?php echo constant('URL'); ?>postulados/nuevaPagina/<?php echo $i + 1; ?>"><?php echo $i + 1; ?></a>
                            </li>
                            <?php } ?>
                            <li
                                class="page-item <?php echo  $_SESSION['pagina'] >= $this->numPaginas ? 'disabled' : '' ?>">
                                <a class="page-link"
                                    href="<?php echo constant('URL'); ?>postulados/nuevaPagina/<?php echo $_SESSION['pagina'] + 1; ?>">Siguiente</a>
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
                        <a href="<?php echo $publi->link; ?>" target="_blank"><img class="pd"
                                src="<?php echo constant('URL') . $publi->imagen; ?>" width="80%"></a>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
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