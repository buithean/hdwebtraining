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
<head>
<title>Welcome to CRUD homepage !!!</title>
<link rel="stylesheet" type="text/css" href="css.css" />
</head>
<body>

<h1>Welcome to CRUD Home</h1>
<h3>Click to show data</h3>
<form action="showhome.php" method="POST">
<table width = "200" >
<tr><td class= "button"><input type="submit" value = "Show me"></td></tr>
</table>
</form>

<h3>Click to add new data</h3>
<form action="phpMySql.php" method="POST">
<table  width = "200" >
<tr><td class= "button"><input type="submit" value = "Begin"></td></tr>
</table>
</form>  
</body>
</html>