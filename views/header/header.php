<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title></title>
    <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/fenditrabajo.css">
    <link rel="icon" href="<?php echo constant('URL'); ?>public/images/favicon.png" sizes="32x32">
</head>

<body>
    <header id="header" class="main-header">
        <div class="logito">
            <a href="<?php echo constant('URL'); ?>buscarTrabajo"><img
                    src="<?php echo constant('URL'); ?>public/logos/logo.png" width="60%"></a>
        </div>

        <nav class="navbar navbar-expand-lg navbar-light text-dark ">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse text-center justify-content-center " id="navbarSupportedContent">

                <ul class="nav navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link link-m" href="<?php echo constant('URL'); ?>buscarTrabajo">
                            <i class="fas fa-gas-pump"></i>
                        </a>
                    </li>


                    <li class="nav-item dropdown">



                        <a class="nav-link dropdown-toggle link-m" data-toggle="dropdown" data-hover="dropdown"
                            href="https://www.google.com" role="button" aria-haspopup="true" aria-expanded="false">
                            <i class="far fa-newspaper"></i>QUIÉNES SOMOS
                        </a>

                        <div class="dropdown-menu">

                            <!-- <a class="dropdown-item" href="<?php echo constant('URL'); ?>quienesSomos">
                                <i class="fas fa-user-tie"></i> NOSOTROS
                            </a> -->

                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>contactenos">
                                <i class="fas fa-gavel"></i> Aviso de Privacidad
                            </a>
                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>contactenos">
                                <i class="fas fa-gavel"></i> Política de cookies
                            </a>
                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>contactenos">
                                <i class="fas fa-gavel"></i> Condiciones de uso.
                            </a>

                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>contactenos">
                                <i class="fas fa-gavel"></i> Política de Protección de datos personales

                            </a>
                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>contactenos">
                                <i class="fas fa-gavel"></i> Atención de solicitudes por tratamiento de datos
                                personales.
                            </a>


                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-m" href="<?php echo constant('URL'); ?>publicarOfertas">
                            <i class="fas fa-user-edit"></i> PUBLICAR OFERTA
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-m" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-user-check"></i> REGISTRARSE
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>registroPersona">
                                <i class="fas fa-user-tie"></i> PERSONA
                            </a>
                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>registroEmpresa">
                                <i class="fas fa-building"></i> EMPRESA
                            </a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link link-m" href="<?php echo constant('URL'); ?>contactenos">
                            <i class="fas fa-gavel"></i> CONTÁCTENOS
                        </a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle link-m" data-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">
                            <ion-icon name="desktop-sharp"></ion-icon> INICIAR SESIÓN
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>loginPersona">
                                <i class="fas fa-user-tie"></i> PERSONA
                            </a>
                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>loginEmpresa">
                                <i class="fas fa-building"></i> EMPRESA
                            </a>
                            <a class="dropdown-item" href="<?php echo constant('URL'); ?>loginPersona">
                                <i class="fas fa-user-cog"></i> ADMINISTRADOR
                            </a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>

    </header>
    <script src="https://kit.fontawesome.com/11638189dd.js" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"> </script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
</body>

</html>