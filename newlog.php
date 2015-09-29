<?php
include('logincheck.php');

?>

<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="CSS/newlog.css">
<title>Login</title>
</head>

<body>
	<div id="container">
		<div id="mainpic">
       
        	<h1>EM<span class="off">Reader</span></h1>
            <h2>Official Web Site</h2>
           
        </div>  
        
         <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php.">Home</a></li>
                <li class="menuitem"><a href="About Us.php">About Us</a></li>
                <li class="menuitem"><a href="Register.php">Register</a></li>
                <li class="menuitem"><a href="Other Services.php">Other Services</a></li>
              <li class="menuitem"><a href="Contact us.php">Contact us</a></li>
            </ul>
        </div> 

    <form class="login" action="" method="post">
		<h1>Login</h1>
			<input type="text" name="username" class="login-input" placeholder="Username">
			<input type="password" name="password" class="login-input" placeholder="Password">
			<button type="submit" name="submit" value="Login" class="login-submit">Login</button>
            <span><?php echo $error; ?></span>
    
  	</form>
	

	</div>

<div id="footer"><h3>The reference sites...</h3></div>
     <div id ="footimage">
         <ul>
            	<li class="bottomlayer1"><a href="http://www.powermin.gov.lk/"></a></li>
                <li class="bottomlayer2"><a href="http://www.leco.lk/"></a></li>
                <li class="bottomlayer3"><a href="http://www.ltl.lk/"></a></li>
         </ul>
               <br> <h4>Copyright @ 2015 EMReader. All rights reserverd</h4>
     </div>
 
</body>
</html>