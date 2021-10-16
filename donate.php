<!DOCTYPE html>
<html>
<head>
	<title>	PCEA</title>
	<style>
.containers
	{
		height:40px;
		width:100%;
		background:orange;

	}

		.container
		{
			height:100%;
			width:60%;
			background:lightblue;
		}

.container1
{
	height:500px;
	width:40%;
	background-image:url("church.jpg");
	background-size: cover;
}
.login
{
	height:100%;
	width:330px;
	background:purple;
	margin:4em auto;
}
.txt11
{
	height:30px;
	width:200px;
	border-radius:10px;
}
button
{
	background:tomato;
	color:white;
	border-radius:10px;
	height:50px;
	font-size:20px;
	width:200px;
	margin-top:10px;
}
.button1

{
	width:90px;
	background:cyan;
}

	</style>
</head>
<body>
<div class="containers" ><kk style="font-size:30px;"><center>PCEA NYERI CHURCH</kk><ll style="float:left; text-decoration: none;"><a href="#"> </a> </ll> </div>


<div class="container1" style="	float:left; font-size: 30px;">
	<h2> psalms 46:1-3;</h2>
	<p style="color:white;">
God is our refuge and strength, a very present help in trouble.
2 Therefore will not we fear, though the earth be removed, and though the mountains be carried into the midst of the sea;
3 Though the waters thereof roar and be troubled, though the mountains shake with the swelling thereof. Selah.
</p>
</div>
<div class="container" style="float:left;">
	<div class="login">
<?php
include "connection.php";
session_start();
$username=$_SESSION['username'];
echo '<center><h3>MY TITHE</h3>';

$sql = "SELECT * FROM tithe";
$query =mysqli_query($con,$sql);
if(mysqli_num_rows($query)>0)
{
echo '<table border="3" style="color:white; font-size:30px;"><tr>
<th>Date </th>
<th>Amount </th></tr>
';
while($rows = mysqli_fetch_assoc($query))
{
	$dates= $rows['dates'];
	$amount=$rows['tithe_amount'];

	echo '<tr> <td>'.$dates.'</td>';
	echo ' <td>'.$amount.'</td>';
}
echo '</tr></table>';

}
else
{
	echo $username;

	echo 'No records<br>';
}

?>


	<a href="ashiershome.php"><button class="button1">back</button></a>
</center>
</div>
</div>


</body>
</html>