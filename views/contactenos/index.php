<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <title>Contactenos - Fendipetroleo Nacional</title>
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
    <!--load all styles -->
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
/* .fondo2 {
    background-image: url(<?php echo constant('URL') . 'public/images/empresa.jpg';
    ?>);
    background-repeat: no-repeat !important;
    background-attachment: scroll !important;
    background-position: center center !important;
    z-index: auto;
    background-size: cover !important;
    -webkit-background-size: cover !important;
    -moz-background-size: cover !important;
    -o-background-size: cover !important;
}
 */
.zero {
    padding: 0;
    margin: 0;
}

.inner-page {
    padding: 50px 0;
}

.inner-page .title {
    text-align: center;
    margin-bottom: 40px;
}

.inner-page .title>span {
    color: #292929;
    font-size: 17px;
    margin-bottom: 10px;
}

.inner-page .title h2 {
    color: #1b4573;
    font-size: 40px;
    font-weight: 800;
    letter-spacing: 1px;
    margin: 0;
}

.inner-page .title>p {
    line-height: 24px;
}

.contact {
    border: 1px solid #ddd;
    padding: 15px;
    margin-bottom: 30px;
}

.contact>span {
    color: #1b4573;
    float: left;
    font-size: 50px;
    line-height: 30px;
    margin-right: 10px;
    text-align: center;
    width: 70px;
}

.inner-page .fa-home:before {
    content: "\f015";
}

.information {
    overflow: hidden;
    padding-right: 20px;
    margin-top: 5px;
}

.information>strong {
    color: #000;
    display: table;
    font-size: 16px;
    font-weight: 700;
    margin-bottom: 5px;
    text-transform: uppercase;
}

.information>p {
    line-height: 22px;
    margin: 0;
}

.contact-form input,
.contact-form textarea {
    color: #8c8c8c;
    float: left;
    border: 1px solid #ddd;
    font-size: 12px;
    line-height: 32px;
    margin-bottom: 15px;
    padding: 10px 20px;
    width: 100%;
}

.contact-form {
    text-align: right;
}

.contact-form button {
    background-color: #1b4573;
    border: 0 none;
    color: #fff;
    display: inline-block;
    font-size: 16px;
    text-transform: uppercase;
    font-weight: 600;
    padding: 18px 40px;
    margin-top: 20px;
}


/* .pd-mx {
    padding-right: 10%;
    padding-left: 10%;
    padding-bottom: 5%;
    padding-top: 5%
}
 */

.card {
    padding: 20px;
}
</style>

<body>
    <?php require "views/header/header.php"; ?>

    <!--    <div class="row centrar-contenido">
        <div class="col-md-12 fondo2 zero">
            <div class="pd-mx" style="background-color: rgba(255, 255, 255, 0.7);background-size: cover !important;">
                <h2>¡Regístrate ahora y publica una oferta de empleo gratis al mes!</h2>
                <a href="<?php echo constant('URL'); ?>loginEmpresa" class="btn btn-lg btn-primary mg">Publica tus
                    oferta gratis</a>
            </div>
        </div>
    </div> -->

    <!-- Contact us -->
    <div class="inner-page">
        <div class="container">
            <div class="card shadow-lg p-3 mb-5 bg-white rounded">
                <div class="contact-wrap">
                    <div class="row">
                        <div class="col-md-12 column">
                            <div class="title"> <span>Estamos aquí para ayudarte</span>
                                <br /><br />
                                <h2>CONTACTENOS</h2>
                            </div>
                        </div>

                        <!-- Contact Info -->
                        <div class="col-md-4 column">
                            <div class="contact-now">
                                <div class="contact"> <span><i class="fa fa-home"></i></span>
                                    <div class="information"> <strong>Dirección:</strong>
                                        <p>Cra. 18 #78-40, Localidad de Chapinero, Bogotá</p>
                                    </div>
                                </div>
                                <!-- Contact Info -->
                                <div class="contact"> <span><i class="fa fa-envelope"></i></span>
                                    <div class="information"> <strong>Correo Electrónico:</strong>
                                        <p>info@fenditrabajo.com</p>
                                    </div>
                                </div>
                                <!-- Contact Info -->
                                <div class="contact"> <span><i class="fa fa-phone"></i></span>
                                    <div class="information"> <strong>Teléfono:</strong>
                                        <p>601 621 8275</p>
                                        <!-- <p>+057 XXX XX XX XXX</p> -->
                                    </div>
                                </div>
                                <!-- Contact Info -->
                            </div>
                            <!-- Contact Now -->
                        </div>

                        <!-- Contact form -->
                        <div class="col-md-8 column">
                            <?php 
            if(isset($mensaje)){
                echo "<div class='alert alert-danger alert-dismissible' role='alert' style='text-align: center;'>
                                    <button type='button' class='close' data-dismiss='alert' aria-label='Close'>
                                            <span aria-hidden='true'>&times;</span></button>
                                  $mensaje
                                </div>";
            }
            
            ?>

                            <div class="contact-form">
                                <div id="message"></div>
                                <form method="post" action="<?php echo constant('URL'); ?>contactenos/contactos"
                                    name="contact_form" id="contact_form" required="">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type="text" name="pqr_nombre" id="cnt_nombre" placeholder="Nombren"
                                                required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="pqr_apellido" id="cnt_apellido"
                                                placeholder="Apellido" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="text" name="pqr_tel" id="cnt_telefono"
                                                placeholder="Número de Teléfono" required="">
                                        </div>
                                        <div class="col-md-6">
                                            <input type="email" name="pqr_mail" id="cnt_email"
                                                placeholder="Correco Electrónico">
                                        </div>
                                        <!--  <div class="col-md-6">
                  <select class="form-control" name="cnt_tipodocumento" id="cnt_tipodocumento" required="required">
                     <option value= "" >Tipo de Documento</option>
                     <option value="CC">Cédula de Ciudania</option>
                     <option value="CEX">Cédula de Extrajería</option>
                    <option value="NUIT">Número de Identificación Tributaria</option> 
                     <option value="NIT">NIT</option>
                     <option value="SICOM" maxlength="6" >Código Sicom</option>
                   </select>
                </div>
                <div class="col-md-6">
                  <input  type="text" name="cnt_numerodocumento" id="cnt_numerodocumento" placeholder="Documento de Identidad">
                </div> -->

                                        <div class="col-md-12">
                                            <textarea rows="4" name="pqr_asunto" id="cnt_solicitud"
                                                placeholder="Solicitud"></textarea>
                                        </div>
                                        <div class="col-md-12">
                                            <button class="button" type="submit" name="envio"
                                                id="envio_contacto">Enviar</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- CURSOS O TALLERES DESDE LA BD -->
    <!-- <div class="card text-center mt mb" style="border-color: transparent">
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
    </div> -->

    <!-- CODIGO PUBLICIDAD -->
    <!-- div class="card text-center mt mb" style="border-color: transparent">
        <div class="row">
            <div class="col-md-12">
                <h1>Nuestros anunciantes</h1>
            </div>
            <div class="col-md-12">
                <div id="carruselOfertas" class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item active" style="padding-left:2%; padding-right: 2%">
                            <div class="card-deck">
                                <?php
                                include_once 'models/entity/publicidad.php';
                                foreach ($this->publicidadB as $row) {
                                    $publi = new Publicidad();
                                    $publi = $row;
                                ?>
                                <div class="card" style="border-color: transparent">
                                    <a href="<?php echo $publi->link; ?>" target="_blank"><img
                                            style="border-radius: 10px;" width="50%"
                                            src="<?php echo constant('URL') . $publi->imagen; ?>"></a>
                                </div>
                                <?php } ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div> -->

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