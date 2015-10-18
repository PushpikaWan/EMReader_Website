<?php session_start();?>

<?php

	include('database.php');
	
	$Type = "Consumer";
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$Address_no = $_POST['Address_no'];
	$Address_street = $_POST['Address_street'];
	$Address_city = $_POST['Address_city'];
	$con = $_POST['con'];
	$email = $_POST['email'];
	$no_meters = $_POST['no_meters'];
	$inputs = $_POST['inputs'];
	$password = $_POST['password'];
	$ConfirmPassword = $_POST['ConfirmPassword'];
	$meter_1=$_POST['inp1'];
	$meter_2=$_POST['inp2'];
	$meter_3=$_POST['inp3'];
	$meter_4=$_POST['inp4'];
	$meter_5=$_POST['inp5'];
	
	$seasons = array();
    $seasons[0]=$meter_1;
    $seasons[1]=$meter_2;
    $seasons[2]=$meter_3;
    $seasons[3]=$meter_4;
    $seasons[4]=$meter_5;

	
	$query = "INSERT INTO UserDetail ( Type, First_name, Last_name, Address_no, Address_street, Address_city, No_Of_Meters, Contact, Email_address, Password)
			  VALUES ( '{$Type}', '{$fname}', '{$lname}', '{$Address_no}', '{$Address_street}', '{$Address_city}', '{$no_meters}', '{$con}', '{$email}', '{$password}')";
	
	$query1 = "SELECT User_ID FROM UserDetail WHERE Email_address = '$email'  AND Password = '$password'";
	
			  
	$result=$db->query($query);
	$result1 = $db->query($query1);
	$rowcount=mysqli_num_rows($result1);
		
		if($rowcount !=0 && $result){
		
			while($row = mysqli_fetch_assoc($result1)){
	
				$User_ID = $row['User_ID'];
			}
			
			for($x = 0; $x <($no_meters); $x++){
			
				$db->query("INSERT INTO Meter(Meter_ID,User_ID) VALUES ($seasons[$x], $User_ID)");
            
			}
		}
	
	
	if(!$result && !$result1){
	
		echo "failed";
	
	}
	else{
	
	
	
		   
	header('Location: newlog.php');    
	
	
	}
	
	
?>
<?php

$db->mysqli_close();
?>