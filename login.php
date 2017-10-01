<?php
	
session_start();

$username = $_POST['username'];
$password = md5($_POST['password']);

if ($username&&$password)
{
	$connect = mysql_connect("localhost", "root", "") or die ("Couldn't connect to the database!");
	mysql_select_db("hr_project") or die ("Couldn't find database");
	
	$query = mysql_query("SELECT * FROM tbl_users WHERE username='$username'");
	
	$numrows = mysql_num_rows($query);
	
	if($numrows!==0)
	{
		while($row = mysql_fetch_assoc($query))
		{
			$dbusername = $row['username'];
			$dbpassword = $row['password'];
		}
		
		if($username==$dbusername&&$password==$dbpassword)
		{
			echo "<html>
	<head>
	
	<link rel='stylesheet' type='text/css' href='stylesheet.css'>
		<style>
			<title>home</title>
		</style>	
	</head>
		
	<body>
		<h1 id='h1'> E health care </h1>
		<div>
			<ul>
				<li><a href='home.php'>Home</a></li>
				<li><a href='search2.php'>Search Specialist</a></li>
				<li><a href='pd.php'>Personal Details</a></li>
				<li><a href='lap.php'>About Us </a></li>
				
				<li><a href='logout.php'>Logout</a></li>
			</ul>
			
		</div>

	</body>
</html>";
			@$_SESSION['username'] = $username;
			
		}
		
		else
			echo "Your password is incorrect!";
	}
	else
		die("That user doesn't exits!");
}
else 
	die("Please enter a username and password!");

?>