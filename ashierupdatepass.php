<?php
include "connection.php";

$username = $_POST['username'];
$password = $_POST['password'];

$sql = "UPDATE ashier set password='$password' where member_number = '$username'";

if(mysqli_query($con,$sql))
{
	header('refresh:0;ashierlog.php');
	echo '<script> alert("updated successfully");</script>';
}

?>