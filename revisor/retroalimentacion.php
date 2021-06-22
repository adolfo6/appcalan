<?php
/*Requerir conexion con la BD*/
   $servidor = "databaseic.mysql.database.azure.com";
   $nombreusuario = "tacodorado@databaseic";
   $password = "taco.123";
   $db = "zona_tic";
   
   $conexion = new mysqli($servidor, $nombreusuario, $password, $db);

   if($conexion->connect_error){
     die("Conexion fallida: " . $conexion->connect_error);
   }

  $message = '';

  if (isset($_POST['idRetro']) && isset($_POST['titulo']) && isset($_POST['numControl']) && isset($_POST['fecha']) && isset($_POST['contenidoRetro'])) {
	/*Vincular parametros*/
	$idRetro = $_POST ['idRetro'];	
	$titulo = $_POST ['titulo'];
	$numControl = $_POST ['numControl'];
	$fecha = $_POST ['fecha'];
	$contenidoRetro = $_POST ['contenidoRetro'];
		


    
    /*Agregar datos a la BD*/
    $sql = "INSERT INTO retroalimentacion (idRetro, titulo, numControl, fecha, contenidoRetro) VALUES ('$idRetro', '$titulo', '$numControl', '$fecha', '$contenidoRetro' )"; 
    
    /*Ejecutar consulta para evitar usuarios repetidos*/

    $verificar_retro = mysqli_query($conexion, "SELECT * FROM retroalimentacion WHERE idRetro = '$idRetro'");
    if (mysqli_num_rows($verificar_retro) > 0) {
      $verificar_retro = "El id de retro ya existe";

      include_once 'agregar.php';
    }


    


  if ($conexion->query($sql) === true){
    echo "<script> alert('Retroalimentación enviada exitosamente');
    location.href= 'agregar.php';
    </script>";
    
} else{
    die ("Lo sentimos ha ocurrido un error al intentar registrarlo: " . $conexion->error);
}
$conexion->close();

}
?>