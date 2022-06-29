<?php 
    
    require 'conexion.php';

    $query= "SELECT * FROM material ORDER BY id_mat";
    $consulta=pg_query($conexion,$query);

    $query3 = "SELECT * FROM area ORDER BY id_area";
    $consulta3=pg_query($conexion, $query3);
?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Zoo - Materiales</title>
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
        <h1>Materiales</h1>
    </div>
    <!--Aquí van las funciones-->
    <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Agregar Material</h1>
                                <form action="material_insertar.php" method="POST">

                                  <input type="text" class="form-control mb-3" name="id_mat" placeholder="ID del material" autocomplete="off" required><br>
                                  <input type="text" class="form-control mb-3" name="nom_mat" placeholder="Nombre del material" autocomplete="off" required><br>
                                  <input type="text" class="form-control mb-3" name="costo" placeholder="Costo" autocomplete="off" required><br>
                                  <input type="text" class="form-control mb-3" name="marca" placeholder="Marca" autocomplete="off" required><br>

                                  <p> Seleccione el área que utiliza este material: </p>
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
                                        <th style="color: white">ID del Material</th>
                                        <th style="color: white">Nombre del Material</th>
                                        <th style="color: white">Costo</th>
                                        <th style="color: white">Marca</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            while($row=pg_fetch_array($consulta)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_mat']?></th>
                                                <th><?php  echo $row['nom_mat']?></th>
                                                <th>$<?php  echo $row['costo']?></th>   
                                                <th><?php  echo $row['marca']?></th> 
                                                <th><a href="material_actualizar.php?id=<?php echo $row['id_mat'] ?>" class="btn btn-success" class="btn btn-success" style="background-color: #06591c;">Editar</a></th>
                                                <th><a href="material_delete.php?id=<?php echo $row['id_mat'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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