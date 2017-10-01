<!doctype html>
<html>
<head>
<title>Registered</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$username = $_POST['username'];
	$password = md5($_POST['password']);
	
		
	// checking empty fields
	if(empty($username) || empty($password)) {
				
		if(empty($username)) {
			echo "<font color='red'>Username field is empty.</font><br/>";
		}
		
		if(empty($password)) {
			echo "<font color='red'>Incorrect form of password.</font><br/>";
		}
		

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
			
		
		$result = "INSERT INTO tbl_users(userid,username,password) VALUES('','$username','$password')";
		$result = mysqli_query($conn, $result);
		
		echo "<font color='green'>Registered successfully. <a href='index.php'>Login</a>";
		
	}
}
?>
</body>
</html>
