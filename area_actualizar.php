<?php

  require 'conexion.php';

  $id_area = $_GET['id'];

  $query = "SELECT id_area, nom_area, sector, cant_trab FROM area WHERE id_area = '$id_area'";
  $consulta = pg_query($conexion, $query);

  //Obtiene la consulta y muestra 
  $row = pg_fetch_array($consulta);

?>

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
            <li><a href="Areas.php">Áreas</a></li>
        </nav>
        </div>
    </div>
    <div class="footer text-center">
        <h1>Modifica un Área</h1>
    </div>
    <div class="container mt-5">
                <form action="area_update.php" method="POST">

                  <input type="hidden" name="id_area" value="<?php echo $row['id_area']?>">
                  <p> Nombre del Área: </p>
                  <input type="text" class="form-control mb-3" name="nom_area"  autocomplete="off" required value="<?php echo $row['nom_area']  ?>"><br>
                  <p> Sector: </p>
                  <input type="text" class="form-control mb-3" name="sector"  autocomplete="off" required value="<?php echo $row['sector']  ?>"><br>
                  <p> Cantidad de trabajadores: </p>
                  <input type="text" class="form-control mb-3" name="cant_trab"  autocomplete="off" required value="<?php echo $row['cant_trab']  ?>"><br>
                        
                    <button type="submit" class="btn btn-primary" style="background-color: #06591c;">Actualizar</button>
                </form>
    </div>

    
        <!--Aquí van las funciones-->
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