<?php

    require 'conexion.php';

    $id_serv = $_GET['id'];

   
    $query = "DELETE FROM servicio WHERE id_serv = '$id_serv'";
    $consulta = pg_query($conexion,$query);

    if ($consulta) 
    {
        header("Location: Servicios.php");
            
    }
    else
    {
        echo "<script>alert('Error al eliminar, intenta de nuevo'); window.location= 'Servicios.php'</script>";
    }


?>