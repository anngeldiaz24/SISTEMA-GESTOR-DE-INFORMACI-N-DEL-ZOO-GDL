<?php

    require 'conexion.php';

    $id_sueldo = pg_escape_string($_POST['id_sueldo']);
    $id_emp = pg_escape_string($_POST['id_emp']);
    $cant_su = pg_escape_string($_POST['cant_su']);
    $rfc = pg_escape_string($_POST['rfc']);
    $prestaciones = pg_escape_string($_POST['prestaciones']);

    $query = "INSERT INTO sueldo (id_sueldo, cant_su, rfc, prestaciones, id_emp) VALUES ('{$id_sueldo}', '{$cant_su}', '{$rfc}', '{$prestaciones}', '{$id_emp}')";
    $consulta = pg_query($conexion, $query);

    if($consulta)
        {
            header("Location: Sueldos.php");
        }
        else
        {
            echo "<script>alert('Error al insertar, intenta de nuevo'); window.location= 'Sueldos.php'</script>";
        }

    




?>