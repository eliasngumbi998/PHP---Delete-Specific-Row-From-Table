<?php
	require_once 'conn.php';
 
	$firstname = $_POST['firstname'];
	$lastname = $_POST['lastname'];
	$address = $_POST['address'];
 
	mysqli_query($conn, "INSERT INTO `member` VALUES('', '$firstname', '$lastname', '$address')") or die(mysqli_error());
 
	header("location: index.php");
?>
