<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fenditrabajo.css">
    <title>Hoja de vida - Fendipetroleo Nacional</title>
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
.check {
    margin-left: 20px;

}
</style>

<script type="text/javascript">
function confirmar() {
    var respuesta = confirm("¿Está seguro de que desea eliminar?")
    if (respuesta === true) {
        return true;
    } else {
        return false;
    }
}
</script>

<body>
    <?php require "views/header/header-usuario.php"; ?>
    <div class="container pd">
        <h1 class="text-center">HOJA DE VIDA</h1>
        <div class="row">
            <div class="col-md-8">
                <form action="<?php echo constant('URL') . 'hojaVidaUsuario/agregarHojaVida/' . $this->hoja->id; ?>"
                    method="POST" d="f1" name="f1" enctype="multipart/form-data">
                    <div class="card" style="width: 100%;">
                        <div class="card-header bg-blue">
                            <h4 class="card-title text-center">Datos personales</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-row col-md-8">
                                    <div class="form-group col-md-12">
                                        <strong> ¿Soy ciudadano Colombiano mayor de edad?</strong>
                                        <input class="form-check-input check" type="checkbox" name="politicas"
                                            id="politicas" value="1" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputNombre">Nombres<strong style="color:red">*</strong></label>
                                        <input type="text" value="<?php echo $this->hoja->nombre; ?>" name="nombre"
                                            class="form-control" id="inputNombre"
                                            pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required
                                            title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputApellidos">Apellidos<strong
                                                style="color:red">*</strong></label>
                                        <input type="text" value="<?php echo $this->hoja->apellido; ?>" name="apellido"
                                            class="form-control" id="inputApellidos"
                                            pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}" required
                                            title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputIdentificacion">Tipo<strong
                                                style="color:red">*</strong></label>
                                        <select id="inputIdentificacion" class="form-control" name="tipoId" required>
                                            <option value="">Seleccione</option>
                                            <option <?php if ($this->hoja->tipoId == 'cc') echo 'selected'; ?>
                                                value="cc">Cédula de ciudadanía</option>
                                            <option <?php if ($this->hoja->tipoId == 'ce') echo 'selected'; ?>
                                                value="ce">Cédula de extranjería</option>
                                            <option <?php if ($this->hoja->tipoId == 'ti') echo 'selected'; ?>
                                                value="ti">Tarjeta de identidad</option>
                                            <option <?php if ($this->hoja->tipoId == 'p') echo 'selected'; ?>value="p">
                                                Pasaporte</option>
                                            <option <?php if ($this->hoja->tipoId == 'ni') echo 'selected'; ?>
                                                value="ni">Número de identificación</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-8">
                                        <label for="inputNIdentificacion">Número de identificación<strong
                                                style="color:red">*</strong></label>
                                        <input type="number" name="numeroId" value="<?php echo $this->hoja->numero; ?>"
                                            class="form-control" id="inputNIdentificacion" pattern="[0-9. ]{5,15}"
                                            required title="Solo se aceptan numeros">
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <div class="form-group col-md-12 text-center">
                                        <img class="rounded-circle"
                                            src="<?php echo constant('URL') . $this->hoja->foto; ?>" alt="" width="90%">
                                    </div>
                                    <div class="form-group col-md-12 ">
                                        <label for="fotoPerfil">Foto de perfil</label>
                                        <input type="file" name="file" class="form-control-file" id="selectLogo">
                                    </div>
                                </div>

                                <div class="form-group col-md-12">
                                    <label for="">Fecha de nacimiento<strong style="color:red">*</strong></label>
                                    <input type="date" value="<?php echo $this->hoja->fecha; ?>" name="fechaNacimiento"
                                        class="form-control" min="1920-01-01">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputDepartamentoNacimiento">Departamento de nacimiento<strong
                                            style="color:red">*</strong></label>
                                    <select id="departamentos" class=" dptos form-control" name="departamentoNacimiento"
                                        aria-required="true" onchange="cambia_departamento()" required>
                                        <option value="">
                                            <?php 
                                        if(isset($this->hoja->departamentoNacimiento)){
                                             echo $this->hoja->departamentoNacimiento;
                                        } else {
                                            echo "seleccione";
                                        }
                                        ?></option>
                                        <option value="AMAZONAS">AMAZONAS</option>
                                        <option value="ANTIOQUIA">ANTIOQUIA</option>
                                        <option value="ARAUCA">ARAUCA</option>
                                        <option value="ATLÁNTICO">ATLÁNTICO</option>
                                        <option value="BOLÍVAR">BOLÍVAR</option>
                                        <option value="BOYACA">BOYACÁ</option>
                                        <option value="CALDAS">CALDAS</option>
                                        <option value="CAQUETÁ">CAQUETÁ</option>
                                        <option value="CASANARE">CASANARE</option>
                                        <option value="CAUCA">CAUCA</option>
                                        <option value="CESAR">CESAR</option>
                                        <option value="CHOCÓ">CHOCÓ</option>
                                        <option value="CÓRDOBA">CÓRDOBA</option>
                                        <option value="CUNDINAMARCA">CUNDINAMARCA</option>
                                        <option value="GUAINÍA">GUAINÍA</option>
                                        <option value="GUAVIARE">GUAVIARE</option>
                                        <option value="HUILA">HUILA</option>
                                        <option value="LA GUAJIRA">LA GUAJIRA</option>
                                        <option value="MAGDALENA">MAGDALENA</option>
                                        <option value="META">META</option>
                                        <option value="NARIÑO">NARIÑO</option>
                                        <option value="NORTE DE SANTANDER">NORTE DE SANTANDER</option>
                                        <option value="PUTUMAYO">PUTUMAYO</option>
                                        <option value="QUINDÍO">QUINDÍO</option>
                                        <option value="RISARALDA">RISARALDA</option>
                                        <option value="SAN ANDRÉS Y PROVIDENCIA">SAN ANDRÉS Y PROVIDENCIA</option>
                                        <option value="SANTANDER">SANTANDER</option>
                                        <option value="SUCRE">SUCRE</option>
                                        <option value="TOLIMA">TOLIMA</option>
                                        <option value="VALLE DEL CAUCA">VALLE DEL CAUCA</option>
                                        <option value="VAUPÉS">VAUPÉS</option>
                                        <option value="VICHADA">VICHADA</option>
                                        <option value="DISTRITO ESPECIAL">DISTRITO ESPECIAL</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCiudadNacimiento">Ciudad de nacimiento<strong
                                            style="color:red">*</strong></label>
                                    <select id="minucipios" class=" muni form-control" name="ciudadNacimiento"
                                        aria-required="true" aria-invalid="false" required>
                                        <option value="">
                                            <?php echo $this->hoja->ciudadNacimiento; ?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputPaisNacimiento">país de nacimiento<strong
                                            style="color:red">*</strong></label>
                                    <select class="form-control" name="paisNacimiento" id="paises" required>
                                        <option value="">
                                            <?php echo $this->hoja->paisNacimiento; ?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6">
                                    <label for="inputGenero">Género<strong style="color:red">*</strong></label>
                                    <select id="inputGenero" class="form-control" name="genero" aria-required="true"
                                        aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->hoja->genero == 'Hombre') echo 'selected'; ?>
                                            value="Hombre">Hombre</option>
                                        <option <?php if ($this->hoja->genero == 'Mujer') echo 'selected'; ?>
                                            value="Mujer">Mujer</option>
                                        <option <?php if ($this->hoja->genero == 'Mujer') echo 'selected'; ?>
                                            value="Mujer">Otro</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-6 ">
                                    <label for="inputEstadoCivil">Estado civil<strong
                                            style="color:red">*</strong></label>
                                    <select id="inputEstadoCivil" class="form-control" name="estadoCivil"
                                        aria-required="true" aria-invalid="false" required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->hoja->estado == 'Soltero(a)') echo 'selected'; ?>
                                            value="Soltero(a)">Soltero(a)</option>
                                        <option <?php if ($this->hoja->estado == 'Casado(a)') echo 'selected'; ?>
                                            value="Casado(a)">Casado(a)</option>
                                        <option
                                            <?php if ($this->hoja->estado == 'Separado(a)/Divorciado(a)') echo 'selected'; ?>
                                            value="Separado(a)/Divorciado(a)">Separado(a)/Divorciado(a)</option>
                                        <option <?php if ($this->hoja->estado == 'Viudo(a)') echo 'selected'; ?>
                                            value="Viudo(a)">Viudo(a)</option>
                                        <option <?php if ($this->hoja->estado == 'Unión libre') echo 'selected'; ?>
                                            value="Unión libre">Unión libre</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="">Teléfono<strong style="color:red">*</strong></label>
                                    <div class="form-row">
                                        <div class="form-group col-md-5">
                                            <select id="tipo-telefono" class="form-control" name="tipoTel"
                                                aria-required="true" aria-invalid="false" required>
                                                <option value="">Seleccione</option>
                                                <option <?php if ($this->hoja->tipoTel == 'Celular') echo 'selected'; ?>
                                                    value="Celular">Celular</option>
                                                <option <?php if ($this->hoja->tipoTel == 'Fijo') echo 'selected'; ?>
                                                    value="Fijo">Fijo</option>
                                                <option <?php if ($this->hoja->tipoTel == 'Oficina') echo 'selected'; ?>
                                                    value="Oficina">Oficina</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-7">
                                            <input type="number" value="<?php echo $this->hoja->telefono; ?>"
                                                name="telefono" class="form-control" id="inputTelefono"
                                                pattern="[0-9.-# ]{3,15}" required title="Solo se aceptan numeros">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputDepartamento">Departamento Residencia<strong
                                            style="color:red">*</strong></label>
                                    <select id="inputDepartamento" class=" dptores form-control" name="departamento"
                                        aria-required="true" aria-invalid="false" onchange="cambia_departamentores()"
                                        required>
                                        <option value="">
                                            <?php 
                                        if(isset($this->hoja->departamento)){
                                            echo $this->hoja->departamento;
                                         
                                        } else {
                                            echo'seleccione';
                                           
                                        }
                                        ?></option>
                                        <option value="AMAZONAS">AMAZONAS</option>
                                        <option value="ANTIOQUIA">ANTIOQUIA</option>
                                        <option value="ARAUCA">ARAUCA</option>
                                        <option value="ATLÁNTICO">ATLÁNTICO</option>
                                        <option value="BOLÍVAR">BOLÍVAR</option>
                                        <option value="BOYACA">BOYACÁ</option>
                                        <option value="CALDAS">CALDAS</option>
                                        <option value="CAQUETÁ">CAQUETÁ</option>
                                        <option value="CASANARE">CASANARE</option>
                                        <option value="CAUCA">CAUCA</option>
                                        <option value="CESAR">CESAR</option>
                                        <option value="CHOCÓ">CHOCÓ</option>
                                        <option value="CÓRDOBA">CÓRDOBA</option>
                                        <option value="CUNDINAMARCA">CUNDINAMARCA</option>
                                        <option value="GUAINÍA">GUAINÍA</option>
                                        <option value="GUAVIARE">GUAVIARE</option>
                                        <option value="HUILA">HUILA</option>
                                        <option value="LA GUAJIRA">LA GUAJIRA</option>
                                        <option value="MAGDALENA">MAGDALENA</option>
                                        <option value="META">META</option>
                                        <option value="NARIÑO">NARIÑO</option>
                                        <option value="NORTE DE SANTANDER">NORTE DE SANTANDER</option>
                                        <option value="PUTUMAYO">PUTUMAYO</option>
                                        <option value="QUINDÍO">QUINDÍO</option>
                                        <option value="RISARALDA">RISARALDA</option>
                                        <option value="SAN ANDRÉS Y PROVIDENCIA">SAN ANDRÉS Y PROVIDENCIA</option>
                                        <option value="SANTANDER">SANTANDER</option>
                                        <option value="SUCRE">SUCRE</option>
                                        <option value="TOLIMA">TOLIMA</option>
                                        <option value="VALLE DEL CAUCA">VALLE DEL CAUCA</option>
                                        <option value="VAUPÉS">VAUPÉS</option>
                                        <option value="VICHADA">VICHADA</option>
                                        <option value="DISTRITO ESPECIAL">DISTRITO ESPECIAL</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCiudad">Ciudad Residencia<strong
                                            style="color:red">*</strong></label>
                                    <select id="inputCiudad" class="form-control" name="ciudad" aria-required="true"
                                        aria-invalid="false" required>
                                        <option value="<?php echo $this->hoja->ciudad; ?>">
                                            <?php echo $this->hoja->ciudad; ?></option>

                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputDireccion">Dirección<strong style="color:red">*</strong></label>
                                    <input type="text" value="<?php echo $this->hoja->direccion; ?>" name="direccion"
                                        class="form-control" id="inputDireccion" pattern="[a-zA-Záéíóúüñ0-9.#-° ]{3,50}"
                                        required title="Se aceptan letras, numeros y caracteres especiales (.#-°).">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputNacionalidad">Nacionalidad<strong
                                            style="color:red">*</strong></label>
                                    <select class="form-control" name="nacionalidad" id="nacionalidad" required>
                                        <option value="<?php echo $this->hoja->nacionalidad; ?>">
                                            <?php echo $this->hoja->nacionalidad; ?></option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputOcupacion">Profesión u Oficio<strong
                                            style="color:red">*</strong></label>
                                    <input type="text" value="<?php echo $this->hoja->ocupacion; ?>" name="ocupacion"
                                        class="form-control" id="inputOcupacion"
                                        pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,20}" required
                                        title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputTipoPoblacion">Tipo de Población<strong
                                            style="color:red">*</strong></label>
                                    <select id="inputTipoPoblacion" class="form-control" name="tipoPoblacion" required>
                                        <option value="">Seleccione</option>
                                        <option
                                            <?php if ($this->hoja->tipoPoblacion == 'Minoría étnica') echo 'selected'; ?>
                                            value="Minoría étnica">
                                            Minoría étnica</option>
                                        <option
                                            <?php if ($this->hoja->tipoPoblacion == 'Discapacidad física') echo 'selected'; ?>
                                            value="Discapacidad física">
                                            Discapacidad física</option>
                                        <option
                                            <?php if ($this->hoja->tipoPoblacion == 'Discapacidad cognitiva') echo 'selected'; ?>
                                            value="Discapacidad cognitiva">
                                            Discapacidad cognitiva</option>
                                        <option
                                            <?php if ($this->hoja->tipoPoblacion == 'Madres cabeza de familia') echo 'selected'; ?>value="Madres cabeza de familia">
                                            Madres cabeza de familia</option>
                                        <option
                                            <?php if ($this->hoja->tipoPoblacion == 'En situación de desplazamiento forzoso') echo 'selected'; ?>
                                            value="En situación de desplazamiento forzoso">
                                            En situación de desplazamiento forzoso</option>
                                        <option
                                            <?php if ($this->hoja->tipoPoblacion == 'Discapacidad sensorial') echo 'selected'; ?>
                                            value="Discapacidad sensorial">
                                            Discapacidad sensorial</option>
                                        <option
                                            <?php if ($this->hoja->tipoPoblacion == 'Miembro de la comunidad LGBTIQ+') echo 'selected'; ?>
                                            value="Miembro de la comunidad LGBTIQ+">
                                            Miembro de la comunidad LGBTIQ+</option>
                                        <option
                                            <?php if ($this->hoja->tipoPoblacion == 'Ninguna de las anteriores') echo 'selected'; ?>
                                            value="Ninguna de las anteriores">
                                            Ninguna de las anteriores</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputCambioResidencia">Cambio de residencia<strong
                                            style="color:red">*</strong></label>
                                    <select id="inputCambioResidencia" class="form-control" name="cambioResidencia"
                                        required>
                                        <option value="">Seleccione</option>
                                        <option <?php if ($this->hoja->cambioResidencia == 'Sí') echo 'selected'; ?>
                                            value="Sí">
                                            Sí</option>
                                        <option <?php if ($this->hoja->cambioResidencia == 'No') echo 'selected'; ?>
                                            value="No">
                                            No</option>
                                    </select>
                                </div>
                                <div class="form-group col-md-4">
                                    <label for="inputAspiracionSal">Aspiración salarial<strong
                                            style="color:red">*</strong></label>
                                    <select id="inputAspiracionSal" class="form-control" name="aspiracionSal" required>
                                        <option value="">Seleccione</option>
                                        <option
                                            <?php if ($this->hoja->aspiracionSal == 'De 1 a 2 SMMLV') echo 'selected'; ?>
                                            value="De 1 a 2 SMMLV">
                                            De 1 a 2 SMMLV</option>
                                        <option
                                            <?php if ($this->hoja->aspiracionSal == 'cDe 2 a 4 SMMLV') echo 'selected'; ?>
                                            value="De 2 a 4 SMMLV">
                                            De 2 a 4 SMMLV</option>
                                        <option
                                            <?php if ($this->hoja->aspiracionSal == 'De 4 o más SMMLV') echo 'selected'; ?>
                                            value="De 4 o más SMMLV">
                                            De 4 o más SMMLV</option>
                                    </select>
                                </div>

                                <div class="form-group col-md-4">
                                    <label for="inputTiempoExperiencia">Tiempo de Experiencia<strong
                                            style="color:red">*</strong></label>
                                    <select id="inputTiempoExperiencia" class="form-control" name="tiempoExperiencia"
                                        required>
                                        <option value="">Seleccione</option>
                                        <option
                                            <?php if ($this->hoja->tiempoExperiencia == 'De 0 a 6 meses') echo 'selected'; ?>
                                            value="De 0 a 6 meses">
                                            De 0 a 6 meses</option>
                                        <option
                                            <?php if ($this->hoja->tiempoExperiencia == 'De 6 a 12 meses') echo 'selected'; ?>
                                            value="De 6 a 12 meses">
                                            De 6 a 12 meses</option>
                                        <option
                                            <?php if ($this->hoja->tiempoExperiencia == 'De 1 año a 2 años') echo 'selected'; ?>
                                            value="De 1 año a 2 años">
                                            De 1 año a 2 años</option>
                                        <option
                                            <?php if ($this->hoja->tiempoExperiencia == 'De 2 año a 3 años') echo 'selected'; ?>
                                            value="De 2 año a 3 años">
                                            De 2 año a 3 años</option>
                                        <option
                                            <?php if ($this->hoja->tiempoExperiencia == 'De 3 año a 4 años') echo 'selected'; ?>
                                            value="De 3 año a 4 años">
                                            De 3 año a 4 años</option>
                                        <option
                                            <?php if ($this->hoja->tiempoExperiencia == 'De 4 año a 5 años') echo 'selected'; ?>
                                            value="De 4 año a 5 años">
                                            De 4 año a 5 años</option>
                                        <option
                                            <?php if ($this->hoja->tiempoExperiencia == 'De 5 año a 10 años') echo 'selected'; ?>
                                            value="De 5 año a 10 años">
                                            De 5 año a 10 años</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header bg-blue">
                            <h4 class="card-title text-center">Perfil profesional</h4>
                        </div>
                        <div class="card-body">
                            <div class="form-row">
                                <div class="form-group col-md-12">
                                    <label for="inputTitulo">Cargo o título breve de su hoja de vida <strong
                                            style="color:red">*</strong></label>
                                    <input type="text" value="<?php echo $this->hoja->titulo; ?>" name="titulo"
                                        class="form-control" id="inputTitulo" pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,50}"
                                        required title="Solo se aceptan letras">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="inputPerfil">Descripción breve de su perfil profesional <strong
                                            style="color:red">*</strong></label>
                                    <textarea name="perfil" id="inputPerfil" class="form-control" rows="6"
                                        pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{3,500}" required
                                        title="Solo se aceptan letras y numeros"><?php echo $this->hoja->perfil; ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="text-center pd">
                        <button type="submit" class="btn btn-primary">Guardar cambios</button>
                    </div>
                </form>
                <div class="card">
                    <div class="card-header bg-blue">
                        <h4 class="card-title text-center">Experiencias profesionales</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a style="cursor: pointer;" onClick="muestra_oculta('contenido');">
                                <ion-icon name="add-circle-outline" style="font-size: 17px"></ion-icon> Añadir
                            </a>

                        </div>
                        <div id="contenido">
                            <form action="<?php echo constant('URL'); ?>hojaVidaUsuario/agregarExperiencia" d="f2"
                                name="f2" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Nombre de la Empresa <strong style="color:red">*</strong></label>
                                        <input type="text" name="empresa" class="form-control"
                                            pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,50}" required
                                            title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Perfil <strong style="color:red">*</strong></label>
                                        <input type="text" name="experfil" class="form-control"
                                            pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,50}" required
                                            title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Ocupacíon <strong style="color:red">*</strong></label>
                                        <input type="text" name="exocupacion" class="form-control"
                                            pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,50}" required
                                            title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputDepartamento">Departamento<strong
                                                style="color:red">*</strong></label>
                                        <select id="inputDepartamento" class="dptoexp form-control" name="departamento"
                                            aria-required="true" aria-invalid="false"
                                            onchange="cambia_departamentoExp()" required>
                                            <option value="">Selecione</option>
                                            <option value="AMAZONAS">AMAZONAS</option>
                                            <option value="ANTIOQUIA">ANTIOQUIA</option>
                                            <option value="ARAUCA">ARAUCA</option>
                                            <option value="ATLÁNTICO">ATLÁNTICO</option>
                                            <option value="BOLÍVAR">BOLÍVAR</option>
                                            <option value="BOYACA">BOYACÁ</option>
                                            <option value="CALDAS">CALDAS</option>
                                            <option value="CAQUETÁ">CAQUETÁ</option>
                                            <option value="CASANARE">CASANARE</option>
                                            <option value="CAUCA">CAUCA</option>
                                            <option value="CESAR">CESAR</option>
                                            <option value="CHOCÓ">CHOCÓ</option>
                                            <option value="CÓRDOBA">CÓRDOBA</option>
                                            <option value="CUNDINAMARCA">CUNDINAMARCA</option>
                                            <option value="GUAINÍA">GUAINÍA</option>
                                            <option value="GUAVIARE">GUAVIARE</option>
                                            <option value="HUILA">HUILA</option>
                                            <option value="LA GUAJIRA">LA GUAJIRA</option>
                                            <option value="MAGDALENA">MAGDALENA</option>
                                            <option value="META">META</option>
                                            <option value="NARIÑO">NARIÑO</option>
                                            <option value="NORTE DE SANTANDER">NORTE DE SANTANDER</option>
                                            <option value="PUTUMAYO">PUTUMAYO</option>
                                            <option value="QUINDÍO">QUINDÍO</option>
                                            <option value="RISARALDA">RISARALDA</option>
                                            <option value="SAN ANDRÉS Y PROVIDENCIA">SAN ANDRÉS Y PROVIDENCIA</option>
                                            <option value="SANTANDER">SANTANDER</option>
                                            <option value="SUCRE">SUCRE</option>
                                            <option value="TOLIMA">TOLIMA</option>
                                            <option value="VALLE DEL CAUCA">VALLE DEL CAUCA</option>
                                            <option value="VAUPÉS">VAUPÉS</option>
                                            <option value="VICHADA">VICHADA</option>
                                            <option value="DISTRITO ESPECIAL">DISTRITO ESPECIAL</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="inputExmunicipio">Municipio<strong
                                                style="color:red">*</strong></label>
                                        <select id="inputExmunicipio" class="form-control" name="exmunicipio"
                                            aria-required="true" aria-invalid="false" required>
                                            <option value="">Seleccione</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label>País <strong style="color:red">*</strong></label>
                                        <select class="form-control" name="exPais" id="exPais" required>
                                            <option value="">Seleccione</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputSectorEmpresa">Sector de la Empresa<strong
                                                style="color:red">*</strong></label>
                                        <select id="inputSectorEmpresa" class="form-control" name="sector"
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
                                    <div class="form-group col-md-6">
                                        <label for="inputCargo">Cargo<strong style="color:red">*</strong></label>
                                        <input type="text" name="cargo" class="form-control"
                                            pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,50}" required
                                            title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="inputArea">Área<strong style="color: red">*</strong></label>
                                        <select id="inputArea" class="form-control" name="area" aria-required="true"
                                            aria-invalid="false" required>
                                            <option value="">Categorías</option>
                                            <option value="1">Administración / Oficina</option>
                                            <option value="2">Almacén / Logística / Transporte</option>
                                            <option value="3">Atención a clientes</option>
                                            <option value="4">CallCenter / Telemercadeo</option>
                                            <option value="5">Compras / Comercio Exterior</option>
                                            <option value="6">Construcción y obra</option>
                                            <option value="7">Contabilidad / Finanzas</option>
                                            <option value="8">Dirección / Gerencia</option>
                                            <option value="9">Diseño / Artes gráficas</option>
                                            <option value="10">Docencia</option>
                                            <option value="11">Hostelería / Turismo</option>
                                            <option value="12">Informática / Telecomunicaciones</option>
                                            <option value="13">Ingeniería</option>
                                            <option value="14">Investigación y Calidad</option>
                                            <option value="15">Legal / Asesoría</option>
                                            <option value="16">Mantenimiento y Reparaciones Técnicas</option>
                                            <option value="17">Medicina / Salud</option>
                                            <option value="18">Mercadotecnia / Publicidad / Comunicación</option>
                                            <option value="19">Producción / Operarios / Manufactura</option>
                                            <option value="20">Recursos Humanos</option>
                                            <option value="21">Servicios Generales, Aseo y Seguridad </option>
                                            <option value="22">Ventas</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label>Total experiencia en meses <strong style="color:red">*</strong></label>
                                        <input type="number" name="extotalexpe" class="form-control" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <div class="custom-control custom-switch">
                                            <input type="checkbox" class="custom-control-input" id="customSwitch1">
                                            <label class="custom-control-label" for="customSwitch1">Empleo Actual
                                            </label>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-8">

                                        <div class="row">
                                            <div class="col-md-5">
                                                <label for="inputPeriodo">Fecha de inicio<strong
                                                        style="color: red">*</strong></label>
                                                <input type="date" name="fechaInicio" class="form-control"
                                                    min="1920-01-01">
                                            </div>
                                            <div class="col-md-2">
                                                <h2 class="text-center">-</h2>
                                            </div>
                                            <div class="col-md-5">
                                                <label for="inputPeriodo">Fecha fin<strong
                                                        style="color: red">*</strong></label>
                                                <input type="date" name="fechaFin" class="form-control"
                                                    min="1920-01-01">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Añadir</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <?php
                        include_once 'models/entity/oferta.php';
                        foreach ($this->experiencias as $row) {
                            $experiencia = new Experiencia();
                            $experiencia = $row;
                        ?>

                        <div class="card mt text-center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4><?php echo $experiencia->cargo; ?></h4>
                                        <h6><?php echo $experiencia->empresa; ?></h6>
                                        <h6><?php echo $experiencia->fechaInicio; ?><strong> |
                                            </strong><?php echo $experiencia->fechaFin; ?></h6>
                                    </div>
                                    <div class="col-md-2 align-self-center">
                                        <a href=<?php echo constant('URL') . 'editarExperiencia/detalles/' . $experiencia->id; ?>
                                            class="btn btn-primary">EDITAR</a>
                                    </div>
                                    <div class="col-md-3 align-self-center">
                                        <a href=<?php echo constant('URL') . 'hojaVidaUsuario/eliminar/' . $experiencia->id; ?>
                                            class="btn btn-danger" onclick="return confirmar()">ELIMINAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header bg-blue">
                        <h4 class="card-title text-center">Formación</h4>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <a style="cursor: pointer;" onClick="muestra_oculta('contenido1');">
                                <ion-icon name="add-circle-outline" style="font-size: 17px"></ion-icon> Añadir
                            </a>

                        </div>
                        <div id="contenido1">
                            <form action="<?php echo constant('URL'); ?>hojaVidaUsuario/agregarFormacion" method="POST">
                                <div class="form-row">
                                    <div class="form-group col-md-12">
                                        <label>Profesión <strong style="color:red">*</strong></label>
                                        <input type="text" name="profesion" class="form-control"
                                            pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,100}" required
                                            title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputNivelEstudios">Nivel de estudios<strong
                                                style="color:red">*</strong></label>
                                        <select id="inputNivelEstudios" class="form-control" name="nivel"
                                            aria-required="true" aria-invalid="false" required>
                                            <option value="">Nivel de estudios</option>
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
                                    <div class="form-group col-md-12">
                                        <label>Centro educativo <strong style="color:red">*</strong></label>
                                        <input type="text" name="centro" class="form-control"
                                            pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,100}" required
                                            title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>País <strong style="color:red">*</strong></label>
                                        <input type="text" name="formacionPais" class="form-control"
                                            pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,100}" required
                                            title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label>Título otorgado <strong style="color:red">*</strong></label>
                                        <input type="text" name="tituloF" class="form-control"
                                            pattern="[a-zA-Záéíóúüñ0-9_-,.\$% ]{5,100}" required
                                            title="Solo se aceptan letras">
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputEstado">Estado<strong style="color:red">*</strong></label>
                                        <select id="inputEstado" class="form-control" name="estado" aria-required="true"
                                            aria-invalid="false" required>
                                            <option value="">Seleccione</option>
                                            <option value="Culminado">Culminado</option>
                                            <option value="Cursando">Cursando</option>
                                            <option value="Abandonado/aplazado">Abandonado/aplazado</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="inputPeriodo">Período<strong style="color: red">*</strong></label>
                                        <div class="row">
                                            <div class="col-md-5">
                                                <input type="date" name="fechaInicio" class="form-control"
                                                    min="1920-01-01">
                                            </div>
                                            <div class="col-md-2">
                                                <h2 class="text-center">-</h2>
                                            </div>
                                            <div class="col-md-5">
                                                <input type="date" name="fechaFin" class="form-control"
                                                    min="1920-01-01">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group col-md-12 text-center">
                                        <button type="submit" class="btn btn-primary">Añadir</button>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <?php
                        include_once 'models/entity/oferta.php';
                        foreach ($this->formaciones as $row) {
                            $formacion = new Formacion();
                            $formacion = $row;
                        ?>
                        <div class="card mt text-center">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-7">
                                        <h4><?php echo $formacion->tituloF; ?></h4>
                                        <h5><?php echo $formacion->centro; ?></h5>
                                        <h6><?php echo $formacion->nivel; ?></h6>
                                        <h6><?php echo $formacion->fechaInicio; ?><strong> |
                                            </strong><?php echo $formacion->fechaFin; ?></h6>
                                    </div>
                                    <div class="col-md-2 align-self-center">
                                        <a href=<?php echo constant('URL') . 'editarFormacion/detalles/' . $formacion->id; ?>
                                            class="btn btn-primary">EDITAR</a>
                                    </div>
                                    <div class="col-md-3 align-self-center">
                                        <a href=<?php echo constant('URL') . 'hojaVidaUsuario/eliminarFormacion/' . $formacion->id; ?>
                                            class="btn btn-danger" onclick="return confirmar()">ELIMINAR</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php } ?>
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
                    <a href="<?php echo $publi->link; ?>" target="_blank"><img class="pd"
                            src="<?php echo constant('URL') . $publi->imagen; ?>" width="80%"></a>
                    <?php } ?>
                </div>
            </div>
        </div>
    </div>

    <div class="card text-center mt mb" style="border-color: transparent">
        <div class="row">
            <div class="col-md-12">
                <h1>Talleres de formación</h1>
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
                                    <div class="card-footer" style="border-color: transparent; background: transparent">
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
    <script type="text/javascript" src="<?php echo constant('URL'); ?>/public/js/fenditrabajo.js"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous">
    </script>
    <script type="text/javascript" src="<?php echo constant('URL'); ?>/public/js/selectPoblacion.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
        integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"
        integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous">
    </script>
</body>

</html>