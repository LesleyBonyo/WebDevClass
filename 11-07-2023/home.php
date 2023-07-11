<?php
	// php code goes here
	# single line comment
	/* multiple
	line comment
	*/
	$firstName = "Clara";
	$age = 12;
	$height = 14.3;
	$school = true;
	$courses = ['BBIT','ICS'];
	echo var_dump($firstName);
	echo "<br>";
	echo var_dump($age);
	echo "<br>";
	echo var_dump($height);
	echo "<br>";
	echo var_dump($school);
	echo "<br>";
	echo var_dump($courses);
	//functions
	function getProduct(){
		$num1 = 13;
		$num2 = 20;
		echo $num1 * $num2;
	}
	getProduct();

	//function with parameters
	function myFunction($num1,$num2){
		return $num1 * $num2;
	}
	echo myFunction(100,278);


	/*
	echo "<h1>Hello World $firstName</h1>";
	echo "welcome ".$firstName;*/
?>