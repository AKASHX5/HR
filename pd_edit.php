<?php
// including the database connection file
include_once("config.php");

if(isset($_POST['edit']))
{	
	$id = $_POST['id'];
	$fname = $_POST['fname'];
	$lname = $_POST['lname'];
	$Faname = $_POST['Faname'];
	$Maname = $_POST['Maname'];
	$DOB = $_POST['DOB'];
	$blood = $_POST['blood'];
	$sex = $_POST['sex'];
	$marital_status = $_POST['marital_status'];
	$nationality = $_POST['nationality'];
	$religion = $_POST['religion'];
	$description = $_POST['description'];
	$description_add = $_POST['description_add'];
	$mobile = $_POST['mobile'];
	$email_id = $_POST['email_id'];
		
	// checking empty fields
	if(empty($fname) || empty($lname) || empty($Faname) || empty($Maname) || empty($DOB) || empty($blood) || empty($sex) || empty($marital_status) || empty($nationality) || empty($religion) || empty($description) || empty($description_add) || empty($mobile) || empty($email_id)) {
				
				if(empty($fname)) {
					echo "<font color='red'>Name field is empty.</font><br/>";
				}
				
				if(empty($lname)) {
					echo "<font color='red'>Age field is empty.</font><br/>";
				}
		
			//	if(empty($Faname)) {
			//		echo "<font color='red'>Email field is empty.</font><br/>";
			//	}
			//	if(empty($Maname)) {
			//		echo "<font color='red'>Name field is empty.</font><br/>";
			//	}
				
				if(empty($DOB)) {
					echo "<font color='red'>Age field is empty.</font><br/>";
				}
				
				if(empty($blood)) {
					echo "<font color='red'>Email field is empty.</font><br/>";
				}
				if(empty($sex)) {
					echo "<font color='red'>Name field is empty.</font><br/>";
				}
				
				if(empty($marital_status)) {
					echo "<font color='red'>Age field is empty.</font><br/>";
				}
				
				if(empty($nationality)) {
					echo "<font color='red'>Email field is empty.</font><br/>";
				}
				if(empty($religion)) {
					echo "<font color='red'>Name field is empty.</font><br/>";
				}
				
				if(empty($description)) {
					echo "<font color='red'>Age field is empty.</font><br/>";
				}
				
				if(empty($description_add)) {
					echo "<font color='red'>Email field is empty.</font><br/>";
				}
				if(empty($mobile)) {
					echo "<font color='red'>Name field is empty.</font><br/>";
				}
				
				if(empty($email_id)) {
					echo "<font color='red'>Age field is empty.</font><br/>";
						
	} else {	
		//updating the table
		$result = "UPDATE employee SET first_name='$fname',last_name='$lname',father_name='$Faname',mother_name='$Maname',date_of_birth='$DOB',blood_group='$blood',sex='$sex',marital_status='$marital_status',nationality='$nationality',religion='$religion',present_addrs='$description',permanent_addrs='$description_add',phone='$mobile',email='$email_id' WHERE employee_id=$id";
		$result = mysqli_query($conn, $result);
		
		//redirectig to the display page. In our case, it is index.php
		header("Location: pd_home.php");
	}
}
?>
<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = "SELECT * FROM employee WHERE id=$id";
$result = mysqli_query($conn, $result);

while($res = mysqli_fetch_array($result))
{
	$fname = $res['fname'];
	$lname = $_res['lname'];
	$Faname = $_res['Faname'];
	$Maname = $_res['Maname'];
	$DOB = $_res['DOB'];
	$blood = $_res['blood'];
	$sex = $_res['sex'];
	$marital_status = $_res['marital_status'];
	$nationality = $_res['nationality'];
	$religion = $_res['religion'];
	$description = $_res['description'];
	$description_add = $_res['description_add'];
	$mobile = $_res['mobile'];
	$email_id = $_res['email_id'];
}
?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="pd_home.php">Home</a>
	<br/><br/>
	
	<form action='pd_edit.php' method='post' name='form1'>
		
			<table border="0">
				<tr>
					<td >First Name :</td>
					<td><input type='text' name='fname' value=<?php echo $fname;?>></td>
					<td >Last Name :</td>
					<td><input type='text' name='lname' value=<?php echo $lname;?>></td>
				</tr>

				<tr >
					<td >Father's Name :</td>
					<td><input type='text' name='Faname' value=<?php echo $Faname;?>></td>
					<td >Mother's Name :</td>
					<td><input type='text' name='Maname' value=<?php echo $Maname;?>></td>
				</tr>
				
				<tr >
					<td >DOB :</td>
					<td><input type='date' name='DOB' value=<?php echo $DOB;?>></td>
					<td >Blood group :</td>
					<td><select name='blood' value=<?php echo $blood;?>>
								<option></option>
								<option value='A+ve'/> A+ve
								<option value='B+ve'/> B+ve
								<option value='O+ve'/> O+ve
								<option value='AB'/> AB
								<option value='A-ve'/> A-ve
								<option value='B-ve'/> B-ve
								<option value='O-ve'/> O-ve
					</select></td>
				</tr>
				
				<tr >
					<td >Sex :</td>
					<td><select name='sex' value=<?php echo $sex;?>>
								<option></option>
								<option value='Male'/> Male
								<option value='Female'/> Female
					</select></td>
					<td >Marital Status :</td>
					<td><select name='marital_status' value=<?php echo $religion;?>>
								<option></option>
								<option value='Married'/> Married
								<option value='Unmarried'/> Unmarried
					</select></td>
				</tr>

				<tr >	
					<td >Nationality :</td>
					<td><input type='text' name='nationality' value=<?php echo $name;?>></td>
					<td >Religion :</td>
					<td><select name='religion' value=<?php echo $name;?>>
								<option></option>
								<option value='Islam'/> Islam
								<option value='Hindusism'/> Hindusism
								<option value='Christanity'/> Christanity
								<option value='Buddhism'/> Buddhism
					</select></td>
				</tr>

				<tr >	
					<td >Present Address :</td>
					<td><textarea rows='5' cols='60' name='description' value=<?php echo $description;?>></textarea></td>
				</tr>

				<tr >
					<td >Permanent Address :</td>
					<td><textarea rows='5' cols='60' name='description_add' value=<?php echo $description_add;?>></textarea></td>
				</tr>

				<tr >	
					<td >Mobile No :</td>
					<td><input type='text' name='mobile' value=<?php echo $mobile;?>></td>
				</tr>

				<tr >	
					<td >Personal Email Id :</td>
					<td><input type='email' name='email_id' value=<?php echo $email_id;?>></td>
				</tr>
				<tr>
					<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
					<td><input type="submit" name="edit" value="UPDATE"></td>
				</tr>

			</table>
		
		
		</form>
	</body>
</html>

