<?php

$con=mysqli_connect("localhost","root","");

if (!$con)

{

die('Could not connect: ' . mysqli_error());

}

mysqli_select_db($con,"hr_project");

print "<h2>MySQL: Simple Select statement</h2>";

$result = mysqli_query("SELECT * FROM employee");

echo "<table border='1'>

<tr>

<th>employee_id</th>

<th>first_name</th>

<th>last_name</th>

</tr>";

while($row = mysqli_fetch_array($result))

{

echo "<tr>";

echo "<td>" . $row['employee_id'] . "</td>";

echo "<td>" . $row['first_name'] . "</td>";

echo "<td>" . $row['last_name'] . "</td>";

echo "</tr>";

}

echo "</table>";

print "<h2>CREATE MySQL Trigger In PHP</h2>";

$sql = "CREATE TRIGGER MysqlTrigger BEFORE UPDATE ON employee FOR EACH ROW SET NEW.first_name=UPPER(NEW.first_name);";

mysqli_query($con,$sql);

print "<h2>MySQL: Update Statement</h2>";

$qry = mysqli_query("UPDATE employee SET first_name='Akash' where id=2");

echo "Table has been updated.";

mysqli_query($qry,$con);

print "<h2>MySQL: Effect of Trigger</h2>";

$result = mysqli_query("SELECT * FROM employee");

echo "<table border='1'>

<tr>

<th>employee_Id</th>

<th>first_name</th>

<th>last_name</th>

</tr>";

while($row = mysqli_fetch_array($result))

{

echo "<tr>";

echo "<td>" . $row['employee_id'] . "</td>";

echo "<td>" . $row['first_name'] . "</td>";

echo "<td>" . $row['last_name'] . "</td>";

echo "</tr>";

}

echo "</table>";

mysqli_close($con);

?>
