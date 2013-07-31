<?php
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<!-- 
<?php //mysqli_query($con,"UPDATE Persons1 SET Age=34
//WHERE FirstName='Peter' AND LastName='Griffin'");?>
-->
<html>
<body>

<h1>Welcome to CRUD Home</h1>
<h3>Click to show data</h3>
<form action="showhome.php" method="POST">
<table border = "1" width = "200" >
<tr><td><input type="submit" value = "Show me"></td></tr>
</table>
</form>

<h3>Click to add new data</h3>
<form action="phpMySql.php" method="POST">
<table border = "1" width = "200" >
<tr><td><input type="submit" value = "Begin"></td></tr>
</table>
</form>  
</body>
</html>