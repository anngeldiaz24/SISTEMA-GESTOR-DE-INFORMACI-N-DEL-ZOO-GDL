<?php 
    
    require 'conexion.php';

    $query= "SELECT * FROM actividad ORDER BY id_act";
    $consulta=pg_query($conexion,$query);

    $query2 = "SELECT * FROM empleado ORDER BY id_emp";
    $consulta2=pg_query($conexion, $query2);

    $query3 = "SELECT * FROM area ORDER BY id_area";
    $consulta3=pg_query($conexion, $query3);

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Zoo - Actividades</title>
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
        </nav>
        </div>
    </div>
    <div class="footer text-center">
        <h1>Actividades</h1>
    </div>
    <!--Aquí van las funciones-->
    <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Agregar Actividad</h1>
                                <form action="actividad_insertar.php" method="POST">

                                  <input type="text" class="form-control mb-3" name="id_act" placeholder="ID de la actividad" autocomplete="off" required><br>
                                  <input type="text" class="form-control mb-3" name="nom_act" placeholder="Nombre de la actividad" autocomplete="off" required><br>
                                  <input type="number" class="form-control mb-3" name="horas_lab" placeholder="Horas que toma la actividad" min="1" max="8" autocomplete="off"><br>
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

                                  <button type="submit" class="btn btn-success" style="background-color: #06591c;">Agregar</button>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table">
                                <thead class="table-striped" style="background-color: #0e9c34;">
                                    <tr>
                                        <th style="color: white">ID de la actividad</th>
                                        <th style="color: white">Nombre de la actividad</th>
                                        <th style="color: white">Horas que toma la actividad</th>
                                        <th style="color: white">ID del empleado que la realiza</th>
                                        <th style="color: white">Área encargada</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            while($row=pg_fetch_array($consulta)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_act']?></th>
                                                <th><?php  echo $row['nom_act']?></th>
                                                <th><?php  echo $row['horas_lab']?> horas</th> 
                                                <th><?php  echo $row['id_emp']?></th>  
                                                <th><?php  echo $row['id_area']?></th>
                                                <th><a href="actividad_actualizar.php?id=<?php echo $row['id_act'] ?>" class="btn btn-success" class="btn btn-success" style="background-color: #06591c;">Editar</a></th>
                                                <th><a href="actividad_delete.php?id=<?php echo $row['id_act'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
                                            </tr>
                                        <?php 
                                            }
                                        ?>
                                </tbody>
                            </table>
                        </div>
                    </div>  
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