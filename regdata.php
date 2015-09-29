<?php session_start();?>

<?php

	include('database.php');
		$fname = $_POST['fname'];
		$lname = $_POST['lname'];
		$Address_no = $_POST['Address_no'];
		$Address_street = $_POST['Address_street'];
		$Address_city = $_POST['Address_city'];
		$con = $_POST['con'];
		$email = $_POST['email'];
		$no_meters = $_POST['no_meters'];
		$Meterid = $_POST['Meterid'];
		$password = $_POST['password'];
		$ConfirmPassword = $_POST['ConfirmPassword'];
		
	
			$query = "INSERT INTO details (fname, lname, Address_no, Address_street, Address_city, con, email, no_meters, mid, password, conpassword)
				VALUES ('{$fname}', '{$lname}', '{$Address_no}', '{$Address_street}', '{$Address_city}', '{$con}', '{$email}', '{$no_meters}', '{$Meterid}', '{$password}', '{$ConfirmPassword}' )";
			  
			//$result = mysqli_query($connection, $query);
			$result = $db->query($query);
			if(!$result){
				echo "failed";
				}
			else{
				echo "User registered successfully";
			}
		
	
	
	
		   
	header('Location: newlog.php');    
	
	
	
	
	
?>
<?php

mysqli_close($connection);
?>