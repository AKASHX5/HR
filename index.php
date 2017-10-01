<?php
echo "
	<html>
		<head>
			<title>Login</title>
			<link rel='stylesheet' type='text/css' href='stylesheet2.css'>
			<style>
				
			</style>
		</head>
		<body class='log'>
		<h1 id='h1'> HR Management System </h1>
		<center>
			<div id='daf3'>	
				<h2 id='haf2'> LOGIN </h2>
				<br><br>
				<form action='login.php' method='post'>	
					<table>
						<tr><td>
						Username : 
							<input type='text' name='username' id='ip1' required>
						</td>
						</tr>
						<tr><td>
						Password : 
							<input type='password' name='password' id='ip2' required>
						</td></tr>
							
							<tr>
							<td>
							<p id='p'> <a href='register.php' > Register here </a> </p>
							<div id='pds'>
							
							<input type='submit' value='Log in!'>
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