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

        $numControl = $_POST["txtnumControl"];
        $correo = $_POST["txtcorreo"];
        $nombre = $_POST["txtnombre"];
        $apellidoPat = $_POST["txtapellidoPat"];
        $apellidoMat = $_POST["txtapellidoMat"];
        $contrasena = $_POST["txtcontrasena"];
        

        mysqli_query($conexion, "UPDATE usuario set  correo='$correo', nombre='$nombre', apellidoPat='$apellidoPat', apellidoMat='$apellidoMat', contrasena='$contrasena'  where numControl= '$numControl' ") or die ("Error al actualizar ");
        

        mysqli_close($conexion);
        echo "<script> alert('Datos actualizados correctamente');
        location.href= 'miperfil.php';
        </script>";
    ?>
</body>
</html>
