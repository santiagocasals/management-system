<?php
	require('config/db.php');
	$postID = $_POST['identificador'];
	
	$queryID = "SELECT * FROM `licencias` WHERE `id` = '$postID'";
    $resultID = mysqli_query($conn, $queryID);
	
    if (mysqli_num_rows($resultID) == 1) {
		$rowID = mysqli_fetch_assoc($resultID); 
		$identificador = $rowID["nombre"];
		header("Location: ../?q=success&n=" . $postID . "&id=" . $identificador);
	} else {
		header("Location: ../?q=error");
	}
	
?>