<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Perfil - Fendipetroleo Nacional</title>
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
    function myFunction() {
        var x = document.getElementById("clave");
        if (x.type === "password") {
            x.type = "text";
        } else {
            x.type = "password";
        }
        var y = document.getElementById("conf");
        if (y.type === "password") {
            y.type = "text";
        } else {
            y.type = "password";
        }
    }
</script>

<body>
    <?php require "views/header/header-admin.php"; ?>

    <div class="pd-m">
        <div class="row">
            <div class="col-md-1">
            </div>
            <div class="col-md-9">
                <h1 class="text-center">Información de la empresa</h1>
                <br />
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Cambio de contraseña</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo constant('URL'); ?>editarEmpresa/cambio" method="POST">
                            <div class="form-group">
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <ion-icon name="lock-closed-outline" style="color:black;"></ion-icon>
                                                </span>
                                            </div>
                                            <input type="password" name="clave" class="form-control" id="clave" placeholder="Ingrese la contraseña" required>
                                        </div>
                                    </div>
                                    <div class="col-md-8">
                                        <div class="input-group mb-3">
                                            <div class="input-group-prepend">
                                                <span class="input-group-text">
                                                    <ion-icon name="lock-closed-outline" style="color:black;"></ion-icon>
                                                </span>
                                            </div>
                                            <input type="password" name="conf" class="form-control" id="conf" placeholder="Confirme la nueva contraseña " required>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <input type="checkbox" onclick="myFunction()"> Mostrar contraseña
                                    </div>
                                    <div class="col-md-5">
                                        <button type="submit" class="btn btn-primary mb-2">Guardar</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <br />
                <form action="<?php echo constant('URL'); ?>editarEmpresa/editarPerfil" method="POST" enctype="multipart/form-data">
                    <div class="card" style="width: 100%;border-radius: 0%;">
                        <div class="card-header">
                            <h4 class="card-title text-center">Datos Generales</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-row col-md-8">
                                    <div class="form-group col-md-12">
                                        <label for="inputNombreEmpresa">Nombre de la empresa <strong style="color:red">*</strong></label>
                                        <input type="text" value="<?php echo $this->empresa->nombre; ?>" name="nombre" class="form-control" id="inputNombreEmpresa" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{4,50}" required title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputNIT">NIT <strong style="color:red">*</strong></label>
                                        <input type="text" value="<?php echo $this->empresa->nit; ?>" name="nit" class="form-control" id="inputNIT" pattern="[0-9.- ]{8,48}" title="Solo se aceptan numeros">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputCorreoCon">Correo de la empresa <strong style="color:red">*</strong></label>
                                        <input type="email" value="<?php echo $this->empresa->correoCon; ?>" name="correoCon" class="form-control" id="inputCorreoCon">
                                    </div>
                                </div>
                                <div class="form-row col-md-4">
                                    <div class="form-group col-md-12 text-center">
                                        <img src="<?php echo constant('URL') . $this->empresa->isotipo; ?>" alt="" width="80%">

                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputDireccion">Dirección de la empresa <strong style="color:red">*</strong></label>
                                    <input type="text" value="<?php echo $this->empresa->direccion; ?>" name="direccion" class="form-control" id="inputDireccion" pattern="[a-zA-Záéíóúüñ0-9.,#-°/\$% ]{5,50}" title="Solo se aceptan numeros">
                                </div>
                                <div class="form-group col-md-5">
                                    <label for="inputDepartamentoEmpresa">Departamento <strong style="color:red">*</strong></label>
                                    <select id="inputDepartamentoEmpresa" class="form-control" name="departamento" aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->empresa->departamento == 'Bogota') echo 'selected'; ?> value="Bogota">Bogotá, D.C.</option>
                                        <option <?php if ($this->empresa->departamento == 'Antioquia') echo 'selected'; ?> value="Antioquia">Antioquia</option>
                                        <option <?php if ($this->empresa->departamento == 'Amazonas') echo 'selected'; ?> value="Amazonas">Amazonas</option>
                                        <option <?php if ($this->empresa->departamento == 'Arauca') echo 'selected'; ?> value="Arauca">Arauca</option>
                                        <option <?php if ($this->empresa->departamento == 'SanAndres') echo 'selected'; ?> value="SanAndres">Archipiélago de San Andrés, Providencia y Santa Catalina</option>
                                        <option <?php if ($this->empresa->departamento == 'Atlantico') echo 'selected'; ?> value="Atlantico">Atlántico</option>
                                        <option <?php if ($this->empresa->departamento == 'Bolivar') echo 'selected'; ?> value="Bolivar">Bolívar</option>
                                        <option <?php if ($this->empresa->departamento == 'Boyaca') echo 'selected'; ?> value="Boyaca">Boyacá</option>
                                        <option <?php if ($this->empresa->departamento == 'Caldas') echo 'selected'; ?> value="Caldas">Caldas</option>
                                        <option <?php if ($this->empresa->departamento == 'Caqueta') echo 'selected'; ?> value="Caqueta">Caquetá</option>
                                        <option <?php if ($this->empresa->departamento == 'Casanare') echo 'selected'; ?> value="Casanare">Casanare</option>
                                        <option <?php if ($this->empresa->departamento == 'Cauca') echo 'selected'; ?> value="Cauca">Cauca</option>
                                        <option <?php if ($this->empresa->departamento == 'Cesar') echo 'selected'; ?> value="Cesar">Cesar</option>
                                        <option <?php if ($this->empresa->departamento == 'Choco') echo 'selected'; ?> value="Choco">Chocó</option>
                                        <option <?php if ($this->empresa->departamento == 'Cordoba') echo 'selected'; ?> value="Cordoba">Córdoba</option>
                                        <option <?php if ($this->empresa->departamento == 'Cundinamarca') echo 'selected'; ?> value="Cundinamarca">Cundinamarca</option>
                                        <option <?php if ($this->empresa->departamento == 'Guainia') echo 'selected'; ?> value="Guainia">Guainía</option>
                                        <option <?php if ($this->empresa->departamento == 'Guaviare') echo 'selected'; ?> value="Guaviare">Guaviare</option>
                                        <option <?php if ($this->empresa->departamento == 'Huila') echo 'selected'; ?> value="Huila">Huila</option>
                                        <option <?php if ($this->empresa->departamento == 'LaGuajira') echo 'selected'; ?> value="LaGuajira">La Guajira</option>
                                        <option <?php if ($this->empresa->departamento == 'Magdalena') echo 'selected'; ?> value="Magdalena">Magdalena</option>
                                        <option <?php if ($this->empresa->departamento == 'Meta') echo 'selected'; ?> value="Meta">Meta</option>
                                        <option <?php if ($this->empresa->departamento == 'Narino') echo 'selected'; ?> value="Narino">Nariño</option>
                                        <option <?php if ($this->empresa->departamento == 'NorteSantander') echo 'selected'; ?> value="NorteSantander">Norte de Santander</option>
                                        <option <?php if ($this->empresa->departamento == 'Putumayo') echo 'selected'; ?> value="Putumayo">Putumayo</option>
                                        <option <?php if ($this->empresa->departamento == 'Quindio') echo 'selected'; ?> value="Quindio">Quindio</option>
                                        <option <?php if ($this->empresa->departamento == 'Risaralda') echo 'selected'; ?> value="Risaralda">Risaralda</option>
                                        <option <?php if ($this->empresa->departamento == 'Santander') echo 'selected'; ?> value="Santander">Santander</option>
                                        <option <?php if ($this->empresa->departamento == 'Sucre') echo 'selected'; ?> value="Sucre">Sucre</option>
                                        <option <?php if ($this->empresa->departamento == 'Tolima') echo 'selected'; ?> value="Tolima">Tolima</option>
                                        <option <?php if ($this->empresa->departamento == 'ValleCauca') echo 'selected'; ?> value="ValleCauca">Valle del Cauca</option>
                                        <option <?php if ($this->empresa->departamento == 'Vaupes') echo 'selected'; ?> value="Vaupes">Vaupés</option>
                                        <option <?php if ($this->empresa->departamento == 'Vichada') echo 'selected'; ?> value="Vichada">Vichada</option>
                                        <option <?php if ($this->empresa->departamento == 'Extranjero') echo 'selected'; ?> value="Extranjero">Extranjero</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-7">
                                    <label for="inputCiudadEmpresa">Ciudad / Municipio <strong style="color:red">*</strong></label>
                                    <input type="text" name="ciudad" value="<?php echo $this->empresa->ciudad; ?>" class="form-control" id="inputCiudadEmpresa" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputDescripcionEmpresa">Descripción de la empresa <strong style="color:red">*</strong></label>
                                    <textarea name="descripcion" id="inputDescripcionEmpresa" class="form-control" rows="10" pattern="[a-zA-Záéíóú0-9 .,]{15,500}" required title="Solo se aceptan letras y numeros"><?php echo $this->empresa->descripcion; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card" style="border-radius: 0%;">
                        <div class="card-header">
                            <h4 class="card-title text-center">Datos del contacto</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-6">
                                    <label for="inputNombre">Nombres persona contacto <strong style="color:red">*</strong></label>
                                    <input type="text" value="<?php echo $this->empresa->nombreE; ?>" name="nombreE" class="form-control" id="inputNombre" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputApellido">Apellidos persona contacto <strong style="color:red">*</strong></label>
                                    <input type="text" value="<?php echo $this->empresa->apellidoE; ?>" name="apellidoE" class="form-control" id="inputApellido" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputCorreoE">Correo persona contacto <strong style="color:red">*</strong></label>
                                    <input type="email" value="<?php echo $this->empresa->correoE; ?>" name="correoE" class="form-control" id="inputCorreoE">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="selectCargo">Cargo persona contacto <strong style="color:red">*</strong></label>
                                    <select class="form-control" name="cargoE" id="selectCargo">
                                        <option value="">Seleccione un cargo</option>
                                        <option <?php if ($this->empresa->cargoE == 'Presidente') echo 'selected'; ?> value="Presidente">Presidente</option>
                                        <option <?php if ($this->empresa->cargoE == 'Director') echo 'selected'; ?> value="Director">Director</option>
                                        <option <?php if ($this->empresa->cargoE == 'Gerente') echo 'selected'; ?> value="Gerente">Gerente</option>
                                        <option <?php if ($this->empresa->cargoE == 'Jefe') echo 'selected'; ?> value="Jefe">Jefe</option>
                                        <option <?php if ($this->empresa->cargoE == 'Coordinador') echo 'selected'; ?> value="Coordinador">Coordinador</option>
                                        <option <?php if ($this->empresa->cargoE == 'Analista') echo 'selected'; ?> value="Analista">Analista</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputTelefono">Teléfono persona contacto <strong style="color:red">*</strong></label>
                                    <input type="text" value="<?php echo $this->empresa->telefonoE; ?>" class="form-control" name="telefonoE" class="form-control" id="inputTelefono" pattern="[a-zA-Záéíóúüñ0-9_-,.\$%# ]{6,50}" required title="Solo se aceptan numeros">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pd">
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>

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