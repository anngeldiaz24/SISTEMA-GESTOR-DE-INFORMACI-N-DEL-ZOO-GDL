<?php

    require 'conexion.php';

    $id_mat = pg_escape_string($_POST['id_mat']);
    $nom_mat = pg_escape_string($_POST['nom_mat']);
    $costo = pg_escape_string($_POST['costo']);
    $marca = pg_escape_string($_POST['marca']);
    $id_area = pg_escape_string($_POST['id_area']);

    $query = "INSERT INTO material (id_mat, nom_mat, costo, marca, id_area) VALUES ('{$id_mat}', '{$nom_mat}', '{$costo}', '{$marca}', '{$id_area}')";
    $consulta = pg_query($conexion, $query);

    if($consulta)
        {
            header("Location: Materiales.php");
        }
        else
        {
            echo "<script>alert('Error al insertar, intenta de nuevo'); window.location= 'Materiales.php'</script>";
        }

    

?>