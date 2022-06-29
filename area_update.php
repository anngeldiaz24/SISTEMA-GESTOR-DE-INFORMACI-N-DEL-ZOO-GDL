<?php
    require 'conexion.php';

    $id_area = pg_escape_string($_POST['id_area']);
    $nom_area = pg_escape_string($_POST['nom_area']);
    $sector = pg_escape_string($_POST['sector']);
    $cant_trab = pg_escape_string($_POST['cant_trab']);

    $query = "UPDATE area SET nom_area = '{$nom_area}', sector = '{$sector}', cant_trab = '{$cant_trab}' WHERE id_area = '{$id_area}'";
    $consulta = pg_query($conexion, $query);

    if($consulta)
        {
            header("Location: Areas.php");
        }else
        {
            echo "<script>alert('Error al actualizar, intenta de nuevo'); window.location= 'Areas.php'</script>";
        }

?>