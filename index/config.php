<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$database = "zona_tic";

$conexion = mysqli_connect($servidor, $usuario, $password)or die(mysqli_error($conexion));
mysqli_select_db($conexion, $database)or die(mysqli_error($conexion));
?>