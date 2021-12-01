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
  <div id="header" class="main-header">
    <div class="row">
      <div class="col-sm-12 col-md-8 centrar-contenido">
        <a href="https://fendipetroleo.com/nuevoF/"><img src="<?php echo constant('URL'); ?>public/images/nuevo-logo.png" width="60%"></a>
      </div>
      <div class="col-sm-4 col-md-4">
        <div class="row">
          <div class="col-md-6"></div>
          <div class="col-md-1">
            <a href="https://www.facebook.com/fendinaloficial">
              <img src="<?php echo constant('URL'); ?>public/icon/facebook.png" width="20px" style="margin: 2px;" alt="F">
            </a></div>
          <div class="col-md-1">
            <a href="https://www.instagram.com/fendipetroleonacional/">
              <img src="<?php echo constant('URL'); ?>public/icon/instagram.png" width="20x" style="margin: 2px;" alt="F">
            </a>
          </div>
          <div class="col-md-1">
            <a href="https://twitter.com/Fendipetroleo">
              <img src="<?php echo constant('URL'); ?>public/icon/twitter.png" width="20px" style="margin: 2px;" alt="F">
            </a>
          </div>
          <div class="col-md-1">
            <a href="https://www.youtube.com/channel/UCh3AwxiWRRvuhhjHWmZ-5-g/featured">
              <img src="<?php echo constant('URL'); ?>public/icon/youtube.png" width="20px" style="margin: 2px;" alt="F">
            </a>
          </div>
        </div>
        <div class="row">
          <div class="col-md-1">
            <ion-icon name="time-outline" style="color:black; font-size:30px;"></ion-icon>
          </div>
          <div class="col-md-11">
            <p>Lun - Vie: 7 AM : 5 PM</p>
          </div>
          <div class="col-md-1">
            <ion-icon name="mail-outline" style="color:black; font-size:30px;"></ion-icon>
          </div>
          <div class="col-md-11">
            <p>Contactenos: informacion@fendipetroleo.com</p>
          </div>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004C92; color: white;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse text-center justify-content-center " id="navbarSupportedContent">
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link link-m" href="https://fendipetroleo.com/nuevoF/" style="color: white;">
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
  </div>
  <div style="position: fixed;top: 38%;right: 1px;z-index: 200;">
    <div style="background-color: rgba(250, 250, 250, 0.9); border-radius: 10px; border: 1px solid; ">
      <a href="https://www.facebook.com/fendinaloficial">
        <img src="<?php echo constant('URL'); ?>public/icon/facebook.png" width="25px" style="margin: 2px;" alt="F">
      </a>
      <a href="https://www.instagram.com/fendipetroleonacional/">
        <img src="<?php echo constant('URL'); ?>public/icon/instagram.png" width="25x" style="margin: 2px;" alt="F">
      </a>
      <a href="https://twitter.com/Fendipetroleo">
        <img src="<?php echo constant('URL'); ?>public/icon/twitter.png" width="25px" style="margin: 2px;" alt="F">
      </a>
      <a href="https://www.youtube.com/channel/UCh3AwxiWRRvuhhjHWmZ-5-g/featured">
        <img src="<?php echo constant('URL'); ?>public/icon/youtube.png" width="25px" style="margin: 2px;" alt="F">
      </a>
    </div>
    <div class="row justify-content-center">
      <a href="https://fendipetroleo.com/Virtual/login/index.php" style="background: transparent;">
        <img src="<?php echo constant('URL'); ?>public/icon/campus.png" style="background: transparent;" width="90px" alt="F">
      </a>
    </div>
    <div class="row justify-content-center">
      <a href="https://blog.fendipetroleo.com/" style="background: transparent;">
        <img src="<?php echo constant('URL'); ?>public/icon/blog.png" width="80px" style="background: transparent;" alt=" F">
      </a>
    </div>
  </div>

  <script src="https://unpkg.com/ionicons@5.0.0/dist/ionicons.js"> </script>
</body>

</html>