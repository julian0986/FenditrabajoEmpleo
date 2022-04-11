<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Registrar oferta - Fendipetroleo Nacional</title>
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

<body>
    <?php require "views/header/header-empresa.php"; ?>

    <div class="container pd">
        <h2 class="text-center pd">Diligencia el siguiente formulario, o información de la oferta.</h2>
        <div class="card bordercar" style="width: 100%;">
            <div class="card-header bg-blue">
                <h4 class="card-title text-center">Datos de registro de oferta</h4>
            </div>
            <div class="card-body">

                <form action="" method="">

                    <div class="form-row">

                        <div class="form-group col-md-4">
                            <label for="inputNombreEmpresa">Nombre o Razón social</label>
                            <input type="text" value="<?php echo $this->empresa->nombre; ?>" name="nombre"
                                class="form-control" id="inputNombreEmpresa" readonly>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputNIT">Tipo de Documento</label>
                            <input type="text" value="<?php echo $this->empresa->emTipoDocu; ?>" name="nit"
                                class="form-control" id="inputNIT" readonly>
                        </div>

                        <div class="form-group col-md-4">
                            <label for="inputNIT">NIT o Numero de documento</label>
                            <input type="text" value="<?php echo $this->empresa->nit; ?>" name="nit"
                                class="form-control" id="inputNIT" readonly>
                        </div>




                    </div>


                </form>
                <form action="<?php echo constant('URL'); ?>registrarOferta/agregarOferta" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-6">
                            <label for="inputNombre">Título de la oferta laboral<strong
                                    style="color:red">*</strong></label>
                            <input type="text" name="nombre" class="form-control" id="inputNombre"
                                pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,48}" required title="Solo se aceptan letras">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputOfProfesion">Profesión<strong style="color:red">*</strong></label>
                            <input type="text" name="ofProfesion" class="form-control" id="inputOfProfesion"
                                pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,48}" required title="Solo se aceptan letras">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputOfCargo">Cargo<strong style="color:red">*</strong></label>
                            <input type="text" name="ofCargo" class="form-control" id="inputOfCargo"
                                pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,48}" required title="Solo se aceptan letras">
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputofNivelEstudio">Nivel de estudios<strong
                                    style="color:red">*</strong></label>
                            <select id="inputofNivelEstudio" class="form-control" name="ofNivelEstudio"
                                aria-required="true" aria-invalid="false" required>
                                <option value="">Seleccione</option>
                                <option value="Educación Básica Primaria">Educación Básica Primaria</option>
                                <option value="Educación Básica Secundaria">Educación Básica Secundaria
                                </option>
                                <option value="Bachillerato / Educación Media">Bachillerato / Educación
                                    Media</option>
                                <option value="Universidad / Carrera técnica">Universidad / Carrera técnica
                                </option>
                                <option value="Universidad / Carrera tecnológica">Universidad / Carrera
                                    tecnológica</option>
                                <option value="Universidad / Carrera Profesional">Universidad / Carrera
                                    Profesional</option>
                                <option value="Postgrado / Especialización">Postgrado / Especialización
                                </option>
                                <option value="Postgrado / Maestría">Postgrado / Maestría</option>
                                <option value="Postgrado / Doctorado">Postgrado / Doctorado</option>
                                <option value="Idiomas">Idiomas</option>
                                <option value="Cursos">Cursos</option>
                            </select>
                        </div>
                        <!-- <div class="form-group col-md-12">
                            <label for="inputJornada">Tipo de jornada<strong style="color:red">*</strong></label>
                            <select id="inputJornada" class="form-control" name="jornada" aria-required="true"
                                aria-invalid="false" required>
                                <option value="">Seleccione</option>
                                <option value="Tiempo completo">Tiempo completo</option>
                                <option value="Medio tiempo">Medio tiempo</option>
                                <option value="Jornada parcial">Jornada parcial</option>
                                <option value="Estudiante en practicas">Estudiante en practicas</option>
                            </select>
                        </div> -->

                        <div class="form-group col-md-4">
                            <label for="inputofSectorEconomico">Sector Económico<strong
                                    style="color:red">*</strong></label>
                            <select id="inputofSectorEconomico" class="form-control" name="ofSectorEconomico"
                                aria-required="true" aria-invalid="false" required>
                                <option value="">Seleccione</option>
                                <option value="1">Agricultura / Pesca / Ganadería</option>
                                <option value="2">Construcción / obras</option>
                                <option value="3">Educación</option>
                                <option value="4">Energía</option>
                                <option value="5">Entretenimiento / Deportes</option>
                                <option value="6">Estaciones de servicio EDS</option>
                                <option value="7">Fabricación</option>
                                <option value="8">Finanzas / Banca</option>
                                <option value="9">Gobierno / No Lucro</option>
                                <option value="10">Hostelería / Turismo</option>
                                <option value="11">Informática / Hardware</option>
                                <option value="12">Informática / Software</option>
                                <option value="13">Internet</option>
                                <option value="14">Legal / Asesoría</option>
                                <option value="15">Materias Primas</option>
                                <option value="16">Medios de Comunicación</option>
                                <option value="17">Publicidad / RRPP</option>
                                <option value="18">RRHH / Personal</option>
                                <option value="19">Salud / Medicina</option>
                                <option value="20">Servicios Profesionales</option>
                                <option value="21">Telecomunicaciones</option>
                                <option value="22">Transporte</option>
                                <option value="23">Venta al consumidor</option>
                                <option value="24">Venta al por mayor</option>
                            </select>
                        </div>
                        <div class="form-group col-md-4">
                            <label for="inputUbicacion">Departamento<strong style="color:red">*</strong></label>
                            <select id="inputUbicacion" class="form-control" name="departamento" aria-required="true"
                                aria-invalid="false" required>
                                <option value="">Seleccione</option>
                                <option value="Amazonas">Amazonas</option>
                                <option value="Antioquia">Antioquia</option>
                                <option value="Arauca">Arauca</option>
                                <option value="SanAndres">Archipiélago de San Andrés, Providencia y Santa Catalina
                                </option>
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
                        <div class="form-group col-md-4">
                            <label for="inputMunicipio">Municipio<strong style="color:red">*</strong></label>
                            <input type="text" name="municipio" class="form-control" id="inputMunicipio"
                                pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,10}" required title="Solo se aceptan numeros">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-row">

                                <div class="form-group col-md-6">
                                    <label for="inputOfTiempoExpe">Tiempo de Experiencia en meses<strong
                                            style="color:red">*</strong></label>
                                    <input type="number" name="ofTiempoExpe" class="form-control" id="inputOfTiempoExpe"
                                        pattern="[0-9. ]{5,15}" required title="Solo se aceptan numeros">

                                </div>


                                <div class="form-group col-md-6">
                                    <label for="inputSalario">Salario<strong style="color:red">*</strong></label>
                                    <input type="text" name="salario" class="form-control" id="inputSalario"
                                        pattern="[0-9.-# ]{3,15}" required title="Solo se aceptan numeros">
                                </div>


                                <div class="form-group col-md-6">
                                    <label for="inputDisponibilidad">Disponibilidad de la oferta<strong
                                            style="color:red">*</strong></label>
                                    <select id="inputDisponibilidad" class="form-control" name="disponiblidad"
                                        aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option value="1">Una semana</option>
                                        <option value="2">Dos semanas</option>
                                        <option value="3">Un mes</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-6">
                                    <label for="inputOfCantidad">Cantidad de ofertas<strong
                                            style="color:red">*</strong></label>
                                    <input type="number" name="ofCantidad" class="form-control" id="inputOfCantidad"
                                        pattern="[0-9.-# ]{3,15}" required title="Solo se aceptan numeros">
                                </div>




                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDescripcion">Descripción<strong style="color:red">*</strong></label>
                            <textarea class="form-control" name="descripcion" id="inputDescripcion" rows="5"
                                pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{10,500}" required
                                title="Solo se aceptan letras y numeros"></textarea>
                        </div>
                    </div>
                    <div class="text-center btninicioper">
                        <button type="submit" class="btn btn-primary">Registrar oferta</button>
                    </div>
                </form>
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
                                    <img style="border-radius: 10px;"
                                        src="<?php echo constant('URL') . $curso->isotipo; ?>" class="card-img-top"
                                        width="300px" height="200px">
                                    <div class="card-footer btninicioper"
                                        style="border-color: transparent; background: transparent">
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