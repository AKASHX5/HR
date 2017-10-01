<?php
echo "
	<html>
		<head>
			<title>Register</title>
			<link rel='stylesheet' type='text/css' href='stylesheet2.css'>
			<style>
				
			</style>
		</head>
		<body class='log'>
		<h1 id='h1'> HR Management System </h1>
		<center>
			<div id='daf3'>	
				<h2 id='haf2'> Register </h2>
				<br><br>
				<form action='register1.php' method='post' name='form1'>
					<table>
						<tr id='tr1'>
						<td>Username : 
						<input type='text' name='username' id='ip1' required></td>
						
						</tr>
						<tr id='tr2' >
						<td>Password :
						<input type='password' name='password' id='ip2' required></td>
						</tr>
							
							<tr>
							<td>
							
							<div id='pds'>
							
							<input type='submit' name='Submit' value='Save'/>
							<input type='submit' name='cancel' value='Cancel'/>
							<input type='submit' name='exit' value='Exit'/>
							</div>
							</td>
							</tr>
				</form>
			</div>		
		</center>	
		</body>		
	</html>
	"
?>