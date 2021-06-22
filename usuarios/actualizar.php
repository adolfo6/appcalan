<!DOCTYPE>
<html>
<head>
    <title>Actualizar</title>
</head>
<body>
    <?php
        $server = "databaseic.mysql.database.azure.com";
        $usuario ="tacodorado@databaseic";
        $contraseña = "taco.123";
        $bd = "zona_tic";

        $conexion = mysqli_connect($server, $usuario, $contraseña, $bd) or die ("Error en la conexion");

        $numControl=$_REQUEST['txtnumControl'];
        $correo = $_POST["txtcorreo"];
        $nombre = $_POST["txtnombre"];
        $apellidoPat = $_POST["txtapellidoPat"];
        $apellidoMat = $_POST["txtapellidoMat"];
        $contrasena = $_POST["txtcontrasena"];
        

        $query="UPDATE usuario set  correo='$correo', nombre='$nombre', apellidoPat='$apellidoPat', apellidoMat='$apellidoMat', contrasena='$contrasena'  WHERE numControl= '$numControl' ";
        $resultado=$conexion->query($query);

    if($resultado){
        header("Location: datosperfil.php");
    }
    else{
        echo"Modificación no exitosa";
    }

        mysqli_close($conexion);
        echo "<script> alert('Datos actualizados correctamente');
        location.href= 'editarperfil.php';
        </script>";
    ?>
</body>
</html>
