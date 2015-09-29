<?php session_start();
 
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="CSS/afterreg.css" rel="stylesheet" type="text/css" />
<title>User Profile</title>
</head>

<body>
<?php
	$uname = $_SESSION['username'];
?>

	<div id="container">
		<div id="mainpic">
        <form id = "Sign_Out" action ="index.php" method = "get">
			<input type = "submit" value = "Sign Out" id="signoutButton"/>

		</form>
       
        	<h1>EM<span class="off">Reader</span></h1>
            <h2>Official Web Site</h2>
           
        </div>  
		
        
        <div id="content">
        
			<h2 id="logo"><label for="logged as">Welcome : </label><label id="userName" for="userName"></label><br>
		
				<script>
					var x = <?php echo json_encode($uname); ?>;
  					document.getElementById('userName').innerHTML = x;
				</script></br>
        <div id = "links">
        <table>
        	<tr>
               <td> <li class="bill"><a href="viewbill.php"></a></li><br></td>
               <td> <li class="usage"><a href="plans.php"></a></li></br> </td>
                <td><li class="comments"><a href="comments.php"></a></li></br> </td>
				
         	</tr>
         </table>        
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
                <br> <h4>Copyright @ 2015 EMReader. All rights reserverd</h4>
         </ul>
               
      </div>
   </div>
   
        
</body>
</html>