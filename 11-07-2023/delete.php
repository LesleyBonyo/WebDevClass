<?php 
	include 'connect.php';
  if (isset($_GET['deleteid'])) {
  	$id = $_GET['deleteid'];

  	$sql = "DELETE FROM register where id=$id";
  	$result = mysqli_query($connect,$sql);

  	if ($result) {
  		//echo "deleted successfully";
  		header('location:display.php');
  	} else{
  		echo "not successful";
  	}
  }

?>