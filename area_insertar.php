<?php

    require 'conexion.php';

    $id_area = pg_escape_string($_POST['id_area']);
    $nom_area = pg_escape_string($_POST['nom_area']);
    $sector = pg_escape_string($_POST['sector']);
    $cant_trab = pg_escape_string($_POST['cant_trab']);

    //Trigger valida_cant_trabajadores()
    if ($cant_trab < 10 || $cant_trab > 50) 
    {
        echo "<script>alert('Debe haber obligatoriamente más de 10 trabajadores y límite 50 en cualquier área'); 
        window.location= 'Areas.php'</script>";
        
    }
    else
    {
        $query = "INSERT INTO area (id_area, nom_area, sector, cant_trab) VALUES ('{$id_area}', '{$nom_area}', '{$sector}', '{$cant_trab}')";
        $consulta = pg_query($conexion, $query);

        if($consulta)
        {
            header("Location: Areas.php");
        }
        else
        {
            echo "<script>alert('Error al insertar, intenta de nuevo'); window.location= 'Areas.php'</script>";
        }


    }

    

?>