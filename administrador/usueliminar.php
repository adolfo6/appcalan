<?php

$server = "databaseic.mysql.database.azure.com";
$usuario ="tacodorado@databaseic";
$contraseña = "taco.123";
$bd = "zona_tic";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

    $numControl=$_REQUEST['numControl'];
    

    $query="DELETE FROM  usuario WHERE numControl= '$numControl' ";
    $resultado=$conexion->query($query);

    if($resultado){
        header("Location: datosusua.php");
    }
    else{
        echo"Modificación no exitosa";
    }

?>