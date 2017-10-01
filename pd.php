<?php

echo"
<html>
	<head>
	
	<link rel='stylesheet' type='text/css' href='stylesheet.css'>
		<style>
			<title>home</title>
		</style>	
	</head>
	<body>
		<h1 id='h1'> E health care</h1>
		<div>
			<ul>
				<li><a href='home.php'>Home</a></li>
                <li><a href='search2.php'>Search Specialist</a></li>
                <li><a href='pd.php'>Patient Details</a></li>
                <li><a href='lap.php'>About Us</a></li>
                <li><a href='logout.php'>Logout</a></li>
			</ul>
			
		</div>	
		
		<center><h2>Patient Details</h2></center>
		
		<form action='personal_details.php' method='post' name='form1'>
		<fieldset>
		<legend><b>Personal Details</b></legend>
			<br>
			<table >
				<tr>
					<td >Weight :</td>
					<td><input type='text' name='Weight' placeholder='Weight' required></td>
					<td >Height :</td>
					<td><input type='text' name='Height' placeholder='Height' required></td>
				</tr>
				
					<td >Mobile No :</td>
					<td><input type='text' name='mobile' required/></td>
					
					
				</tr>
				
				<tr>
					<td>Symptoms</td>
					<td><input type='text' name='Symptoms' required/></td>
				
					<td>Diagnosis Report</td>
					<td>< input type='text' name='managerid' required/>
					</td>
				</tr>
				<tr>
					<td>Previous Prescription</td>
					<td><input type='text' name='deptid' required/></td>
				
					

			</table>
		</fieldset>	
		<div id='pds'>	
			<input type='submit' name='Submit' value='Save'/>
			<input type='submit' name='edit' value='Edit'/>
			<input type='submit' name='exit' value='Exit'/>
		</div>
</form><br><br><br><br><br><br>
		<div >
	<footer class='ftp'>
<hr>

  <p class='ph2'>copyright © 2016 by Hr Management | Contact information: <a href='mailto:hrmanagement@hotmail.com'>
  hrmanagement@hotmail.com</a> </p>
</footer>
</div>
	</body>
</html>
"
?>