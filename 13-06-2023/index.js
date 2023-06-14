console.log("External Js file");

/*this is a 
 multiple line comment 
*/
// this is a single line comment

// js datatypes
var firstName = "Clara"; //string
var firstName = "Lara";
console.log(firstName);

let lastName = true; // boolean
//let lastName = "Lara"
console.log(lastName);

const age = 12; //number

//age = 13;



var unit = null;
var school; //undefined
let ourArray = [12, 13, 15, 11];
//object
let ourObject = {
	firstName: "Clara",
	lastName: true,
	age: 12,
	studentDetails: function(){
		console.log("The student is called " 
			+ this.firstName + ". She is" 
			+ this.age + " years old")
	}
}


console.log(typeof firstName);
console.log(typeof lastName);
console.log(typeof age);
console.log("type of our array is", typeof ourArray);
console.log("Age of the third student is", ourArray[2]);


ourObject.studentDetails();
//arithmentic operators: + - * /
let sum;
sum = age + age //addition
console.log(sum);
//sum = sum + 1;
sum += 1;
console.log(sum);
// comparison operators: > < == >= <= != ===
console.log(12 != 13);









