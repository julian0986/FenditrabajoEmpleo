<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="<?php echo constant('URL'); ?>public/css/fenditrabajo.css">
  <link rel="icon" href="<?php echo constant('URL'); ?>public/images/favicon.png" sizes="32x32">
</head>

<body>
  <div id="header" class="main-header">
    <div class="row">
      <div class="col-sm-12 col-md-8 centrar-contenido">
        <a href=""><img src="<?php echo constant('URL'); ?>public/images/nuevo-logo.png" width="60%"></a>
      </div>
      <div class="col-sm-4 col-md-4" style="padding-top:2%">
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
    <nav class="navbar navbar-expand-lg navbar-dark" style="background-color: #004C92;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse text-center justify-content-center" id="navbarSupportedContent">
        <ul class="nav navbar-nav">
          <li class="nav-item">
            <a class="nav-link link-m" href="<?php echo constant('URL'); ?>inicioAdmin" style="color: white;"><ion-icon name="settings-sharp"></ion-icon> cPanel</a>
          </li>
          <li class="nav-item">
            <a class="nav-link link-m" href="<?php echo constant('URL'); ?>loginPersona/cerrarSesion" style="color: white;"><ion-icon name="exit-sharp"></ion-icon> Cerrar sesión</a>
          </li>
        </ul>
      </div>
    </nav>
  </div> 
  <script  src = "https://unpkg.com/ionicons@5.0.0/dist/ionicons.js" > </script>  
</body>

</html>