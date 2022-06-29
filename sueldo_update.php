<?php
    require 'conexion.php';

    $id_sueldo = pg_escape_string($_POST['id_sueldo']);
    $cant_su = pg_escape_string($_POST['cant_su']);
    $rfc = pg_escape_string($_POST['rfc']);
    $prestaciones = pg_escape_string($_POST['prestaciones']);
    $id_emp = pg_escape_string($_POST['id_emp']);

    $query = "UPDATE sueldo SET cant_su = '{$cant_su}', rfc = '{$rfc}', prestaciones = '{$prestaciones}', id_emp = '{$id_emp}' WHERE id_sueldo = '{$id_sueldo}'";
    $consulta = pg_query($conexion, $query);

    if($consulta)
        {
            header("Location: Sueldos.php");
        }else
        {
            echo "<script>alert('Error al actualizar, intenta de nuevo'); window.location= 'Sueldos.php'</script>";
        }

?>