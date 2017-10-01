<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['Submit'])) {	
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$mobile = $_POST['mobile'];
	$email_id = $_POST['email_id'];
	$jobid = $_POST['jobid'];
	$hiredate = $_POST['hiredate'];
	$managerid = $_POST['managerid'];
	$deptid = $_POST['deptid'];
	$compct = $_POST['compct'];
		
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($mobile) || empty($email_id) || empty($jobid) || empty($hiredate) || empty($managerid) || empty($deptid) || empty($compct)) {
				
				if(empty($fname)) {
					echo "<font color='red'>Required</font><br/>";
				}
				
				if(empty($lname)) {
					echo "<font color='red'>Required</font><br/>";
				}
		
				if(empty($mobile)) {
					echo "<font color='red'>Required</font><br/>";
				}
				
				if(empty($email_id)) {
					echo "<font color='red'>Required</font><br/>";
				}
				if(empty($jobid)) {
					echo "<font color='red'>Required</font><br/>";
				}
				if(empty($hiredate)) {
					echo "<font color='red'>Required</font><br/>";
				}
				if(empty($managerid)) {
					echo "<font color='red'>Required</font><br/>";
				}
				if(empty($deptid)) {
					echo "<font color='red'>Required</font><br/>";
				}
				if(empty($compct)) {
					echo "<font color='red'>Required</font><br/>";
				}

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
			
		
		$result = "INSERT INTO employee(first_name,last_name,phone,email,job_id,hire_date,manager_id,department_id,comission_pct) VALUES('$fname','$lname','$mobile','$email_id','$jobid','$hiredate','$managerid','$deptid','$compct')";
		$result = mysqli_query($conn, $result);
		
		echo "<font color='green'>Data added successfully. <a href='Home.php'>Home</a>";
		
	}
}
?>
</body>
</html>
