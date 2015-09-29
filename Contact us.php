
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="CSS/Contact us.css" rel="stylesheet" type="text/css" />
<link href="CSS/common.css" rel="stylesheet" type="text/css" />
<title>Contact Us</title>
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
        <form id = "Login" action ="newlog.php" method = "get">
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
           
        </div>   
        
        <div id="menu">
        	<ul>
            	<li class="menuitem"><a href="index.php">Home</a></li>
                <li class="menuitem"><a href="About Us.php">About Us</a></li>
                <li class="menuitem"><a href="Register.php">Register</a></li>
                <li class="menuitem"><a href="Other Services.php">Other Services</a></li>
              <li class="menuitem"><a href="Contact us.php">Contact us</a>        </li>
        	</ul>
        </div>
        <div id="content">
        <div id = "contentimage"></div>
        <div id = "para">
        <h1></h1>
        </div>
        <div id = "include">
        <p></p>   
        </div>
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