<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8" />
<title>Admin Profile</title>
<link href="CSS/admin2.css" rel="stylesheet" type="text/css">
</head>

<body>

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
			</br>
		<table>
		<tr>
		<td>
		<div class="img">
			<a href="meterreader.php"><img src="Images/approve.png" alt="approve" width="128px" height="128px"/></a>
			<div class="desc">Approve Meter Reader</div>
		</div>
		</td>
		<td>
		<div class="img">
			<a href="meterreader.php"><img src="Images/edit.png" alt="edit" width="128px" height="128px"/></a>
			<div class="desc">Edit Meter Reader Details</div>
		</div>
		</td>
		<td>
		<div class="img">
			<a href="meterreader.php"><img src="Images/remove.png" alt="remove" width="128px" height="128px"/></a>
			<div class="desc">Remove Meter Reader</div>
		</div>
		</td>
		<td>
		<div class="img">
			<a href="meterreader.php"><img src="Images/view.png" alt="view" width="128px" height="128px"/></a>
			<div class="desc">View Users and Meter Readers</div>
		</div>
		</td>
		</tr>
		<tr>
		<td>
		<div class="img">
			<a href="db.php"><img src="Images/update.png" alt="update" width="128px" height="128px"/></a>
			<div class="desc">Update Database</div>
		</div>
		</td>
		<td>
		<div class="img">
			<a href="dp.php"><img src="Images/commit.png" alt="commit" width="128px" height="128px"/></a>
			<div class="desc">Commit Data</div>
		</div>
		</td>
		<td>
		<div class="img">
			<a href="db.php"><img src="Images/backup.png" alt="backup" width="128px" height="128px"/></a>
			<div class="desc">Backup Data</div>
		</div>
		</td>
		<td>
		<div class="img">
			<a href="comments.php"><img src="Images/comments.png" alt="comments" width="128px" height="128px"/></a>
			<div class="desc">View Comments</div>
		</div>
		</td>
		</tr>
		</table>
		
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