// getting html elements by ID
let number1 = 
document.getElementById("number1");
let number2 = 
document.getElementById("number2");

console.log(number1);
console.log(number2);
//function to get product
function getProduct(){
	let ourProduct = 
	number1.value * number2.value;
	//console.log(ourProduct);
	//alert("Your product is" + ourProduct);
	//document.getElementById("result").innerHTML
	let ourResult = document.getElementById("result")
	ourResult.innerHTML = "Product is " + ourProduct;
	return false;
}

//get html elements by their tag name
let ourParagraphs = 
		document.getElementsByTagName('p'); //array

console.log(ourParagraphs[1]);
//get html elements by class
let parClass = 
document.getElementsByClassName('parClass');

//change attribute of html element using JS
function changeImage(){
	let img = 
	document.getElementById("myImg");
	img.src = "cat.jpg";

	return false;
}
// change the style of an element
let img = document.getElementById("myImg");
img.style.width = "700px";
img.style.borderWidth = "7px";
img.style.borderStyle = "solid";
img.style.borderColor = "red";
img.style.borderRadius = "95px";
















console.log(parClass[1]);






