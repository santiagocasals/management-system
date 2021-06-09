<?php
	error_reporting(0);
	require('../config/db.php');
	
	$email = $_POST['username'];
	$password = md5($_POST['password']);
	
    $queryEmail = "SELECT * FROM `usuarios` WHERE `email` = '$email'";
    $resultEmail = mysqli_query($conn, $queryEmail);
	
    if (mysqli_num_rows($resultEmail) == 1) {
        
		$queryPassword = "SELECT * FROM `usuarios` WHERE `password` = '$password'";
		$resultPassword = mysqli_query($conn, $queryEmail);
		$rowPassword = mysqli_fetch_assoc($resultPassword); 
		
		if ($rowPassword['password'] == $password) {
			
			session_start();
			
			$_SESSION["message"] = "";
			$_SESSION["loggedin"] = true;
			$_SESSION["username"] = $email;
			$_SESSION["password"] = $password;
			header("Location: ../dashboard/");
			die();
			
		} else {
			header("Location: /?q=error");
		}
		
    } else {
        header("Location: /?q=error");
    }

	
?>