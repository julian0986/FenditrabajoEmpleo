<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Editar Experiencia - Fendipetroleo Nacional</title>
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
            <div class="col-md-8">
                <div class="card" style="width: 100%;">
                    <div class="card-header">
                        <h4 class="card-title text-center">Editar experiencia</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo constant('URL'); ?>editarExperiencia/editar" method="POST">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label>Empresa <strong style="color:red">*</strong></label>
                                    <input type="text" name="empresa" value="<?php echo $this->experiencia->empresa; ?>" class="form-control" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,50}" required title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputDepartamento">Departamento<strong style="color:red">*</strong></label>
                                    <select id="inputDepartamento" class="form-control" name="departamento" aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->experiencia->departamento == 'Amazonas') echo 'selected'; ?> value="Amazonas">Amazonas</option>
                                        <option <?php if ($this->experiencia->departamento == 'Antioquia') echo 'selected'; ?> value="Antioquia">Antioquia</option>
                                        <option <?php if ($this->experiencia->departamento == 'Arauca') echo 'selected'; ?> value="Arauca">Arauca</option>
                                        <option <?php if ($this->experiencia->departamento == 'SanAndres') echo 'selected'; ?> value="SanAndres">Archipiélago de San Andrés, Providencia y Santa Catalina</option>
                                        <option <?php if ($this->experiencia->departamento == 'Atlantico') echo 'selected'; ?> value="Atlantico">Atlántico</option>
                                        <option <?php if ($this->experiencia->departamento == 'Bogota') echo 'selected'; ?> value="Bogota">Bogotá, D.C.</option>
                                        <option <?php if ($this->experiencia->departamento == 'Bolivar') echo 'selected'; ?> value="Bolivar">Bolívar</option>
                                        <option <?php if ($this->experiencia->departamento == 'Boyaca') echo 'selected'; ?> value="Boyaca">Boyacá</option>
                                        <option <?php if ($this->experiencia->departamento == 'Caldas') echo 'selected'; ?> value="Caldas">Caldas</option>
                                        <option <?php if ($this->experiencia->departamento == 'Caqueta') echo 'selected'; ?> value="Caqueta">Caquetá</option>
                                        <option <?php if ($this->experiencia->departamento == 'Casanare') echo 'selected'; ?> value="Casanare">Casanare</option>
                                        <option <?php if ($this->experiencia->departamento == 'Cauca') echo 'selected'; ?> value="Cauca">Cauca</option>
                                        <option <?php if ($this->experiencia->departamento == 'Cesar') echo 'selected'; ?> value="Cesar">Cesar</option>
                                        <option <?php if ($this->experiencia->departamento == 'Choco') echo 'selected'; ?> value="Choco">Chocó</option>
                                        <option <?php if ($this->experiencia->departamento == 'Cordoba') echo 'selected'; ?> value="Cordoba">Córdoba</option>
                                        <option <?php if ($this->experiencia->departamento == 'Cundinamarca') echo 'selected'; ?> value="Cundinamarca">Cundinamarca</option>
                                        <option <?php if ($this->experiencia->departamento == 'Guainia') echo 'selected'; ?> value="Guainia">Guainía</option>
                                        <option <?php if ($this->experiencia->departamento == 'Guaviare') echo 'selected'; ?> value="Guaviare">Guaviare</option>
                                        <option <?php if ($this->experiencia->departamento == 'Huila') echo 'selected'; ?> value="Huila">Huila</option>
                                        <option <?php if ($this->experiencia->departamento == 'LaGuajira') echo 'selected'; ?> value="LaGuajira">La Guajira</option>
                                        <option <?php if ($this->experiencia->departamento == 'Magdalena') echo 'selected'; ?> value="Magdalena">Magdalena</option>
                                        <option <?php if ($this->experiencia->departamento == 'Meta') echo 'selected'; ?> value="Meta">Meta</option>
                                        <option <?php if ($this->experiencia->departamento == 'Narino') echo 'selected'; ?> value="Narino">Nariño</option>
                                        <option <?php if ($this->experiencia->departamento == 'NorteSantander') echo 'selected'; ?> value="NorteSantander">Norte de Santander</option>
                                        <option <?php if ($this->experiencia->departamento == 'Putumayo') echo 'selected'; ?> value="Putumayo">Putumayo</option>
                                        <option <?php if ($this->experiencia->departamento == 'Quindio') echo 'selected'; ?> value="Quindio">Quindio</option>
                                        <option <?php if ($this->experiencia->departamento == 'Risaralda') echo 'selected'; ?> value="Risaralda">Risaralda</option>
                                        <option <?php if ($this->experiencia->departamento == 'Santander') echo 'selected'; ?> value="Santander">Santander</option>
                                        <option <?php if ($this->experiencia->departamento == 'Sucre') echo 'selected'; ?> value="Sucre">Sucre</option>
                                        <option <?php if ($this->experiencia->departamento == 'Tolima') echo 'selected'; ?> value="Tolima">Tolima</option>
                                        <option <?php if ($this->experiencia->departamento == 'ValleCauca') echo 'selected'; ?> value="ValleCauca">Valle del Cauca</option>
                                        <option <?php if ($this->experiencia->departamento == 'Vaupes') echo 'selected'; ?> value="Vaupes">Vaupés</option>
                                        <option <?php if ($this->experiencia->departamento == 'Vichada') echo 'selected'; ?> value="Vichada">Vichada</option>
                                        <option <?php if ($this->experiencia->departamento == 'Extranjero') echo 'selected'; ?> value="Extranjero">Extranjero</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputSectorEmpresa">Sector de la empresa<strong style="color:red">*</strong></label>
                                    <select id="inputSectorEmpresa" class="form-control" name="sector" aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->experiencia->sector == '1') echo 'selected'; ?> value="1">Agricultura / Pesca / Ganadería</option>
                                        <option <?php if ($this->experiencia->sector == '2') echo 'selected'; ?> value="2">Construcción / obras</option>
                                        <option <?php if ($this->experiencia->sector == '3') echo 'selected'; ?> value="3">Educación</option>
                                        <option <?php if ($this->experiencia->sector == '4') echo 'selected'; ?> value="4">Energía</option>
                                        <option <?php if ($this->experiencia->sector == '5') echo 'selected'; ?> value="5">Entretenimiento / Deportes</option>
                                        <option <?php if ($this->experiencia->sector == '6') echo 'selected'; ?> value="6">Estaciones de servicio EDS</option>
                                        <option <?php if ($this->experiencia->sector == '7') echo 'selected'; ?> value="7">Fabricación</option>
                                        <option <?php if ($this->experiencia->sector == '8') echo 'selected'; ?> value="8">Finanzas / Banca</option>
                                        <option <?php if ($this->experiencia->sector == '9') echo 'selected'; ?> value="9">Gobierno / No Lucro</option>
                                        <option <?php if ($this->experiencia->sector == '10') echo 'selected'; ?> value="10">Hostelería / Turismo</option>
                                        <option <?php if ($this->experiencia->sector == '11') echo 'selected'; ?> value="11">Informática / Hardware</option>
                                        <option <?php if ($this->experiencia->sector == '12') echo 'selected'; ?> value="12">Informática / Software</option>
                                        <option <?php if ($this->experiencia->sector == '13') echo 'selected'; ?> value="13">Internet</option>
                                        <option <?php if ($this->experiencia->sector == '14') echo 'selected'; ?> value="14">Legal / Asesoría</option>
                                        <option <?php if ($this->experiencia->sector == '15') echo 'selected'; ?> value="15">Materias Primas</option>
                                        <option <?php if ($this->experiencia->sector == '16') echo 'selected'; ?> value="16">Medios de Comunicación</option>
                                        <option <?php if ($this->experiencia->sector == '17') echo 'selected'; ?> value="17">Publicidad / RRPP</option>
                                        <option <?php if ($this->experiencia->sector == '18') echo 'selected'; ?> value="18">RRHH / Personal</option>
                                        <option <?php if ($this->experiencia->sector == '19') echo 'selected'; ?> value="19">Salud / Medicina</option>
                                        <option <?php if ($this->experiencia->sector == '20') echo 'selected'; ?> value="20">Servicios Profesionales</option>
                                        <option <?php if ($this->experiencia->sector == '21') echo 'selected'; ?> value="21">Telecomunicaciones</option>
                                        <option <?php if ($this->experiencia->sector == '22') echo 'selected'; ?> value="22">Transporte</option>
                                        <option <?php if ($this->experiencia->sector == '23') echo 'selected'; ?> value="23">Venta al consumidor</option>
                                        <option <?php if ($this->experiencia->sector == '24') echo 'selected'; ?> value="24">Venta al por mayor</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputCargo">Cargo<strong style="color:red">*</strong></label>
                                    <input type="text" name="cargo" value="<?php echo $this->experiencia->cargo; ?>" class="form-control" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,50}" required title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputArea">Area<strong style="color: red">*</strong></label>
                                    <select id="inputArea" class="form-control" name="area" aria-required="true" aria-invalid="false" required>
                                        <option value="">Categorías</option>
                                        <option <?php if ($this->experiencia->sector == '1') echo 'selected'; ?> value="1">Administración / Oficina</option>
                                        <option <?php if ($this->experiencia->sector == '2') echo 'selected'; ?> value="2">Almacén / Logística / Transporte</option>
                                        <option <?php if ($this->experiencia->sector == '3') echo 'selected'; ?> value="3">Atención a clientes</option>
                                        <option <?php if ($this->experiencia->sector == '4') echo 'selected'; ?> value="4">CallCenter / Telemercadeo</option>
                                        <option <?php if ($this->experiencia->sector == '5') echo 'selected'; ?> value="5">Compras / Comercio Exterior</option>
                                        <option <?php if ($this->experiencia->sector == '6') echo 'selected'; ?> value="6">Construcción y obra</option>
                                        <option <?php if ($this->experiencia->sector == '7') echo 'selected'; ?> value="7">Contabilidad / Finanzas</option>
                                        <option <?php if ($this->experiencia->sector == '8') echo 'selected'; ?> value="8">Dirección / Gerencia</option>
                                        <option <?php if ($this->experiencia->sector == '9') echo 'selected'; ?> value="9">Diseño / Artes gráficas</option>
                                        <option <?php if ($this->experiencia->sector == '10') echo 'selected'; ?> value="10">Docencia</option>
                                        <option <?php if ($this->experiencia->sector == '11') echo 'selected'; ?> value="11">Hostelería / Turismo</option>
                                        <option <?php if ($this->experiencia->sector == '12') echo 'selected'; ?> value="12">Informática / Telecomunicaciones</option>
                                        <option <?php if ($this->experiencia->sector == '13') echo 'selected'; ?> value="13">Ingeniería</option>
                                        <option <?php if ($this->experiencia->sector == '14') echo 'selected'; ?> value="14">Investigación y Calidad</option>
                                        <option <?php if ($this->experiencia->sector == '15') echo 'selected'; ?> value="15">Legal / Asesoría</option>
                                        <option <?php if ($this->experiencia->sector == '16') echo 'selected'; ?> value="16">Mantenimiento y Reparaciones Técnicas</option>
                                        <option <?php if ($this->experiencia->sector == '17') echo 'selected'; ?> value="17">Medicina / Salud</option>
                                        <option <?php if ($this->experiencia->sector == '18') echo 'selected'; ?> value="18">Mercadotecnia / Publicidad / Comunicación</option>
                                        <option <?php if ($this->experiencia->sector == '19') echo 'selected'; ?> value="19">Producción / Operarios / Manufactura</option>
                                        <option <?php if ($this->experiencia->sector == '20') echo 'selected'; ?> value="20">Recursos Humanos</option>
                                        <option <?php if ($this->experiencia->sector == '21') echo 'selected'; ?> value="21">Servicios Generales, Aseo y Seguridad </option>
                                        <option <?php if ($this->experiencia->sector == '22') echo 'selected'; ?> value="22">Ventas</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputPeriodo">Periodo<strong style="color: red">*</strong></label>
                                    <div class="row">
                                        <div class="col-md-5">
                                            <input type="date" name="fechaInicio" value="<?php echo $this->experiencia->fechaInicio; ?>" class="form-control" min="1920-01-01">
                                        </div>
                                        <div class="col-md-2">
                                            <h2 class="text-center">-</h2>
                                        </div>
                                        <div class="col-md-5">
                                            <input type="date" name="fechaFin" value="<?php echo $this->experiencia->fechaFin; ?>" class="form-control" min="1920-01-01">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-12 text-center">
                                    <button type="submit" class="btn btn-primary">Guardar</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
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
    <?php include "views/footer/footer.php"; ?>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>