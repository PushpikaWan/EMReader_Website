<?php
session_start();
include ('database.php');

$error='';


if (isset($_POST['submit'])){
	
    if (empty($_POST['username']) || empty($_POST['password'])){
		$error = "Username or Password is invalid";
		
    } 
	else {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		$username = stripslashes($username);
		$password = stripslashes($password);
		$username = mysql_real_escape_string($username);
		$password = mysql_real_escape_string($password);
		
        $query = "SELECT * FROM details WHERE email = '$username' AND password = '$password'";
        $result = $db->query($query);
		
		
		 $rowcount=mysqli_num_rows($result);
		
		if($rowcount !=0){
		
			while($row = mysqli_fetch_assoc($query)){
		
				$dbusername = $row['username'];
				$dbpassword = $row['password'];
				$dbname = $row['fname'];
				$_SESSION['username']=$dbname;
	
		
			}
		
		}

        if ($rowcount === false) {
			
            echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
            exit;
        }

        if ($rowcount == 1) {
			$_SESSION['username']=$email; 
			header("location: Afterreg.php");
		} else {
			$error = "Username or Password is invalid";
		}

        $error = "<b>Username and password do not match</b><br/>";
    }
}
?>