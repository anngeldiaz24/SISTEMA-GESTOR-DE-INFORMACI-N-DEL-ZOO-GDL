<?php

    require 'conexion.php';

    $id_med = pg_escape_string($_POST['id_med']);
    $no_clinica = pg_escape_string($_POST['no_clinica']);
    $nss = pg_escape_string($_POST['nss']);
    $serv_esp = pg_escape_string($_POST['serv_esp']);
    $turno = pg_escape_string($_POST['turno']);
    $id_emp = pg_escape_string($_POST['id_emp']);

    $query = "INSERT INTO serviciosm (id_med, no_clinica, nss, serv_esp, turno, id_emp) VALUES ('{$id_med}', '{$no_clinica}', '{$nss}', '{$serv_esp}', '{$turno}', '{$id_emp}')";
    $consulta = pg_query($conexion, $query);

    if($consulta)
        {
            header("Location: Servicios_med.php");
        }
        else
        {
            echo "<script>alert('Error al insertar, intenta de nuevo'); window.location= 'Servicios_med.php'</script>";
        }



?>