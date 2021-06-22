<?php
$host = "databaseic.mysql.database.azure.com";
$dbuser = "tacodorado@databaseic";
$dbpwd = "taco.123";
$db = "zona_tic";

$connect = mysqli_connect ($host, $dbuser, $dbpwd, $db);
	if($connect)
		echo ("No se ha conectado a la base de datos");
	else
		$select = mysqli_select_db ($db);
?>