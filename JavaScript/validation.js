// JavaScript Document

	

function phoneNoVal(){
	var phone = document.getElementById("con").value;
	if(phone.length == 0){
		producePrompt("","commentPhonePrompt","con",null);
		return true;
	}
	if(phone.length > 10){
		producePrompt("Wrong Number.Check It Again","commentPhonePrompt","con","red");
		return false;
	}
	if(!phone.match(/^[0-9]+$/)){
		producePrompt("Please Only Include Digits","commentPhonePrompt","con","red");
		return false;
	}
	if(phone.length < 10 && phone.length > 0){
		producePrompt("Number Should Contain 10 Digits","commentPhonePrompt","con","red");
		return false;
	}
	producePrompt("Valid Number","commentPhonePrompt","con","green");
	return true;
}


function fnameVal(){
	var fname = document.getElementById("fname").value;
	if(fname.length == 0){
		producePrompt("First Name is Required","commentNamePrompt","fname","red");
		return false;
	}
	producePrompt("","commentNamePrompt","fname",null);
	return true;
}

function lnameVal(){
	var lname = document.getElementById("lname").value;
	if(lname.length == 0){
		producePrompt("Last Name is Required","commentLNamePrompt","lname","red");
		return false;
	}
	producePrompt("","commentNamePrompt","lname",null);
	return true;
}



function passwordVal(){
	var password = document.getElementById("password").value;
	if(password.length == 0){
		producePrompt("Password is Required","commentPasswordPrompt","password","red");
		return false;
	}
	producePrompt("","commentPasswordPrompt","password",null);
	return true;
}

function addressVal(){
	var address = document.getElementById("address").value;
	if(address.length == 0){
		producePrompt("Address is Required","commentAddressPrompt","address","red");
		return false;
	}
	producePrompt("","commentAddressPrompt","address",null);
	return true;
}

function meterIdVal(){
	var meterid = document.getElementById("Meterid").value;
	if(meterid.length == 0){
		producePrompt("Meter ID is Required","commentUserNamePrompt","Meterid","red");
		return false;
	}
	producePrompt("","commentUserNamePrompt","Meterid",null);
	return true;
}


function textFieldShouldNotEmpty(){
	var fname = document.getElementById("fname").value;
	var lname = document.getElementById("lname").value;
	var address = document.getElementById("address").value;	
	var meterid = document.getElementById("Meterid").value;	
	var password = document.getElementById("password").value;
	
	
	
	if(fname.length==0){
		producePrompt("First name is Required","commentNamePrompt","fname","red");
		
		if(lname.length==0){
		producePrompt("Last name is Required","commentLNamePrompt","lname","red");
		}
		
		if(address.length == 0){
			producePrompt("Address is Required","commentAddressPrompt","address","red");
		}
		
		if(meterid.length == 0){
			producePrompt("Meter ID is Required","commentUserNamePrompt","Meterid","red");
		}
		if(password.length == 0){
			producePrompt("Password is Required","commentPasswordPrompt","password","red");
		}
		
		
		
		return false;
	}
	
	
	if(meterid.length==0){
		producePrompt("Meter ID is Required","commentUserNamePrompt","Meterid","red");
		
		if(address.length == 0){
			producePrompt("Address is Required","commentAddressPrompt","address","red");
		}
		
		if(fname.length == 0){
			producePrompt("First name is Required","commentNamePrompt","fname","red");
		}
		
		if(lname.length==0){
		producePrompt("Last name is Required","commentLNamePrompt","lname","red");
		}
		
		if(password.length == 0){
			producePrompt("Password is Required","commentPasswordPrompt","password","red");
		}
	
		
		return false;
	}
	
	if(password.length==0){
		producePrompt("Password is Required","commentPasswordPrompt","password","red");
		
		if(address.length == 0){
			producePrompt("Address is Required","commentAddressPrompt","address","red");
		}
		
		if(meterid.length == 0){
			producePrompt("Meter ID is Required","commentUserNamePrompt","Meterid","red");
		}
		if(fname.length == 0){
			producePrompt("First name is Required","commentNamePrompt","fname","red");
		}
		
		if(lname.length==0){
			producePrompt("Last name is Required","commentLNamePrompt","lname","red");
		}
		
		return false;
	}
	
	
	
	if(address.length==0){
		producePrompt("Address is Required","commentAddressPrompt","address","red");
		
		if(fname.length == 0){
			producePrompt("First name is Required","commentNamePrompt","fname","red");
		}
		
		if(lname.length==0){
		producePrompt("Last name is Required","commentLNamePrompt","lname","red");
		}
		
		if(meterid.length == 0){
			producePrompt("Meter ID is Required","commentUserNamePrompt","Meterid","red");
		}
		if(password.length == 0){
			producePrompt("Password is Required","commentPasswordPrompt","password","red");
		}
		
		
		return false;
	}
	
	
	if(lname.length==0){
		producePrompt("Last name is Required","commentLNamePrompt","lname","red");
		
		if(address.length == 0){
			producePrompt("Address is Required","commentAddressPrompt","address","red");
		}
		if(meterid.length == 0){
			producePrompt("Meter ID is Required","commentUserNamePrompt","Meterid","red");
		}
		if(fname.length == 0){
			producePrompt("First name is Required","commentNamePrompt","fname","red");
		}
		
		if(password.length == 0){
			producePrompt("Password is Required","commentPasswordPrompt","password","red");
		}
		return false;
	}
	
	return true;

}

function producePrompt(message,promptLocation,textField,color){
	document.getElementById(promptLocation).innerHTML = message;
	document.getElementById(promptLocation).style.color = color;
	if(color=='red'){
		document.getElementById(textField).style.borderColor = color;
	}
	else{
		document.getElementById(textField).style.borderColor = null;		
	}
}

function trueVal(){
	
	if(textFieldShouldNotEmpty()){
		return true;
	}
return false;
}