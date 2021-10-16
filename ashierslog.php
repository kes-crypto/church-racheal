<?php
include "connection.php";


$username = $_POST['username'];
$password = $_POST['password'];


$sql = "SELECT * FROM ashier where member_number= '$username' and password = '$password'";

$query = mysqli_query($con, $sql);

if(mysqli_num_rows($query)>0)
{
	header("location:ashiershome.php");
}
else
{
	header("refresh:0;ashierlog.php");
	echo '<script> alert("Sorry you have entered invalid details"); </script> ';
}


?>