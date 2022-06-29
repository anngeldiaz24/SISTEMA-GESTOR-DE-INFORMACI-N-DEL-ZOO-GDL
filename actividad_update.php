<?php
    require 'conexion.php';

    $id_act = pg_escape_string($_POST['id_act']);
    $nom_act = pg_escape_string($_POST['nom_act']);
    $horas_lab = pg_escape_string($_POST['horas_lab']);
    $id_emp = pg_escape_string($_POST['id_emp']);
    $id_area = pg_escape_string($_POST['id_area']);

    $query = "UPDATE actividad SET nom_act = '{$nom_act}', horas_lab = '{$horas_lab}', id_emp = '{$id_emp}', id_area = '{$id_area}' WHERE id_act = '{$id_act}'";
    $consulta = pg_query($conexion, $query);

    if($consulta)
        {
            header("Location: Actividades.php");
        }else
        {
            echo "<script>alert('Error al actualizar, intenta de nuevo'); window.location= 'Actividades.php'</script>";
        }

?>