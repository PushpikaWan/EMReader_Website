
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<link href="CSS/viewbill.css" rel="stylesheet" type="text/css" />
<title>View My Bill</title>

</head>

<body>

<div id="container">
		<div id="mainpic">
        <form id = "Logout" action ="index.php" method = "get">
			<input type = "submit" value = "Logout" id="logoutButton" />

		</form>
		
		

        	<h1>EM<span class="off">Reader</span></h1>
            <h2>Official Web Site</h2>
           
        </div><!--main pic-->   
        
        
        
        <div class="main">
		<div id ="content">
		
		
		<div>
		<h2 id="logo"><label for="logged as" align="right">You logged as : </label><label id="userName" for="userName"></label><br>
		
				<script>
					var x = <?php echo json_encode($uname); ?>;
  					document.getElementById('userName').innerHTML = x;
				</script></br></div>
        
           
          <form id="bill-form"  method="post" autocomplete="off">
		  
        <span class="accountTopicGray">View</span>
		  <span class="accountTopicRed">My Bill</span>
			<div id ="date"><label for="Date">Reading Date</label>
			<input type="date" name="date" id="date" placeholder="         dd/mm/yy" required="required">
				
			</div>
			
			
            <div id = "name" ><label for="Nounits">No Of Units(KWh)</label>
				<input type="int" name="NoUnits" id="NoUnits" placeholder = "                           KWh" required="required">
				
            </div>
			
           <br>
		   <div>
		
              
					<input  type="submit" value="Calculate"  id="calculate" class="button" >
					 
            </div>
			<br/>
			<span class="accountTopicRed">Bill</span>
			<span class="accountTopicGray">Summary</span>
		  
			
			<div id ="RentalCost"><br/><label for="RentalCost ">Rental Cost</label>
			
			
			</div>
			<div id ="UsageCharges"><br/><label for="UsageCharges ">Usage Charges</label>
			</div>
			<div id ="Arrears"><br/><label for="Arrears ">Arrears</label>
			</div>
			<div id ="OtherCharges"><br/><label for="OtherCharges ">Other Charges</label>
			</div>
			<div id ="TotalCost"><br/><label for="TotalCost ">Total Cost</label>
			<div class="box"></div>

			
			</div>
            
				<input  type="submit" value="Back"  id="Back" class="button" onclick="history.back(-1)" >
				<input  type="reset" value="Clear"  id="Clear" class="button" >
					 	 
				
   
            </div>
			
			
           
            
           
            
					
            
			
          </form>
          
          
        
      
      
 
         <div id="footer"><h3>The reference sites...</h3></div>
          <div id ="footimage">
         <ul>
            	<li class="bottomlayer1"><a href="http://www.powermin.gov.lk/"></a></li>
                <li class="bottomlayer2"><a href="http://www.leco.lk/"></a></li>
                <li class="bottomlayer3"><a href="http://www.ltl.lk/"></a></li>
         </ul>
               
      </div>
   </div>
        
</body>
</html>