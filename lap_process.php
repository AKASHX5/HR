<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
//including the database connection file
include_once("config.php");

if(isset($_POST['submit'])) {	
	$code = $_POST['code'];
	$ename = $_POST['ename'];
	$email = $_POST['email'];
	$leave_type = $_POST['leave_type'];
	$month = $_POST['month'];
	$fdate = $_POST['fdate'];
	$ndays = $_POST['ndays'];
	$edate = $_POST['edate'];
	$leave_period = $_POST['leave_period'];
	$reason = $_POST['reason'];
	$description = $_POST['description'];
	
		
	// checking empty fields
	if(empty($code) || empty($ename) || empty($email) || empty($leave_type) || empty($month) || empty($fdate) || empty($ndays) || empty($edate) || empty($leave_period) || empty($reason) || empty($description)) {
				
				if(empty($code)) {
					echo "<font color='red'>Employee code field is empty.</font><br/>";
				}
				
				if(empty($ename)) {
					echo "<font color='red'>Employee name field is empty.</font><br/>";
				}
				if(empty($email)) {
					echo "<font color='red'>Email field is empty.</font><br/>";
				}
				if(empty($leave_type)) {
					echo "<font color='red'>Leave type field is empty.</font><br/>";
				}
				if(empty($month)) {
					echo "<font color='red'>Month field is empty.</font><br/>";
				}
				
				if(empty($fdate)) {
					echo "<font color='red'>From date field is empty.</font><br/>";
				}
				
				if(empty($ndays)) {
					echo "<font color='red'>No of days field is empty.</font><br/>";
				}
				if(empty($edate)) {
					echo "<font color='red'>End date field is empty.</font><br/>";
				}
				
				if(empty($leave_period)) {
					echo "<font color='red'>Leave period field is empty.</font><br/>";
				}
				
				if(empty($reason)) {
					echo "<font color='red'>Reason field is empty.</font><br/>";
				}
				
				if(empty($description)) {
					echo "<font color='red'>Address field is empty.</font><br/>";
				}
				

		//link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
			
		
		$result = "INSERT INTO leave_application(emp_code,emp_name,email_id,leave_type,month,from_date,no_of_days,end_date,leave_period,reason,contact_info) VALUES('$code','$ename','$email','$leave_type','$month','$fdate','$ndays','$edate','$leave_period','$reason','$description')";
		$result = mysqli_query($conn, $result);
		
		echo "<font color='green'>Applied successfully. <a href='Home.php'>Home</a>";
		
	}
}
?>
</body>
</html>
