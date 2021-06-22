<?php

    $host= "databaseic.mysql.database.azure.com";
    $user= "tacodorado@databaseic";
    $password="taco.123";
    $bd="zona_tic";

    $conectar = mysqli_connect($host, $user, $password, $bd) or dile ("Error en la conexión");


?>