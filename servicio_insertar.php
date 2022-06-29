<?php

    require 'conexion.php';

    $id_serv = pg_escape_string($_POST['id_serv']);
    $tipo = pg_escape_string($_POST['tipo']);
    $fecha_venc = pg_escape_string($_POST['fecha_venc']);
    $total_pagar = pg_escape_string($_POST['total_pagar']);
    $id_area = pg_escape_string($_POST['id_area']);

    $query = "INSERT INTO servicio (id_serv, tipo, fecha_venc, total_pagar, id_area) VALUES ('{$id_serv}', '{$tipo}', '{$fecha_venc}', '{$total_pagar}', '{$id_area}')";
    $consulta = pg_query($conexion, $query);

    if($consulta)
        {
            header("Location: Servicios.php");
        }
        else
        {
            echo "<script>alert('Error al insertar, intenta de nuevo'); window.location= 'Servicios.php'</script>";
        }

    

?>