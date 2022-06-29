<?php

    require 'conexion.php';

    $id_act = pg_escape_string($_POST['id_act']);
    $nom_act = pg_escape_string($_POST['nom_act']);
    $horas_lab = pg_escape_string($_POST['horas_lab']);
    $id_emp = pg_escape_string($_POST['id_emp']);
    $id_area = pg_escape_string($_POST['id_area']);

    //Trigger horas_lab()
    if(strlen(trim($horas_lab)) < 1)
    {
        echo "<script>alert('Este valor no puede quedar vacío'); window.location= 'Actividades.php'</script>";
    }
    else
    {
        $query = "INSERT INTO actividad (id_act, nom_act, horas_lab, id_emp, id_area) VALUES ('{$id_act}', '{$nom_act}', '{$horas_lab}', '{$id_emp}', '{$id_area}')";
        $consulta = pg_query($conexion, $query);

        if($consulta)
        {
            header("Location: Actividades.php");
        }
        else
        {
            echo "<script>alert('Error al insertar, intenta de nuevo'); window.location= 'Actividades.php'</script>";
        }

    }

    

?>