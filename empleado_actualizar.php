<?php

  require 'conexion.php';

  $id_emp = $_GET['id'];

  $query = "SELECT id_emp, nom_emp, puesto, edad FROM empleado WHERE id_emp = '$id_emp'";
  $consulta = pg_query($conexion, $query);

  //Obtiene la consulta y muestra 
  $row = pg_fetch_array($consulta);

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Zoo - Actualizar información </title>
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
            <li><a href="Empleados.php">Empleados</a></li>
        </nav>
        </div>
    </div>
    <div class="footer text-center">
        <h1>Modifica la información del empleado</h1>
    </div>
        <div class="container mt-5">
                    <form action="empleado_update.php" method="POST">

                    <input type="hidden" name="id_emp" value="<?php echo $row['id_emp']?>">
                    <p>Nombre completo: </p>
                    <input type="text" class="form-control mb-3" name="nom_emp" placeholder="Nombre Completo" autocomplete="off" required value="<?php echo $row['nom_emp']  ?>"><br>
                    <p> Puesto: </p>
                    <input type="text" class="form-control mb-3" name="puesto" placeholder="Puesto" autocomplete="off" required value="<?php echo $row['puesto']  ?>"><br>
                    <p> Edad: </p>
                    <input type="number" class="form-control mb-3" name="edad" placeholder="Edad" autocomplete="off" required min="18" max="70" value="<?php echo $row['edad']  ?>"><br>
                                               
                    <button type="submit" class="btn btn-primary" style="background-color: #06591c;">Actualizar</button>
                    </form>
      </div>
       
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