<?php

    require 'conexion.php';

    $id_med = $_GET['id'];

   
    $query = "DELETE FROM serviciosm WHERE id_med = '$id_med'";
    $consulta = pg_query($conexion,$query);

    if ($consulta) 
    {
        header("Location: Servicios_med.php");
            
    }
    else
    {
        echo "<script>alert('Error al eliminar, intenta de nuevo'); window.location= 'Servicios_med.php'</script>";
    }


?>