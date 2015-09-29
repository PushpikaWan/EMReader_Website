<?php

include ('database.php');

session_start();

if (isset($_POST['submit'])){
	
    if (empty($_POST['username']) || empty($_POST['password'])){
        echo "<b>You must complete all sections</b><br/>";
		
    } 
	else {
		
		$username = $_POST['username'];
		$password = $_POST['password'];
		
        $query = "SELECT * FROM details WHERE email = '$username' AND password = '$password'";
        $result = $db->query($query);
		
		 $rowcount=mysqli_num_rows($result);
		

        if ($rowcount === false) {
			
            echo "Could not successfully run query ($sql) from DB: " . mysqli_error();
            exit;
        }

        if ($rowcount > 0) {
            $_SESSION['username'] = $username;
            header('Location: Afterreg.php');
            exit;
        }

        echo "<b>Username and password do not match</b><br/>";
    }
}
?>