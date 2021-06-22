<?php

$server = "localhost";
$usuario ="root";
$contraseña = "";
$bd = "zona_tic";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

    $titulo=$_REQUEST['titulo'];
    

    $query="DELETE FROM  articulo WHERE titulo= '$titulo' ";
    $resultado=$conexion->query($query);

    if($resultado){
        header("Location: datosadm.php");
    }
    else{
        echo"Modificación no exitosa";
    }

?>