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
	
	echo var_dump($firstName);
	echo "<br>";
	echo var_dump($age);
	echo "<br>";
	echo var_dump($height);
	echo "<br>";
	echo var_dump($school);
	echo "<br>";
	// echo var_dump($courses);
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
	// for loop
	for ($i = 0; $i<5; $i++){
		echo "This is round ".$i."<br>";
	}
	//conditional statement
	if ($age == 18){
		echo "Your an adult";
	}
	elseif ($age > 18) {
		echo "A bit old";
	}else{
		echo "<br>A bit young";
	}
	//arrays 
	$courses = ['BBIT','ICS'];
	$myFirstArray = array('strathmore','uon','ku');//indexed arrays

	echo "<br>".$myFirstArray[1];

	//associative arrays
	$mySecondArray =array('John' => 14,'Alice'=> 13,'Jane'=>18);
	echo "<br>".$mySecondArray['Jane'];
	//loop through array
	foreach ($myFirstArray as $university){
		echo "I go to ".$university."<br>";
	}
	/*
	echo "<h1>Hello World $firstName</h1>";
	echo "welcome ".$firstName;*/
?>