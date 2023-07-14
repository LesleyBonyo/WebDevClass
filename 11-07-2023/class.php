<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Php Class</title>
</head>
<body>
	<?php 
	$courses = array('ICS','DBIT','BCOM','BBIT');
	?>
	<h1>Student Registration</h1>
	<form action="register.php" method="post">
		<label>Student Name</label>
		<input type="text" name="studentName" placeholder="Enter your name">
		<label>Course</label>
		<select name="course">
			<option value="">--select course--</option>
			<?php 
				foreach ($courses as $course){
					echo "<option value=$course>$course</option>";
				}

			?>
		</select>
		<input type="submit" name="submit">
	</form>

</body>
</html>