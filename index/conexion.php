

<?php
	function conectar()
	{
		$servidor = "databaseic.mysql.database.azure.com";
		$usuario = "tacodorado@databaseic";
		$clave = "taco.123";
		$bd = "zona_tic";
		
		// Se conecta al SGBD 
		if(!($con=mysqli_connect($servidor,$usuario,$clave)))
		{
			die("Error: No se pudo conectar");
		}
		
		// Selecciona la base de datos 
		if(!mysqli_select_db($con,$bd))
		{
			die("Error: Base de Datos no disponible");
		}
		
		return $con;
	}
?>

