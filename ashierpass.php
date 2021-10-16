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
			height:400px;
			width:60%;
			background:lightblue;
		}

.container1
{
	height:400px;
	width:40%;
	background-image:url("church.jpg");
	background-size: cover;
}
.login
{
	height:300px;
	width:300px;
	background:white;
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
	background:green;
	color:orange;
	border-radius:10px;
	height:30px;
	font-size:20px;
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
	<form method="POST" action="ashierupdatepass.php">
		<img src="msalaba.jpg" height="50" width="50">
<center><b style="font-size:30px;">LOGIN AS ASHIER</b><br><br>
USERNAME<br><input type="text" name="username" class="txt11" required><br>
NEW PASSWORD<br><input type="password" name="password" class="txt11" required><br><br>
<button>Update</button>

	</form></center><center>
	<a href="index.php"><button class="button1">Back</button></a>
</center>
</div>
</div>


</body>
</html>