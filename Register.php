<!DOCTYPE html>

<html>
<head>
<meta charset="utf-8" />
<link href="CSS/register.css" rel="stylesheet" type="text/css" />
<link href="CSS/common.css" rel="stylesheet" type="text/css" />
<title>Register</title>
<script type="text/javascript">
	var image1 = new Image()
	image1.src = "Images/1.jpg"
	var image2 = new Image()
	image2.src = "Images/2.jpg"
	var image3 = new Image()
	image3.src = "Images/3.jpg"
	var image4 = new Image()
	image4.src = "Images/4.jpg"
	var image5 = new Image()
	image5.src = "Images/5.jpg"
	var image6 = new Image()
	image6.src = "Images/6.jpg"
</script>
</head>

<body>

<div id="container">
		<div id="mainpic">
        <form id = "Login" action ="newlog.php" method = "post">
			<input type = "submit" value = "Login" id="loginButton"/>

		</form>
		
		<div id = "slideshow">
            <p><img src="Images/1.jpg" width="1341" height="350" name="slide" /></p>
		  <script type="text/javascript">
        		var step=1;
        			function slideit(){
            			document.images.slide.src = eval("image"+step+".src");
            				if(step<6)
                				step++;
            				else
                				step=1;
            			setTimeout("slideit()",3500);
        			}
        			slideit();
			</script>
			</div>

        	<h1>EM<span class="off">Reader</span></h1>
            <h2>Official Web Site</h2>
           
        </div><!--main pic-->   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php.">Home</a></li>
                <li class="menuitem"><a href="About Us.php">About Us</a></li>
                <li class="menuitem"><a href="Register.php">Register</a></li>
                <li class="menuitem"><a href="Other Services.php">Other Services</a></li>
				<li class="menuitem"><a href="Contact us.php">Contact us</a></li>
            </ul>
        </div>
        
        <div class="main">
        
           
          <form id="reg-form" action="regdata.php" method="post" autocomplete="off">
          <div id = "create">
            <h3>Create your account</h3><br>
            </div>
			
			
            <div id = "name" ><label for="name">First Name</label>
				<input type="text" name="fname" id="fname" placeholder="First Name" onkeyup="fnameVal()" required="required" >
				<label id="commentNamePrompt" style="font-size:15px; margin-left:10px; "></label>
            </div>
			
            <div id = "lastname"><label for="username">Last Name</label>
				<input type="text" name="lname" id="lname" placeholder="Last Name" onkeyup="return lnameVal()" required="required" >
				<label id="commentLNamePrompt" style="font-size:15px; margin-left:10px; "></label>
            </div><br/>
            
            <div>
				<span class="address"><label for="address">Address</label>
					<input type="text" name="Address_no" id="Address_no" placeholder="No" required="required">
					<input type="text" name="Address_street" id="Address_street" placeholder="Street" required="required">
					<input type="text" name="Address_city" id="Address_city" placeholder="City" required="required"	>
			</div>
            
            <div id ="number"><br/><label for="ContactNumber ">Contact Number </label>
				<input type="text" name="con" id="con" placeholder="Contact Number " onkeyup="return phoneNoVal()">
				<label id="commentPhonePrompt" style="font-size:15px; margin-left:10px; "></label>
   
            </div>
            
            <div id = "email"><br/><label for="email">Email</label>
				<input type="email" name="email" id="email"  placeholder="example@domain.com"  required="required" >
				<label id="commentEmailPrompt" style="font-size:15px; margin-left:10px; "></label>
            </div>
            
            <div id ="meters"><br/><label for="No of Meters">No of Meters</label>
				<tr>
 					<td>
						<select name="no_meters" id="no_meters" style="margin-left:69px;width: 80px;">
						<option value="1">1</option>
						<option value="2">2</option>	
						<option value="3">3</option>
 						<option value="4">4</option>
                       
						</select>
					</td>
				</tr>
 

            </div>
            
            <div id ="meterid"><br/><label for="Meter id">Meter ID</label>
				<input type="text" name="Meterid" id="Meterid"   required="required" ><br/>
				<label id="commentUserNamePrompt" style="font-size:15px; margin-left:10px; "></label>
                <input type="text" name="Meterid" id="Meterid2"   required="required" ><br/>
                <input type="text" name="Meterid" id="Meterid3"   required="required" >
                <input type="text" name="Meterid" id="Meterid4"   required="required" >
            </div>
           
            
            <div id ="password"><br/><label for="password">Password</label>
				<input type="password" name="password" id="password" placeholder="Password should be 5-10 characters" onkeyup="return passwordVal()"  required="required">
				<label id="commentPasswordPrompt" style="font-size:15px; margin-left:10px; "></label>
				
            </div>
            
            <div id = "conpassword"><br/><label for="Confirm Password">Confirm Password</label>
				<input type="password" name="ConfirmPassword" id="ConfirmPassword">
            </div>
            
					
            <div>
              <label></label><br/><br/>
					<input  type="submit" value="Create Account"  id="adddetails" class="button" onsubmit="fnameVal();"/>
					 <input id="clear"type="reset" value="Clear" >
            </div>
			
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
   </div>
        
</body>
</html>