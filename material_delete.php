<?php

    require 'conexion.php';

    $id_mat = $_GET['id'];

   
    $query = "DELETE FROM material WHERE id_mat = '$id_mat'";
    $consulta = pg_query($conexion,$query);

    if ($consulta) 
    {
        header("Location: Materiales.php");
            
    }
    else
    {
        echo "<script>alert('Error al eliminar, intenta de nuevo'); window.location= 'Materiales.php'</script>";
    }


?>