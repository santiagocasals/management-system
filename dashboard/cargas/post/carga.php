<?php
	require('config/db.php');
	
	$postUsername = $_POST['username'];
	$postPassword = $_POST['password'];
	$postComentario = $_POST['data'];
	
	$query = "INSERT INTO licencias (nombre, password, comentarios) VALUES ('" . $postUsername . "', '" . $postPassword . "', '" . $postComentario . "')";
	
	if (!empty($postUsername) || !empty($postPassword) || !empty($postPassword)) {
		if (mysqli_query($conn, $query)) {
			$id = mysqli_insert_id($conn);
			$message = '<div class="alert alert-success" role="alert">Los datos se han cargado con éxito con el ID ' . $id . '</div>';
			header("Location: ../?q=success&id=" . $id);
		} else {
			$message = '<div class="alert alert-warning" role="alert">Los datos no han sido cargados debido a un problema./div>';
			header("Location: ../?q=error");
		}
	}
?>