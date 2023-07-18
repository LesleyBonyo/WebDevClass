<?php
	//connect to db server
	$server = 'localhost';
	$user = 'root';
	$password = '';
	$db = 'nothing';

	$connect = mysqli_connect($server,$user,$password, $db);
	if ($connect){
		echo "Connection successful";
	} else {
		echo "not successful";
	}
	/*
	$sql = "CREATE DATABASE nothing";
	$result = mysqli_query($connect,$sql);
	if ($result) {
		echo "db created successfully";
	} else{
		echo mysqli_error($connect);
	}
	*/


?>