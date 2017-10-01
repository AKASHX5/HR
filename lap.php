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
		<h1 id='h1'> HR Management System </h1>
		<div>
			<ul>
				<li><a href='home.php'>Home</a></li>
                <li><a href='search2.php'>Search Employee</a></li>
                <li><a href='pd.php'>Personal Details</a></li>
                <li><a href='lap.php'>Leave application </a></li>
                <li><a href='training.php'>Employee Training</a></li>
                <li><a href='logout.php'>Logout</a></li>
			</ul>
			
		</div>


<center><h2>Update Info</h2></center>

<fieldset>
<legend><b>Update</b></legend>
<form action='update.php' method='post' name='form5'>
<table>
		<tr >
			<td >Employee Code:</td>
			<td><input type = 'text' name = 'code' required/></td>
			<td >Employee Name:</td>
			<td><input type = 'text' name = 'ename' required/> </td>
			
		</tr>
		
		<tr >
			<td >Email_id:</td>
			<td><input type = 'email' name = 'email' required/></td>
			<td >Leave Type:</td>
			<td><select name='leave_type' required>
				<option></option>
				<option value='Sick'/> Sick
				<option value='Holiday'/> Holiday 
				<option value='Home'/> Home 
			</select></td>
			
		</tr>
		<tr >
			<td >Month:</td>
			<td><select name='month' required>
				<option></option>
				<option value='January'/> January
				<option value='February'/> February
				<option value='March'/> March
				<option value='April'/> April
				<option value='May'/> May
				<option value='June'/> June
				<option value='July'/> July
				<option value='August'/> August
				<option value='September'/> September
				<option value='October'/> October
				<option value='November'/> November
				<option value='December'/> December
			</select>
			</td>
			<td >From Date:</td>
			<td><input type='date' name='fdate' required/></td>
		</tr>
		<tr>
			<td >No of Days:</td>
			<td><input type='number' name='ndays' min='1' max='10' required/></td>
			<td >End Date:</td>
			<td><input type='date' name='edate' required/></td>
		</tr>
		<tr>
			<td >Leave Type:</td>
			<td><select name='leave_period' required>
					<option></option>
					<option value='Full Day'/> Full Day
					<option value='Half Day'/> Half Day 
					<option value='1st Half'/> 1st Half
					<option value='2nd Half'/> 2nd Half
				</select></td>
		</tr>
		
</table>

<br><br>
	

	<strong>Reason : </strong><br><br>
	<textarea rows='5' cols='60' name='reason' placeholder='Describe your reason here....' required></textarea><br><br>
	<strong>Address & Phone No During Leave Period : </strong><br><br>
	<textarea rows='5' cols='60' name='description' placeholder='Type your address and phone no here....' required></textarea>


</fieldset>
<div id='pds'>
	<input type='submit' name='submit' value='Apply'/>
</div>
	</form>
<br><br><br><br><br>
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