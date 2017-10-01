<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	
	$id = $_POST['id'];
	$prog_name = $_POST['prog_name'];
	$s_date = $_POST['s_date'];
	$e_date = $_POST['e_date'];
	$jobid = $_POST['jobid'];
	
	
		
	// checking empty fields
	if(empty($id) || empty($prog_name) || empty($s_date) || empty($e_date) || empty($jobid)) {
				
				if(empty($id)) {
					echo "<font color='red'>Required</font><br/>";
				}
				
				if(empty($prog_name)) {
					echo "<font color='red'>Required</font><br/>";
				}
				if(empty($s_date)) {
					echo "<font color='red'>Required</font><br/>";
				}
				if(empty($e_date)) {
					echo "<font color='red'>Required</font><br/>";
				}
				if(empty($jobid)) {
					echo "<font color='red'>Required</font><br/>";
				}
				
				
		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
			
		
		$result = "INSERT INTO training(training_id,program_name,start_date,end_date,job_id) VALUES('$id','$prog_name','$s_date','$e_date','$jobid')";
		$result = mysqli_query($conn, $result);
		
		echo "<font color='green'>Applied successfully. <a href='Home.php'>Home</a>";
		
	}
}
?>
</body>
</html>
