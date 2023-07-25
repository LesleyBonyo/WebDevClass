<?php
	session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Home</title>
</head>
<body>
	<p>Welcome to you profile, your email is <?php echo $_SESSION['email'];?></p>
	<button><a href="logout.php">Logout</a></button>
</body>
</html>