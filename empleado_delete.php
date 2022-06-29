<?php

    require 'conexion.php';

    $id_emp = $_GET['id'];

    $validar = "SELECT * FROM actividad where id_emp = '$id_emp'";
    $consulta = pg_query($conexion,$validar);
    $num = pg_num_rows($consulta);

    $validar2 = "SELECT * FROM serviciosm where id_emp = '$id_emp'";
    $consulta2 = pg_query($conexion,$validar2);
    $num2 = pg_num_rows($consulta2);

    $validar3 = "SELECT * FROM sueldo where id_emp = '$id_emp'";
    $consulta3 = pg_query($conexion,$validar3);
    $num3 = pg_num_rows($consulta3);

    //Si es mayor a cero significa que si existe una o más actividades relacionadas con esta materia 
    if ($num > 0) 
    {
        echo "<script>alert('Primero debes de eliminar las actividades que realice el empleado con el siguiente ID: $id_emp'); window.location= 'Actividades.php'</script>";
    }
    if ($num2 > 0) 
    {
        echo "<script>alert('Primero debes de eliminar el servicio médico que corresponde al empleado con el siguiente ID: $id_emp'); window.location= 'Servicios_med.php'</script>";
    }
    if ($num3 > 0) 
    {
        echo "<script>alert('Primero debes de eliminar sueldo que corresponde al empleado con el siguiente ID: $id_emp'); window.location= 'Sueldos.php'</script>";
    }
    else
    {
        $query = "DELETE FROM empleado WHERE id_emp = '$id_emp'";
        $consulta = pg_query($conexion,$query);

        if ($consulta) 
        {
            header("Location: Empleados.php");
            
        }
        else
        {
            echo "<script>alert('Error al eliminar, intenta de nuevo'); window.location= 'Empleados.php'</script>";
        }

    }


?>