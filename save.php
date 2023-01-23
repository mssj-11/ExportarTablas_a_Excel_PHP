<?php

	require_once 'conn.php';
	
	if(ISSET($_POST['save'])){
		$name = $_POST['name'];
		$lastname = $_POST['lastname'];
		$tel = $_POST['tel'];
		$address = $_POST['address'];
		
		mysqli_query($conn, "INSERT INTO clients VALUE('' ,'$name', '$lastname', '$tel', '$address')") or die(mysqli_errno());
		header('location: index.php');
	}

?>