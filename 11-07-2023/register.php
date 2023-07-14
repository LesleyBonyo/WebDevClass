<?php
//$_POST
//isset()
if (isset($_POST['studentName'],$_POST['course'])) {
	
	$studentName = $_POST['studentName'];
 	$course = $_POST['course'];

 	echo "Welcome ".$studentName."<br>You have registered for ".$course;
	// code...
}
 


?>