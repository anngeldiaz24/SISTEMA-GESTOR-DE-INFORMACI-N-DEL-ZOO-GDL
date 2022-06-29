<?php

    require 'conexion.php';

    $id_act = $_GET['id'];

   
    $query = "DELETE FROM actividad WHERE id_act = '$id_act'";
    $consulta = pg_query($conexion,$query);

    if ($consulta) 
    {
        header("Location: Actividades.php");
            
    }
    else
    {
        echo "<script>alert('Error al eliminar, intenta de nuevo'); window.location= 'Actividades.php'</script>";
    }


?>