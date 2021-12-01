<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Editar oferta - Fendipetroleo Nacional</title>
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
    <?php require "views/header/header-empresa.php"; ?>

    <div class="container pd">
        <h1 class="text-center pd">Edita tu oferta</h1>
        <div class="card" style="width: 100%;">
            <div class="card-header">
                <h4 class="card-title text-center">Datos de tu oferta</h4>
            </div>
            <div class="card-body">
                <form action="<?php echo constant('URL'); ?>editarOfertaPublicada/editar" method="POST">
                    <div class="form-row">
                        <div class="form-group col-md-12">
                            <label for="inputNombre">Nombre de la oferta laboral<strong style="color:red">*</strong></label>
                            <input type="text" name="nombre" value="<?php echo $this->oferta->nombre; ?>" class="form-control" id="inputNombre" required pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" title="Solo se aceptan letras">
                        </div>
                        <div class="form-group col-md-6">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputUbicacion">Departamento<strong style="color:red">*</strong></label>
                                    <select id="inputUbicacion" class="form-control" name="departamento" aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->oferta->departamento == 'Antioquia') echo 'selected'; ?> value="Antioquia">Antioquia</option>
                                        <option <?php if ($this->oferta->departamento == 'Amazonas') echo 'selected'; ?> value="Amazonas">Amazonas</option>
                                        <option <?php if ($this->oferta->departamento == 'Arauca') echo 'selected'; ?> value="Arauca">Arauca</option>
                                        <option <?php if ($this->oferta->departamento == 'SanAndres') echo 'selected'; ?> value="SanAndres">Archipiélago de San Andrés, Providencia y Santa Catalina</option>
                                        <option <?php if ($this->oferta->departamento == 'Atlantico') echo 'selected'; ?> value="Atlantico">Atlántico</option>
                                        <option <?php if ($this->oferta->departamento == 'Bogota') echo 'selected'; ?> value="Bogota">Bogotá, D.C.</option>
                                        <option <?php if ($this->oferta->departamento == 'Bolivar') echo 'selected'; ?> value="Bolivar">Bolívar</option>
                                        <option <?php if ($this->oferta->departamento == 'Boyaca') echo 'selected'; ?> value="Boyaca">Boyacá</option>
                                        <option <?php if ($this->oferta->departamento == 'Caldas') echo 'selected'; ?> value="Caldas">Caldas</option>
                                        <option <?php if ($this->oferta->departamento == 'Caqueta') echo 'selected'; ?> value="Caqueta">Caquetá</option>
                                        <option <?php if ($this->oferta->departamento == 'Casanare') echo 'selected'; ?> value="Casanare">Casanare</option>
                                        <option <?php if ($this->oferta->departamento == 'Cauca') echo 'selected'; ?> value="Cauca">Cauca</option>
                                        <option <?php if ($this->oferta->departamento == 'Cesar') echo 'selected'; ?> value="Cesar">Cesar</option>
                                        <option <?php if ($this->oferta->departamento == 'Choco') echo 'selected'; ?> value="Choco">Chocó</option>
                                        <option <?php if ($this->oferta->departamento == 'Cordoba') echo 'selected'; ?> value="Cordoba">Córdoba</option>
                                        <option <?php if ($this->oferta->departamento == 'Cundinamarca') echo 'selected'; ?> value="Cundinamarca">Cundinamarca</option>
                                        <option <?php if ($this->oferta->departamento == 'Guainia') echo 'selected'; ?> value="Guainia">Guainía</option>
                                        <option <?php if ($this->oferta->departamento == 'Guaviare') echo 'selected'; ?> value="Guaviare">Guaviare</option>
                                        <option <?php if ($this->oferta->departamento == 'Huila') echo 'selected'; ?> value="Huila">Huila</option>
                                        <option <?php if ($this->oferta->departamento == 'LaGuajira') echo 'selected'; ?> value="LaGuajira">La Guajira</option>
                                        <option <?php if ($this->oferta->departamento == 'Magdalena') echo 'selected'; ?> value="Magdalena">Magdalena</option>
                                        <option <?php if ($this->oferta->departamento == 'Meta') echo 'selected'; ?> value="Meta">Meta</option>
                                        <option <?php if ($this->oferta->departamento == 'Narino') echo 'selected'; ?> value="Narino">Nariño</option>
                                        <option <?php if ($this->oferta->departamento == 'NorteSantander') echo 'selected'; ?> value="NorteSantander">Norte de Santander</option>
                                        <option <?php if ($this->oferta->departamento == 'Putumayo') echo 'selected'; ?> value="Putumayo">Putumayo</option>
                                        <option <?php if ($this->oferta->departamento == 'Quindio') echo 'selected'; ?> value="Quindio">Quindio</option>
                                        <option <?php if ($this->oferta->departamento == 'Risaralda') echo 'selected'; ?> value="Risaralda">Risaralda</option>
                                        <option <?php if ($this->oferta->departamento == 'Santander') echo 'selected'; ?> value="Santander">Santander</option>
                                        <option <?php if ($this->oferta->departamento == 'Sucre') echo 'selected'; ?> value="Sucre">Sucre</option>
                                        <option <?php if ($this->oferta->departamento == 'Tolima') echo 'selected'; ?> value="Tolima">Tolima</option>
                                        <option <?php if ($this->oferta->departamento == 'ValleCauca') echo 'selected'; ?> value="ValleCauca">Valle del Cauca</option>
                                        <option <?php if ($this->oferta->departamento == 'Vaupes') echo 'selected'; ?> value="Vaupes">Vaupés</option>
                                        <option <?php if ($this->oferta->departamento == 'Vichada') echo 'selected'; ?> value="Vichada">Vichada</option>
                                        <option <?php if ($this->oferta->departamento == 'Nivel nacional') echo 'selected'; ?> value="Nivel nacional">Nivel nacional</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputMunicipio">Municipio<strong style="color:red">*</strong></label>
                                    <input type="text" name="municipio" value="<?php echo $this->oferta->municipio; ?>" class="form-control" id="inputMunicipio" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,10}" required title="Solo se aceptan numeros">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputSalario">Salario<strong style="color:red">*</strong></label>
                                    <input type="text" name="salario" value="<?php echo $this->oferta->salario; ?>" class="form-control" id="inputSalario" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,10}" required title="Solo se aceptan numeros">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputJornada">Tipo de jornada<strong style="color:red">*</strong></label>
                                    <select id="inputJornada" class="form-control" name="jornada" aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->oferta->jornada == 'Tiempo completo') echo 'selected'; ?> value="Tiempo completo">Tiempo completo</option>
                                        <option <?php if ($this->oferta->jornada == 'Medio tiempo') echo 'selected'; ?> value="Medio tiempo">Medio tiempo</option>
                                        <option <?php if ($this->oferta->jornada == 'Jornada parcial') echo 'selected'; ?> value="Jornada parcial">Jornada parcial</option>
                                        <option <?php if ($this->oferta->jornada == 'Estudiante en practicas') echo 'selected'; ?> value="Estudiante en practicas">Estudiante en practicas</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="inputDescripcion">Descripcion<strong style="color:red">*</strong></label>
                            <textarea class="form-control" name="descripcion" id="inputDescripcion" rows="8" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{10,500}" required title="Solo se aceptan letras  y numeros"><?php echo $this->oferta->descripcion; ?></textarea>
                        </div>
                    </div>
                    <div class="text-center">
                        <button type="submit" class="btn btn-success">Editar oferta</button>
                    </div>
                </form>
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