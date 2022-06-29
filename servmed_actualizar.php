<?php

  require 'conexion.php';

  $id_med = $_GET['id'];

  $query = "SELECT id_med, no_clinica, nss, serv_esp, turno, id_emp FROM serviciosm WHERE id_med = '$id_med'";
  $consulta = pg_query($conexion, $query);

  $query2 = "SELECT id_emp, nom_emp FROM empleado ORDER BY id_emp";
  $consulta2=pg_query($conexion, $query2);

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
            <li><a href="Servicios_med.php">Servicios Médicos</a></li>
        </nav>
        </div>
    </div>
    <div class="footer text-center">
        <h1>Modifica los Servicios Médicos</h1>
    </div>
        <!--Aquí van las funciones-->

        <div class="container mt-5">
                <form action="servmed_update.php" method="POST">

                  <input type="hidden" name="id_med" value="<?php echo $row['id_med']?>">
                  <p> No. de Clínica: </p>
                  <input type="text" class="form-control mb-3" name="no_clinica"  autocomplete="off" required value="<?php echo $row['no_clinica']  ?>"><br>
                  <p> NSS: </p>
                  <input type="text" class="form-control mb-3" name="nss"  autocomplete="off" required value="<?php echo $row['nss']  ?>"><br>
                  <p> ¿Tiene derecho a servicios especiales? </p>
                      <select class="form-control mb-3" name="serv_esp"  autocomplete="off" required>
                        <option value = "SI"> SI </option>
                        <option value = "NO"> NO </option>
                  </select><br>
                  <p> Turno al que esta adscrito</p>
                  <select class="form-control mb-3" name="turno" value="<?php echo $row['turno']  ?>" autocomplete="off" required>
                    <option value = "M"> Matutino </option>
                    <option value = "V"> Vespertino </option>
                  </select><br>
                  <p> Seleccione el empleado que esta afiliado a este servicio: </p>
                  <select name = "id_emp" class= "form-control mb-3" value="<?php echo $row['id_emp']  ?>" autocomplete="off" required> 
                  <?php
                    while($row = pg_fetch_array($consulta2))
                    {
                  ?>
                    <option value = "<?php echo $row['id_emp']?>"> <?php echo $row['nom_emp']?> </option>
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