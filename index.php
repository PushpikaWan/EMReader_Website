
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="CSS/style.css" rel="stylesheet" type="text/css" />
<link href="CSS/common.css" rel="stylesheet" type="text/css" />

<title>Home</title>

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
            						if(step<6){
                						step++;
									}
            						else
                						step=1;
            					setTimeout("slideit()",3500);
        					}
        					slideit();
					</script>
			</div>
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
        
        <div id="content">
        	<div class="grid_6">
				<h2>What is <strong>EM Reader</strong> ?</h2>
					<p>EM Reader is based on the current billing system 
                    of Ceylon Electricity Board. In our project we will 
                    establish a web based information system which can store 
                    the data of households by merging with the current database 
                    system of the Electricity Board. Meter readers and the consumers
                    can capture an image from their mobile devices through the Android
                    application and link data that they gather with the web based 
                    information system which will then automatically transfer 
                    back the billing details to the Android application.</p><br>
                    
					<p>
						The captured images which are sent by the meter readers are 
                        processed and then the digits regarding the meter readings 
                        are recognized by the online web service we attached to our 
                        system, then the databases of each customer will update by 
                        the new meter readings after few checks done by the system 
                        admin and the current bill will return to the Android application. 
                        
					</p>
				
					<p><a href="About us.php" class="button">Read More</a></p>
			</div>
            
			<div class="grid_7">
				<h2>Services We provide...</h2>
					<ul>
						<li>EM Reader is an efficient meter reading system.</li>
						<li>Calculate your own bill for the current usage.</li>
						<li>How the bill is generated including arrears and </br>
                     		other charges.</li>
						<li>Learn useful tips to prevent electricity wastings.</li>
						<li>Easy to use without having troubles.</li>
					</ul>
				
				
					<p><a href="Other Services.php" class="button">Read More</a></p>
			</div>
		
        
        
        	<div id ="image"></div>
        
        	<div id="image2"></div>
      </div>
      
         	<div id="footer"><h4>The reference sites...</h4></div>
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