<?php
if(isset($_POST['submit'])){
		$errors = array();
		
		if(empty($_POST['fname'])){
			$errors['fname'] = "* First Name field cannot be empty.";
		}
		if(!preg_match("/^[a-z ]+$/i", $_POST['fname'])){
			$errors['fname'] = "* Invalid name! Name should only include alphabetic characters.";
		}
		
		if(empty($_POST['lname'])){
			$errors['lname'] = "* Name with initials field cannot be empty.";
		}
		
		if(empty($_POST['Meterid'])){
			$errors['Meterid'] = "* Meter Id field cannot be empty.";
		}elseif(!preg_match("/^[0-9]{9}(v|V|x|X)$/",$_POST['Meterid'])) {
			$errors['Meterid'] = "* Invalid Meter Id";
		}
		
		if(empty($_POST[''])){
			$errors['reg_no'] = "* registration no field cannot be empty.";
		}elseif(!preg_match("/^[0-9]{4}[0-9]{3}$/",$_POST['reg_no'])){
			$errors['reg_no'] = "* Invalied registration number.Check CapsLock ON!";
		}
		
		if(empty($_POST['index'])){
			$errors['index'] = "* index no field cannot be empty.";
		}elseif(!preg_match("/^[0-9]{8}$/",$_POST['index'])){
			$errors['index'] = "* Invalied index number.";
		}
		if(strlen($_POST['index'])!=8){
			$errors['index'] = "* Invalied index number number length.";
		}
		
		if(empty($_POST['address'])){
			$errors['address'] = "* Address cannot be empty.";
		}
		
		if(!preg_match("/^[0-9]{10}$/", $_POST['con'])){
			$errors['con'] = "* Invalid phone number.";
		}
		if(strlen($_POST['con'])!=10){
			$errors['con'] = "* Invalid phone number length.";
		}
		if(empty($_POST['con'])){
			$errors['con'] = "* Contact number field cannot be empty.";
		}
		
		$em=$_POST['email'];
		if(filter_var($em,FILTER_VALIDATE_EMAIL) === false){
			$errors['email'] = "* Invalied e-mail address.";
		}
		
		if(empty($_POST['dob'])){
			$errors['dob'] = "* Date of birth cannot be empty.";
		}		
	}
?>