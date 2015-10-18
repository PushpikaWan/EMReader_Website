<?php
session_start();
include ('database.php');

$error='';


if (isset($_POST['submit'])){
	
    if (empty($_POST['Email_address']) || empty($_POST['password'])){
		$error = "Email address or Password is invalid";
		
    } 
	else {
		
		$Email_address = $_POST['Email_address'];
		$password = $_POST['password'];
		//$Email_address = stripslashes($Email_address);
		//$password = stripslashes($password);
		//$Email_address = mysql_real_escape_string($Email_address);
		//$password = mysql_real_escape_string($password);
		
        $query = "SELECT * FROM UserDetail WHERE Email_address = '$Email_address'  AND Password = '$password'";
        $result = $db->query($query);
		
		
		 $rowcount=mysqli_num_rows($result);
		
		if($rowcount !=0){
		
			while($row = mysqli_fetch_assoc($result)){
		
				$dbuseremail = $row['Email_address'];
				$dbpassword = $row['Password'];
				$dbname = $row['First_name'];
				$_SESSION['username']=$dbname;
	
		
			}
		
		}

        if ($rowcount === false) {
			
            echo "Could not successfully run query ($query) from DB: " . mysqli_error();
            exit;
        }

        if ($rowcount == 1) {
			$_SESSION['username']=$dbname;  //changed_me
			header("location: Afterreg.php");
		} else {
			$error = "Username or Password is invalid";
		}
		$result->free();
        $error = "<b>Username and password do not match</b><br/>";
    }
}
?>