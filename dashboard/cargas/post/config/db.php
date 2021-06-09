<?php

	$servername = "127.0.0.1";
	$database = "database";
	$username = "root";
	$password = "";

	$conn = new mysqli($servername, $username, $password, $database);

	if ($conn->connect_error) {
		die("Se ha producido un error al conectar a la base de datos: " . $conn->connect_error);
	}
	
?>