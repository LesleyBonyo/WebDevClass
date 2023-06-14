//functions
{
	//block scope
	let lastName = "Tim";
}
// function without parameter
function findSum(){
	let number1 = 12;
	let number2 = 14;
	return number1 + number2;
}
//console.log(number2);
let newSum = findSum();
console.log(newSum);
// function with parameters
function getProduct(num1,num2){
	return num1 * num2;
}

let myProduct;
myProduct = getProduct(5, 2);
console.log("product value is " 
	+ myProduct);

//conditional statements
let age = 18;
if (age < 18){
	console.log("\n Too young");
}
else if(age== 18){
	console.log("\n perfect");
}
else{
	console.log("Too old");
}

//looping
for(let i = 1; i < 6; i++){
	console.log("This is sentence", i);
}

// get html elements
//using an element's id
let number1 = 
document.getElementById("number1");
console.log(number1);

//using a class
let ourNumbers = 
document.getElementsByClassName("numbers");
//using a tag in html
let ourPars = 
document.getElementsByTagName('p');


















