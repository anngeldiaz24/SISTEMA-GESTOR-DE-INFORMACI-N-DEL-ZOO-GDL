<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Zoológico de Guadalajara</title>
    <link href="img/LogoZoo.png" rel="icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Duru+Sans|Actor' rel='stylesheet' type='text/css'>
    <link href="css/bootshape.css" rel="stylesheet">
  </head>
  <body>
    <!-- Navigation bar -->
    <div class="navbar navbar-default navbar-fixed-top" role="navigation">
      <div class="container">
        <div class="navbar-header">
          <a class="navbar-brand" href="index.php"><span class="green">Zoológico</span> de Guadalajara</a>
        </div>
        <nav role="navigation" class="collapse navbar-collapse navbar-right">
          <ul class="navbar-nav nav">
            <li><a href="index.php">Inicio</a></li>
            <li class="dropdown">
              <a data-toggle="dropdown" href="#" class="dropdown-toggle">Operaciones <b class="caret"></b></a>
              <ul class="dropdown-menu">
                <li><a href="Empleados.php">Empleados</a></li>
                <li><a href="Sueldos.php">Sueldos</a></li>
                <li><a class="active" href="Servicios_med.php">Servicios Médicos</a></li>
                <li><a class="active" href="Actividades.php">Actividades</a></li>
                <li><a class="active" href="Areas.php">Áreas</a></li>
                <li><a class="active" href="Materiales.php">Materiales</a></li>
                <li><a class="active" href="Servicios.php">Servicios Básicos</a></li>
              </ul>
            </li>
            <li><a href="https://zooguadalajara.com.mx/boletos">Precios</a></li>
            <li><a href="https://es-la.facebook.com/pg/zoologicogdl/posts/">Facebook</a></li>
          </ul>
        </nav>
      </div>
    </div><!-- End Navigation bar -->

    <!-- Slide gallery -->
    <div class="jumbotron">
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
          <li data-target="#carousel-example-generic" data-slide-to="1"></li>
          <li data-target="#carousel-example-generic" data-slide-to="2"></li>
        </ol>
        <!-- Wrapper for slides -->
        <div class="carousel-inner">
          <div class="item active">
            <img src="img/carousel1.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel2.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
          <div class="item">
            <img src="img/carousel3.jpg" alt="">
            <div class="carousel-caption">
            </div>
          </div>
        </div>
        <!-- Controls -->
        <a class="left carousel-control" href="#carousel-example-generic" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left"></span>
        </a>
        <a class="right carousel-control" href="#carousel-example-generic" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>
        </a>
      </div>
    </div><!-- End Slide gallery -->
    <h3 class="text-center">Vida Natural Extraordinaria &amp; Salvaje</h3>
    <!-- Thumbnails -->
    <div class="container thumbs">
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/pic1.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Reptiles</h3>
            <p>Cuenta con el mayor herpetario de toda América Latina con lagartos, tortugas, cocodrilos, serpientes y víboras. Entre sus atracciones puedes encontrar un recorrido en tren panorámico así como shows de aves y reptiles.</p>
            <div class="btn-toolbar text-center">
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/pic2.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Aves</h3>
            <p>Aviarios: Son dos enormes pirámides de acero que albergan a aves tropicales en un ambiente controlado, se puede ingresar a las pirámides para apreciar mejor a las aves.</p>
            <div class="btn-toolbar text-center">
            </div>
          </div>
        </div>
      </div>
      <div class="col-sm-6 col-md-4">
        <div class="thumbnail">
          <img src="img/pic3.jpg" alt="" class="img-circle">
          <div class="caption">
            <h3 class="text-center">Animales</h3>
            <p>Con tres décadas de historia, esta institución trabaja en la conservación de más de 300 especies del reino animal, como mamíferos, reptiles, peces y aves, a lo largo de 55 hectáreas que comprenden sus instalaciones, localizadas en la zona norte de Guadalajara, donde además colinda con la Barranca de Huentitán.</p>
            <div class="btn-toolbar text-center">
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
      <div class="footer text-center">
        <p>&copy; 2014 Zoológico de Guadalajara. Todos los derechos reservados. Creado por: <a class="green" href="https://zooguadalajara.com.mx/">zooguadalajara.com.mx</a></p>
        <img src="img/LogoZoo.png" alt="" class="img-circle">
      </div><!-- End Footer -->

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <!-- // <script src="https://code.jquery.com/jquery.js"></script> -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/bootshape.js"></script>
  </body>
</html>