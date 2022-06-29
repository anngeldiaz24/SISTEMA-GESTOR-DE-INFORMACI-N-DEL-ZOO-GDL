<?php
    require 'conexion.php';

    $id_emp = pg_escape_string($_POST['id_emp']);
    $nom_emp = pg_escape_string($_POST['nom_emp']);
    $puesto = pg_escape_string($_POST['puesto']);
    $edad = pg_escape_string($_POST['edad']);

    if ($edad < 18 || $edad > 70) 
    {
        echo "<script>alert('No es apto para el empleo para su edad'); window.location= 'Empleados.php'</script>";
        
    }
    else
    {
        $query = "UPDATE empleado SET nom_emp = '{$nom_emp}', puesto = '{$puesto}', edad = '{$edad}' WHERE id_emp = '{$id_emp}'";
        $consulta = pg_query($conexion, $query);

        if($consulta)
        {
            header("Location: Empleados.php");
        }
        else
        {
            echo "<script>alert('Error al actualizar, intenta de nuevo'); window.location= 'Empleados.php'</script>";
        }

    }

?>