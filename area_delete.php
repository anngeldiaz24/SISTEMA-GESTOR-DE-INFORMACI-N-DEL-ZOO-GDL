<?php

    require 'conexion.php';

    $id_area = $_GET['id'];

    $validar = "SELECT * FROM actividad where id_area = '$id_area'";
    $consulta = pg_query($conexion,$validar);
    $num = pg_num_rows($consulta);

    $validar2 = "SELECT * FROM material where id_area = '$id_area'";
    $consulta2 = pg_query($conexion,$validar2);
    $num2 = pg_num_rows($consulta2);

    $validar3 = "SELECT * FROM servicio where id_area = '$id_area'";
    $consulta3 = pg_query($conexion,$validar3);
    $num3 = pg_num_rows($consulta3);

    //Si es mayor a cero significa que si existe una o más actividades relacionadas con esta materia 
    if ($num > 0) 
    {
        echo "<script>alert('Primero debes de eliminar la/las actividades que gestione el área con el siguiente ID: $id_area'); window.location= 'Actividades.php'</script>";
    }
    if ($num2 > 0) 
    {
        echo "<script>alert('Primero debes de eliminar el/los materiales que corresponde utiliza el área con el siguiente ID: $id_area'); window.location= 'Materiales.php'</script>";
    }
    if ($num3 > 0) 
    {
        echo "<script>alert('Primero debes de eliminar el/los servicios que paga el area con el siguiente ID: $id_area'); window.location= 'Servicios.php'</script>";
    }
    else
    {
        $query = "DELETE FROM area WHERE id_area = '$id_area'";
        $consulta = pg_query($conexion,$query);

        if ($consulta) 
        {
            header("Location: Areas.php");
            
        }
        else
        {
            echo "<script>alert('Error al eliminar, intenta de nuevo'); window.location= 'Areas.php'</script>";
        }

    }


?>