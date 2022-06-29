<?php
    require 'conexion.php';

    $id_mat = pg_escape_string($_POST['id_mat']);
    $nom_mat = pg_escape_string($_POST['nom_mat']);
    $costo = pg_escape_string($_POST['costo']);
    $marca = pg_escape_string($_POST['marca']);
    $id_area = pg_escape_string($_POST['id_area']);

    $query = "UPDATE material SET nom_mat = '{$nom_mat}', costo = '{$costo}', marca = '{$marca}', id_area = '{$id_area}' WHERE id_mat = '{$id_mat}'";
    $consulta = pg_query($conexion, $query);

    if($consulta)
        {
            header("Location: Materiales.php");
        }else
        {
            echo "<script>alert('Error al actualizar, intenta de nuevo'); window.location= 'Materiales.php'</script>";
        }

?>