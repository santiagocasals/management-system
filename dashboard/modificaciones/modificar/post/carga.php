<?php
	require('config/db.php');
	
	$postID = $_POST['postID'];
	$postUsername = $_POST['username'];
	$postPassword = $_POST['password'];
	$postComentario = $_POST['data'];
	
	$query = "UPDATE licencias SET nombre = '$postUsername', password = '$postPassword', comentarios = '$postComentario' where id = '$postID' ";
	
	if (!empty($postUsername) || !empty($postPassword) || !empty($postComentario)) {
		if (mysqli_query($conn, $query)) {
			header("Location: ../?q=success&id=" . $postID . "&username=" . $postUsername);
		} else {
			header("Location: ../?q=error");
		}
	}
?>