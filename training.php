<?php

echo"
<html>
<head><title>Employee Training</title>
<link rel='stylesheet' type='text/css' href='stylesheet.css'>
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


<center><h2>Employee Training</h2></center>

<fieldset>
<legend><b>Employee Training</b></legend>

<form action='training_process.php' method='post' name='form6'>
<table>
	
		
		<tr>
			<td>Training ID:</td>
			<td><input type = 'text' name = 'id' /></td>
			
		<tr>
		<tr>
			<td>Programe Name :</td>
			<td><input type = 'text' name = 'prog_name' /></td>
		<tr>
		<tr>
			<td>Start Date :</td>
			<td><input type = 'date' name = 's_date' /></td>
		<tr>
		<tr>
			<td>End Date :</td>
			<td><input type = 'date' name = 'e_date' /></td>
		<tr>
		<tr>
			<td>Job ID :</td>
			<td><input type = 'text' name = 'jobid' /></td>
		<tr>
		<tr>
			<td><input type = 'submit' name='submit' value='Save'/></td>
		</tr>
</table>
</fieldset>
</form>

</body>
</html>"
?>