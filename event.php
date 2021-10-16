

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {font-family: Arial, Helvetica, sans-serif;}
* {box-sizing: border-box;}

.input-container {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  width: 50%;
  margin-bottom: 15px;
}

.icon {
  padding: 10px;
  background: dodgerblue;
  color: white;
  min-width: 50px;
  text-align: center;
}

.input-field {
  width: 100%;
  padding: 10px;
  outline: none;
}

.input-field:focus {
  border: 2px solid dodgerblue;
}

/* Set a style for the submit button */
.btn {
  background-color: dodgerblue;
  color: white;
  padding: 15px 20px;
  border: none;
  cursor: pointer;
  width: 50%;
  opacity: 0.9;
}

.btn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<br><fieldset>
<form method="POST" action="register.php" enctype="multipart/form-data"style="max-width:500px;margin:auto" >
  <h2>Submit events</h2>
  
  </div>
  <div class="input-container">
    <i class="fa fa-envelope icon"></i>
    <input class="input-field" type="text" placeholder="Event id" name="id">
  </div>
  Event description
      <input class="input-field" type="text" placeholder="Event descrption" name="desc">

  <b>Event image</b><br>
<input type="hidden" name="MAX_FILE_SIZE" value="1000000000000000"/><input name="uploadedfilee" type="file" style="height:35px;" /><br><br>

  <div class="input-container">
  </div>




  <button type="submit" class="btn">Submit</button>
</form>
</fieldset>
<footer><style> .color c {

color:green;
font-size: 22px;
}
</style>
<div class= "color">
  <c>
</c>

</body>
</html>
