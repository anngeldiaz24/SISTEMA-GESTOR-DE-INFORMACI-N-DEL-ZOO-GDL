<?php 
    
  require 'conexion.php';

  $query= "SELECT * FROM area ORDER BY id_area";
  $consulta=pg_query($conexion,$query);

?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Zoo - Áreas</title>
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
        <h1>Áreas</h1>
    </div>
      <!--Aquí van las funciones-->
      <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Agregar Área</h1>
                                <form action="area_insertar.php" method="POST">

                                  <input type="text" class="form-control mb-3" name="id_area" placeholder="ID del área" autocomplete="off" required><br>
                                  <input type="text" class="form-control mb-3" name="nom_area" placeholder="Nombre del área" autocomplete="off" required><br>
                                  <input type="Number" class="form-control mb-3" name="sector" placeholder="Sector al que pertenece" autocomplete="off" required><br>
                                  <input type="number" class="form-control mb-3" name="cant_trab" placeholder="Número de trabajadores" autocomplete="off" required><br>

                                  <button type="submit" class="btn btn-success" style="background-color: #06591c;">Agregar</button>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table">
                                <thead class="table-striped" style="background-color: #0e9c34;">
                                    <tr>
                                        <th style="color: white">ID del área</th>
                                        <th style="color: white">Nombre del área</th>
                                        <th style="color: white">Sector</th>
                                        <th style="color: white">Cantidad de trabajadores</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            while($row=pg_fetch_array($consulta)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_area']?></th>
                                                <th><?php  echo $row['nom_area']?></th>
                                                <th><?php  echo $row['sector']?></th>   
                                                <th><?php  echo $row['cant_trab']?> trabajador/es</th> 
                                                <th><a href="area_actualizar.php?id=<?php echo $row['id_area'] ?>" class="btn btn-success" class="btn btn-success" style="background-color: #06591c;">Editar</a></th>
                                                <th><a href="area_delete.php?id=<?php echo $row['id_area'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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