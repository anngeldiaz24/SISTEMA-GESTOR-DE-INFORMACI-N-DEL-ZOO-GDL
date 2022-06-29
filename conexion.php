<?php

    $conexion = pg_connect("host=localhost dbname=FinanzasZOO user=postgres password=Mastergol10");

    if($conexion == FALSE){
        echo 'Lo sentimos, no pudimos realizar la conexión';
    }


?>