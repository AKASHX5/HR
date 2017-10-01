<?php
//including the database connection file
include_once("config.php");

//fetching data in descending order (lastest entry first)
$result = "SELECT * FROM employee ORDER BY id DESC";

$result = mysqli_query($conn, $result);
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
<a href="pd.php">Add New Data</a><br/><br/>

	<table width='80%' border=0>

	<table >
				<tr bgcolor='#CCCCCC'>
					<td >First Name</td>
					<td >Last Name </td>
					
					<td >Father's Name </td>
					<td >Mother's Name </td>
					
					<td >DOB </td>
					
					<td >Blood group </td>
					
					<td >Sex </td>
					
					<td >Marital Status </td>
						
					<td >Nationality </td>
					
					<td >Religion </td>
						
					<td >Present Address </td>
					
					<td >Permanent Address </td>
						
					<td >Mobile No </td>
					<td >Personal Email Id </td>
					<td>Update</td>
				</tr>

			
	<?php 
	while($res = mysqli_fetch_array($result)) { 		
		echo "<tr>";
		echo "<td>".$res['first_name']."</td>";
		echo "<td>".$res['last_name']."</td>";
		echo "<td>".$res['father_name']."</td>";	
		echo "<td>".$res['mother_name']."</td>";
		echo "<td>".$res['date_of_birth']."</td>";
		echo "<td>".$res['blood_group']."</td>";
		echo "<td>".$res['sex']."</td>";
		echo "<td>".$res['marital_status']."</td>";
		echo "<td>".$res['nationality']."</td>";
		echo "<td>".$res['religion']."</td>";
		echo "<td>".$res['present_addrs']."</td>";
		echo "<td>".$res['permanent_addrs']."</td>";
		echo "<td>".$res['phone']."</td>";
		echo "<td>".$res['email']."</td>";
		
		echo "<td><a href=\"pd_edit.php?id=$res[id]\">Edit</a> | <a href=\"pd_delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";		
	}
	?>
	</table>
</body>
</html>
