<?php

  require 'conexion.php';

  $id_act = $_GET['id'];

  $query = "SELECT id_act, nom_act, horas_lab, id_emp FROM actividad WHERE id_act = '$id_act'";
  $consulta = pg_query($conexion, $query);

  $query2 = "SELECT id_emp, nom_emp FROM empleado ORDER BY id_emp";
  $consulta2=pg_query($conexion, $query2);

  $query3 = "SELECT id_area, nom_area FROM area ORDER BY id_area";
  $consulta3=pg_query($conexion, $query3);

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
            <li><a href="Actividades.php">Actividades</a></li>
        </nav>
        </div>
    </div>
    <div class="footer text-center">
        <h1>Modifica la información de la actividad</h1>
    </div>
    <div class="container mt-5">
                <form action="actividad_update.php" method="POST">

                  <input type="hidden" name="id_act" value="<?php echo $row['id_act']?>">
                  <p> Nombre de la actividad: </p>
                  <input type="text" class="form-control mb-3" name="nom_act" placeholder="Nombre de la actividad" autocomplete="off" required value="<?php echo $row['nom_act']  ?>"><br>
                  <p> Horas laborables: </p>
                  <input type="text" class="form-control mb-3" name="horas_lab"  autocomplete="off" required value="<?php echo $row['horas_lab']  ?>"><br>

                  <p> Seleccione el empleado que realiza la actividad: </p>
                  <select name = "id_emp" class= "form-control mb-3" autocomplete="off" required> 
                  <?php
                    while($row = pg_fetch_array($consulta2))
                    {
                  ?>
                    <option value = "<?php echo $row['id_emp']?>"> <?php echo $row['nom_emp']?> </option>
                  <?php
                    }
                  ?>
                  </select><br>    
                  <p> Área encargada: </p>
                  <select name = "id_area" class= "form-control mb-3" autocomplete="off" required> 
                  <?php
                    while($row = pg_fetch_array($consulta3))
                    {
                  ?>
                    <option value = "<?php echo $row['id_area']?>"> <?php echo $row['nom_area']?> </option>
                  <?php
                    }
                  ?>
                  </select><br>                         
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