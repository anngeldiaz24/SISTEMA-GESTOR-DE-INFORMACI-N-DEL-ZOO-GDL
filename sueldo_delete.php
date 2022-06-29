<?php

    require 'conexion.php';

    $id_sueldo = $_GET['id'];

   
    $query = "DELETE FROM sueldo WHERE id_sueldo = '$id_sueldo'";
    $consulta = pg_query($conexion,$query);

    if ($consulta) 
    {
        header("Location: Sueldos.php");
            
    }
    else
    {
        echo "<script>alert('Error al eliminar, intenta de nuevo'); window.location= 'Sueldos.php'</script>";
    }


?>