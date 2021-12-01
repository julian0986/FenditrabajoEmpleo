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

    <div class="row">
      <div class="col-sm-12 col-md-8 centrar-contenido">
        <a href="#"><img src="<?php echo constant('URL'); ?>public/logos/logo.png" width="60%"></a>
      </div>
      
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark color:grey">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center justify-content-center " id="navbarSupportedContent">
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link link-m" href="#" style="color: white;">
              <ion-icon name="home-outline"></ion-icon>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-m" href="<?php echo constant('URL'); ?>buscarTrabajo" style="color: white;">
              <ion-icon name="search-sharp"></ion-icon> BUSCAR OFERTAS
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-m" href="<?php echo constant('URL'); ?>publicarOfertas" style="color: white;">
              <ion-icon name="newspaper-sharp"></ion-icon> PUBLICAR OFERTA
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-m" href="<?php echo constant('URL'); ?>registroPersona" style="color: white;">
              <ion-icon name="person-add-sharp"></ion-icon> REGISTRAR HOJA DE VIDA
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-m" href="<?php echo constant('URL'); ?>registroPersona" style="color: white;">
              <ion-icon name="layers-outline"></ion-icon> POLÍTICAS
            </a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle link-m" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false" style="color: white;">
              <ion-icon name="desktop-sharp"></ion-icon> INICIAR SESIÓN
            </a>
            <div class="dropdown-menu">
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>loginPersona">
                <ion-icon name="person-sharp"></ion-icon> PERSONA
              </a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>loginEmpresa">
                <ion-icon name="business-sharp"></ion-icon> MI EMPRESA
              </a>
              <a class="dropdown-item" href="<?php echo constant('URL'); ?>loginPersona">
                <ion-icon name="construct-outline"></ion-icon> ADMINISTRADOR
              </a>
            </div>
          </li>
        </ul>
      </div>
    </nav>
 
  </header> 
  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"> </script>
</body>

</html>