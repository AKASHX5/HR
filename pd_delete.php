<?php
//including the database connection file
include("config.php");

//getting id of the data from url
$id = $_GET['id'];

//deleting the row from table
$result = "DELETE FROM employee WHERE id=$id";
$result = mysqli_query($conn, $result);

//redirecting to the display page (pd_home.php in our case)
header("Location:pd_home.php");
?>
