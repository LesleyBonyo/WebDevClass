<?php 
include 'connect.php';
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "INSERT INTO users(email,password) VALUES('$email','$password')";
	$result = mysqli_query($connect,$sql);
	if ($result) {
		//echo "<div>Signup successful. Go to <a href='login.php'>Login</a></div>";
		header("location:login.php");
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
	<title>SignUp</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>
	<div class="container">
		<h1 class="text-center">Sign Up</h1>
<form method="post">
	
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="email">
    
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button type="submit" class="btn btn-primary">SignUp</button>
  <div>Already have an acount? <a href="login.php">Login</a></div>

</form>
</div>
</body>
</html>