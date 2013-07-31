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

<body>
<form action="update.php" method="POST">
<input type="hidden" name="id" value = <?php echo $id;?>>

<table border = "1" width = "200" >
<tr><td width = "40%">Firstname: </td><td><input type="text" name="firstname" value = <?php echo $fname;?>></td></tr>
<tr><td width = "40%">Lastname: </td><td><input type="text" name="lastname" value = <?php echo $lname;?>></td></tr>
<tr><td width = "40%">Age: </td><td><input type="text" name="age" value = <?php echo $age;?>></td></tr>
<tr><td><input type="submit" name="OK" value = "Submit"></td><td><input type="submit" name="cancel" value = "Cancel"></td></tr>
</table>
</form>

</body>
</html>