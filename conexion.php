<?php

    $conexion = pg_connect("host=localhost dbname=FinanzasZOO user=postgres password=");

    if($conexion == FALSE){
        echo 'Lo sentimos, no pudimos realizar la conexión';
    }


?>