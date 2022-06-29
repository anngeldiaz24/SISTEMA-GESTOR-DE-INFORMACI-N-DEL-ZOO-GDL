<?php

    require 'conexion.php';

    $id_emp = pg_escape_string($_POST['id_emp']);
    $nom_emp = pg_escape_string($_POST['nom_emp']);
    $puesto = pg_escape_string($_POST['puesto']);
    $edad = pg_escape_string($_POST['edad']);

    //Trigger valida_edad_empleado()
    if ($edad < 18 || $edad > 70) 
    {
        echo "<script>alert('No es apto para el empleo'); window.location= 'Empleados.php'</script>";
        
    }
    else
    {
        $query = "INSERT INTO empleado (id_emp, nom_emp, puesto, edad) VALUES ('{$id_emp}', '{$nom_emp}', '{$puesto}', '{$edad}')";
        $consulta = pg_query($conexion, $query);

        if($consulta)
        {
            header("Location: Empleados.php");
        }
        else
        {
            echo "<script>alert('Error al insertar, intenta de nuevo'); window.location= 'Empleados.php'</script>";
        }

    }
   

?>