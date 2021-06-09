<?php
	require('config/db.php');
	$postID = $_POST['identificador'];
	
	$queryID = "SELECT * FROM `licencias` WHERE `id` = '$postID'";
    $resultID = mysqli_query($conn, $queryID);
	
    if (mysqli_num_rows($resultID) == 1) {
		header("Location: modificar/?id=" . $postID);
	} else {
		header("Location: ../modificaciones/?q=error");
	}
?>