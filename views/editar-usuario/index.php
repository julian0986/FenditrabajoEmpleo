<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Editar usuario - Fendipetroleo Nacional</title>
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
    <div class="container pd">
        <div class="row">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title text-center">Cambio de contraseña</h4>
                    </div>
                    <div class="card-body">
                        <form action="<?php echo constant('URL'); ?>editarUsuario/cambio" method="POST">
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
                <form action="<?php echo constant('URL') . 'editarUsuario/agregarHojaVida/' . $this->hoja->id; ?>" method="POST" enctype="multipart/form-data">
                    <div class="card" style="width: 100%;">
                        <div class="card-header">
                            <h4 class="card-title text-center">Datos personales</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-row col-md-8">
                                    <div class="form-group col-md-12">
                                        <label for="inputNombre">Nombre<strong style="color:red">*</strong></label>
                                        <input type="text" value="<?php echo $this->hoja->nombre; ?>" name="nombre" class="form-control" id="inputNombre" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputApellidos">Apellidos<strong style="color:red">*</strong></label>
                                        <input type="text" value="<?php echo $this->hoja->apellido; ?>" name="apellido" class="form-control" id="inputApellidos" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputIdentificacion">Tipo<strong style="color:red">*</strong></label>
                                        <select id="inputIdentificacion" class="form-control" name="tipoId" required>
                                            <option value="">Seleccione</option>
                                            <option <?php if ($this->hoja->tipoId == 'cc') echo 'selected'; ?> value="cc">Cédula de ciudadanía</option>
                                            <option <?php if ($this->hoja->tipoId == 'ce') echo 'selected'; ?> value="ce">Cédula de extranjería</option>
                                            <option <?php if ($this->hoja->tipoId == 'ti') echo 'selected'; ?> value="ti">Tarjeta de identidad</option>
                                            <option <?php if ($this->hoja->tipoId == 'p') echo 'selected'; ?>value="p">Pasaporte</option>
                                            <option <?php if ($this->hoja->tipoId == 'ni') echo 'selected'; ?> value="ni">Número de identificación</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="inputNIdentificacion">Número de identificación<strong style="color:red">*</strong></label>
                                        <input type="number" name="numeroId" value="<?php echo $this->hoja->numero; ?>" class="form-control" id="inputNIdentificacion" pattern="[0-9. ]{5,15}" required title="Solo se aceptan numeros">
                                    </div>
                                </div>
                                <div class="form-group col-md-4 align-self-center">
                                    <div class="form-group col-md-12 text-center">
                                        <img class="rounded-circle" src="<?php echo constant('URL') . $this->hoja->foto; ?>" alt="" width="70%">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Fecha de nacimiento<strong style="color:red">*</strong></label>
                                    <input type="date" value="<?php echo $this->hoja->fecha; ?>" name="fechaNacimiento" class="form-control" min="1920-01-01">
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputGenero">Genero<strong style="color:red">*</strong></label>
                                    <select id="inputGenero" class="form-control" name="genero" aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->hoja->genero == 'Hombre') echo 'selected'; ?> value="Hombre">Hombre</option>
                                        <option <?php if ($this->hoja->genero == 'Mujer') echo 'selected'; ?> value="Mujer">Mujer</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="inputEstadoCivil">Estado civil<strong style="color:red">*</strong></label>
                                    <select id="inputEstadoCivil" class="form-control" name="estadoCivil" aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->hoja->estado == 'Soltero(a)') echo 'selected'; ?> value="Soltero(a)">Soltero(a)</option>
                                        <option <?php if ($this->hoja->estado == 'Casado(a)') echo 'selected'; ?> value="Casado(a)">Casado(a)</option>
                                        <option <?php if ($this->hoja->estado == 'Separado(a)/Divorciado(a)') echo 'selected'; ?> value="Separado(a)/Divorciado(a)">Separado(a)/Divorciado(a)</option>
                                        <option <?php if ($this->hoja->estado == 'Viudo(a)') echo 'selected'; ?> value="Viudo(a)">Viudo(a)</option>
                                        <option <?php if ($this->hoja->estado == 'Unión libre') echo 'selected'; ?> value="Unión libre">Unión libre</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Teléfono<strong style="color:red">*</strong></label>
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <select id="tipo-telefono" class="form-control" name="tipoTel" aria-required="true" aria-invalid="false" required>
                                                <option value="">Seleccione</option>
                                                <option <?php if ($this->hoja->tipoTel == 'Celular') echo 'selected'; ?> value="Celular">Celular</option>
                                                <option <?php if ($this->hoja->tipoTel == 'Fijo') echo 'selected'; ?> value="Fijo">Fijo</option>
                                                <option <?php if ($this->hoja->tipoTel == 'Oficina') echo 'selected'; ?> value="Oficina">Oficina</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="number" value="<?php echo $this->hoja->telefono; ?>" name="telefono" class="form-control" id="inputTelefono" pattern="[a-zA-Záéíóúüñ0-9_-,.\$%# ]{3,15}" required title="Solo se aceptan numeros">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputDepartamento">Departamento<strong style="color:red">*</strong></label>
                                    <select id="inputDepartamento" class="form-control" name="departamento" aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->hoja->departamento == 'Bogota') echo 'selected'; ?> value="Bogota">Bogotá, D.C.</option>
                                        <option <?php if ($this->hoja->departamento == 'Antioquia') echo 'selected'; ?> value="Antioquia">Antioquia</option>
                                        <option <?php if ($this->hoja->departamento == 'Amazonas') echo 'selected'; ?> value="Amazonas">Amazonas</option>
                                        <option <?php if ($this->hoja->departamento == 'Arauca') echo 'selected'; ?> value="Arauca">Arauca</option>
                                        <option <?php if ($this->hoja->departamento == 'SanAndres') echo 'selected'; ?> value="SanAndres">Archipiélago de San Andrés, Providencia y Santa Catalina</option>
                                        <option <?php if ($this->hoja->departamento == 'Atlantico') echo 'selected'; ?> value="Atlantico">Atlántico</option>
                                        <option <?php if ($this->hoja->departamento == 'Bolivar') echo 'selected'; ?> value="Bolivar">Bolívar</option>
                                        <option <?php if ($this->hoja->departamento == 'Boyaca') echo 'selected'; ?> value="Boyaca">Boyacá</option>
                                        <option <?php if ($this->hoja->departamento == 'Caldas') echo 'selected'; ?> value="Caldas">Caldas</option>
                                        <option <?php if ($this->hoja->departamento == 'Caqueta') echo 'selected'; ?> value="Caqueta">Caquetá</option>
                                        <option <?php if ($this->hoja->departamento == 'Casanare') echo 'selected'; ?> value="Casanare">Casanare</option>
                                        <option <?php if ($this->hoja->departamento == 'Cauca') echo 'selected'; ?> value="Cauca">Cauca</option>
                                        <option <?php if ($this->hoja->departamento == 'Cesar') echo 'selected'; ?> value="Cesar">Cesar</option>
                                        <option <?php if ($this->hoja->departamento == 'Choco') echo 'selected'; ?> value="Choco">Chocó</option>
                                        <option <?php if ($this->hoja->departamento == 'Cordoba') echo 'selected'; ?> value="Cordoba">Córdoba</option>
                                        <option <?php if ($this->hoja->departamento == 'Cundinamarca') echo 'selected'; ?> value="Cundinamarca">Cundinamarca</option>
                                        <option <?php if ($this->hoja->departamento == 'Guainia') echo 'selected'; ?> value="Guainia">Guainía</option>
                                        <option <?php if ($this->hoja->departamento == 'Guaviare') echo 'selected'; ?> value="Guaviare">Guaviare</option>
                                        <option <?php if ($this->hoja->departamento == 'Huila') echo 'selected'; ?> value="Huila">Huila</option>
                                        <option <?php if ($this->hoja->departamento == 'LaGuajira') echo 'selected'; ?> value="LaGuajira">La Guajira</option>
                                        <option <?php if ($this->hoja->departamento == 'Magdalena') echo 'selected'; ?> value="Magdalena">Magdalena</option>
                                        <option <?php if ($this->hoja->departamento == 'Meta') echo 'selected'; ?> value="Meta">Meta</option>
                                        <option <?php if ($this->hoja->departamento == 'Narino') echo 'selected'; ?> value="Narino">Nariño</option>
                                        <option <?php if ($this->hoja->departamento == 'NorteSantander') echo 'selected'; ?> value="NorteSantander">Norte de Santander</option>
                                        <option <?php if ($this->hoja->departamento == 'Putumayo') echo 'selected'; ?> value="Putumayo">Putumayo</option>
                                        <option <?php if ($this->hoja->departamento == 'Quindio') echo 'selected'; ?> value="Quindio">Quindio</option>
                                        <option <?php if ($this->hoja->departamento == 'Risaralda') echo 'selected'; ?> value="Risaralda">Risaralda</option>
                                        <option <?php if ($this->hoja->departamento == 'Santander') echo 'selected'; ?> value="Santander">Santander</option>
                                        <option <?php if ($this->hoja->departamento == 'Sucre') echo 'selected'; ?> value="Sucre">Sucre</option>
                                        <option <?php if ($this->hoja->departamento == 'Tolima') echo 'selected'; ?> value="Tolima">Tolima</option>
                                        <option <?php if ($this->hoja->departamento == 'ValleCauca') echo 'selected'; ?> value="ValleCauca">Valle del Cauca</option>
                                        <option <?php if ($this->hoja->departamento == 'Vaupes') echo 'selected'; ?> value="Vaupes">Vaupés</option>
                                        <option <?php if ($this->hoja->departamento == 'Vichada') echo 'selected'; ?> value="Vichada">Vichada</option>
                                        <option <?php if ($this->hoja->departamento == 'Extranjero') echo 'selected'; ?> value="Extranjero">Extranjero</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputDireccion">Dirección<strong style="color:red">*</strong></label>
                                    <input type="text" value="<?php echo $this->hoja->direccion; ?>" name="direccion" class="form-control" id="inputDireccion" pattern="[a-zA-Záéíóúüñ0-9.#-° ]{3,100}" required title="Se aceptan letras, numeros y caracteres especiales (.#-°).">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputNacionalidad">Nacionalidad<strong style="color:red">*</strong></label>
                                    <input type="text" value="<?php echo $this->hoja->nacionalidad; ?>" name="nacionalidad" class="form-control" id="inputNacionalidad" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-8 ">
                                    <label for="inputApellidos">Subir hoja de vida</label>
                                    <input type="file" name="docHoja" class="form-control-file" accept=".pdf,.doc,.docx">
                                </div>
                                <div class="form-group text-center col-md-4 ">
                                    <a href="<?php echo $this->hoja->urlHoja; ?>" class="btn btn-primary" role="button" aria-pressed="true">Descargar HV</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title text-center">Perfil profesional</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputTitulo">Cargo o titulo breve de su hoja de vida <strong style="color:red">*</strong></label>
                                    <input type="text" value="<?php echo $this->hoja->titulo; ?>" name="titulo" class="form-control" id="inputTitulo" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputPerfil">Descripción breve de su perfil profesional <strong style="color:red">*</strong></label>
                                    <textarea name="perfil" id="inputPerfil" class="form-control" rows="6" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,500}" required title="Solo se aceptan letras y numeros"><?php echo $this->hoja->perfil; ?></textarea>
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
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>