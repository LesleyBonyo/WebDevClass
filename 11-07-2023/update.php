<?php 
include 'connect.php';
$id = $_GET['updateid'];
$sql = "SELECT * FROM register WHERE id=$id";
$result = mysqli_query($connect,$sql);
if ($result) {
	$row = mysqli_fetch_assoc($result);
	$name = $row['name'];
	$password = $row['password'];
}


if ($_SERVER['REQUEST_METHOD']=='POST') {
	$name = $_POST['username'];
	$password = $_POST['password'];

	$sql = "UPDATE register set name='$name',password='$password' WHERE id=$id";
	$result = mysqli_query($connect,$sql);
	if ($result) {
		//echo "updated successfully";
		header('location:display.php');
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
	<title>Update User Details</title>
</head>
<body>
	<h1>Update</h1>
	<form method="post">
		<label>Name</label>
		<input type="text" name="username" placeholder="Enter your name" value="<?php echo $name; ?>">

		<label>Password</label>
		<input type="Password" name="password" placeholder="Enter your password" value="<?php echo $password ?>">
		<input type="submit" name="submit" value="update">
	</form>
</body>
</html>