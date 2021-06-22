<?php

$server = "tacodorado@databaseic";
$usuario ="tacodorado@databaseic";
$contraseña = "taco.123";
$bd = "zona_tic";

$conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

    $titulo=$_REQUEST['titulo'];
    $idCategoria = $_POST['idCategoria'];
    $idEstado = $_POST['idEstado'];
    $imagen = $_POST['imagen'];
    $resena = $_POST['resena'];
    $contenidoArt = $_POST['contenidoArt'];
    $palabraClaveu = $_POST['palabraClaveu'];
    $palabraClaved = $_POST['palabraClaved'];
    $palabraClavet = $_POST['palabraClavet'];
    $palabraClavec = $_POST['palabraClavec'];
    $palabraClaveci = $_POST['palabraClaveci'];

    $query="UPDATE articulo SET idCategoria='$idCategoria', idEstado='$idEstado', imagen='$imagen', resena='$resena', contenidoArt='$contenidoArt', palabraClaveu='$palabraClaveu', palabraClaved='$palabraClaved', palabraClavet='$palabraClavet', palabraClavec='$palabraClavec', palabraClaveci='$palabraClaveci' WHERE titulo= '$titulo' ";
    $resultado=$conexion->query($query);

    if($resultado){
        header("Location: cons.php");
    }
    else{
        echo"Modificación no exitosa";
    }

?>