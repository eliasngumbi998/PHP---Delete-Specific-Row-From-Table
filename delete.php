<?php
	require_once 'conn.php';
	mysqli_query($conn, "DELETE FROM `member` WHERE `mem_id`='$_REQUEST[id]'") or die(mysqli_error());
	header("location:index.php");
?>
