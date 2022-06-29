<?php 
    
    require 'conexion.php';

    $query= "SELECT * FROM sueldo ORDER BY id_sueldo";
    $consulta=pg_query($conexion,$query);

    $query2 = "SELECT * FROM empleado ORDER BY id_emp";
    $consulta2=pg_query($conexion, $query2);
?>

<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <title>Zoo - Sueldos</title>
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
        <h1>Sueldos</h1>
    </div>
        <!--Aquí van las funciones-->
        <div class="container mt-5">
                    <div class="row"> 
                        
                        <div class="col-md-3">
                            <h1>Agregar sueldo</h1>
                                <form action="sueldo_insertar.php" method="POST">

                                  <input type="text" class="form-control mb-3" name="id_sueldo" placeholder="ID del sueldo" autocomplete="off" required><br>
                                  <input type="text" class="form-control mb-3" name="cant_su" placeholder="Cantidad a ganar" autocomplete="off" required><br>
                                  <input type="text" class="form-control mb-3" name="rfc" placeholder="RFC" autocomplete="off" required><br>
                                  <p> ¿Cuenta con prestaciones? </p>
                                  <select class="form-control mb-3" name="prestaciones"  autocomplete="off" required>
                                    <option value = "SI"> SI </option>
                                    <option value = "NO"> NO </option>
                                  </select><br>
                                    
                                  <p> Seleccione el empleado del sueldo: </p>
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
                                  <button type="submit" class="btn btn-success" style="background-color: #06591c;">Agregar</button>
                                </form>
                        </div>

                        <div class="col-md-8">
                            <table class="table" >
                                <thead class="table-striped" style="background-color: #0e9c34;">
                                    <tr>
                                        <th style="color: white">ID del Sueldo</th>
                                        <th style="color: white">Cantidad</th>
                                        <th style="color: white">RFC</th>
                                        <th style="color: white">Prestaciones</th>
                                        <th style="color: white">Empleado</th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>
                                        <?php
                                            while($row=pg_fetch_array($consulta)){
                                        ?>
                                            <tr>
                                                <th><?php  echo $row['id_sueldo']?></th>
                                                <th>$<?php  echo $row['cant_su']?></th>
                                                <th><?php  echo $row['rfc']?></th>
                                                <th><?php  echo $row['prestaciones']?></th>
                                                <th><?php  echo $row['id_emp']?></th>
                                                <th><a href="sueldo_actualizar.php?id=<?php echo $row['id_sueldo'] ?>" class="btn btn-success" style="background-color: #06591c;">Editar</a></th>
                                                <th><a href="sueldo_delete.php?id=<?php echo $row['id_sueldo'] ?>" class="btn btn-danger">Eliminar</a></th>                                        
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