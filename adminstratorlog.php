<?php
include "connection.php";


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM adminstrator where username= '$username' and password = '$password'";

$query = mysqli_query($con, $sql);

if(mysqli_num_rows($query)>0)
{
	header("location:adminhome.php");
}
else
{
	header("refresh:0;adminlog.php");
	echo '<script> alert("Sorry you have entered invalid details"); </script> ';
}


?>