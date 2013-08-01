<?php

$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $id = $_GET['id'];
  $fname = $_GET['firstname'];
  $lname = $_GET['lastname'];
  $age = $_GET['age'];
?>
  <html>
<head>
<title>Welcome to CRUD !!!</title>
<link rel="stylesheet" type="text/css" href="css.css" />
</head>
<body>
<form action="update.php" method="POST">
<input type="hidden" name="id" value = <?php echo $id;?>>

<table border = "1" width = "300" >
<tr><td class = "lbbutton">Firstname: </td><td class = "cbutton"><input type="text" size = "35" name="firstname" value = <?php echo $fname;?>></td></tr>
<tr><td class = "lbbutton">Lastname: </td><td class = "cbutton"><input type="text" size = "35" name="lastname" value = <?php echo $lname;?>></td></tr>
<tr><td class = "lbbutton">Age: </td><td class = "cbutton"><input type="text" size = "35" name="age" value = <?php echo $age;?>></td></tr>
<tr><td class = "lbbutton"><input type="submit" name="OK" value = "Submit"></td><td class = "cbutton"><input type="submit" name="cancel" value = "Cancel"></td></tr>
</table>
</form>

</body>
</html>