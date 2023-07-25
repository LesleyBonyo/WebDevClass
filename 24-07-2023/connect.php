<?php
//establish database connection
	$server = "localhost";
	$user = "root";
	$password = "";
	$database = "nothing"; //created database

	$connect = mysqli_connect($server,$user,$password,$database);
	if (!$connect) {
		die(mysqli_error($connect));
	}
?>