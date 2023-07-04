// form validation

function validateForm(){
	let firstName = 
		document.getElementById('firstname').value;
	let lastName = 
		document.getElementById('lastname').value;
	let email = 
		document.getElementById('useremail').value;
	let password = 
		document.getElementById('userpassword').value;
	if (firstName == "" || lastName == "" || email == "" || password == "") {
		alert("Field should not be blank");
	} else if (!firstName.match(/^[A-Za-z]+$/)) {
		document.getElementById('result1').innerHTML = 
			"First Name should have alphabetic characters only";
		return false;
	} else if (password.length < 8){
		document.getElementById('result2').innerHTML = 
			"Password should have at least 8 characters only";
		return false;
	} else {
		alert("success");
	}

	return true;

}