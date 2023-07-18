<?php 
include 'connect.php';
if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name = $_POST['username'];
	$password = $_POST['password'];

	$sql = "INSERT INTO register(name,password) VALUES('$name','$password')";
	$result = mysqli_query($connect,$sql);
	if ($result) {
		echo "registered successfully";
	} else{
		echo "not successful";
	}


}




?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Registration</title>
</head>
<body>
	<h1>Register</h1>
	<form method="post">
		<label>Name</label>
		<input type="text" name="username" placeholder="Enter your name">
		<label>Password</label>
		<input type="Password" name="password" placeholder="Enter your password">
		<input type="submit" name="submit" value="register">
	</form>
</body>
</html>