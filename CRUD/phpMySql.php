<?php /*
$con=mysqli_connect("localhost","root","root");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

// Create database
$sql="CREATE DATABASE my_db";
if (mysqli_query($con,$sql))
  {
  echo "Database my_db created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }
?> 
<?php 
$sql = "CREATE TABLE Persons1 
(
ID INT NOT NULL AUTO_INCREMENT,
FirstName CHAR(15),
LastName CHAR(15),
Age INT,
CONSTRAINT pk PRIMARY KEY (ID)
)ENGINE=InnoDB";

$db_selected =  mysqli_select_db($con,"my_db");
if (!$db_selected) {
    die ('Can\'t use my_db : ') ;
}
else 
	echo "<br/> DB is selected !";

if (mysqli_query($con,$sql))
  {
  echo "Table created successfully";
  }
else
  {
  echo "Error creating table: ".mysqli_error($con);
  }
*/
?>
<?php 
$con=mysqli_connect("localhost","root","root","my_db");
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
/*
if (mysqli_query($con,"INSERT INTO Persons1 (FirstName, LastName, Age) VALUES ('James','Bond','35')"))
	echo "Insert sucessfull";
	else echo "Insert failed";
	
mysqli_query($con,"INSERT INTO Persons1 (FirstName, LastName, Age)
VALUES ('Peter', 'Griffin',35)");

mysqli_query($con,"INSERT INTO Persons1 (FirstName, LastName, Age)
VALUES ('Glenn', 'Quagmire',33)");
*/
/*$result = mysqli_query($con,"SELECT * FROM Persons1");

while($row = mysqli_fetch_array($result))
  {
  echo $row['FirstName'] . " " . $row['LastName']." is ".$row['Age'];
  echo "<br>";
  }
  */
?>

<html>
<body>

<form action="insert.php" method="POST">
<table border = "1" width = "200" >
<tr><td width = "40%">Firstname: </td><td><input type="text" name="firstname"></td></tr>
<tr><td width = "40%">Lastname: </td><td><input type="text" name="lastname"></td></tr>
<tr><td width = "40%">Age: </td><td><input type="text" name="age"></td></tr>
<tr><td><input type="submit" value = "Submit"></td><td><input type = RESET VALUE = "Reset"></td></tr>

</table>
</form>
<a href='home.php'>Back Home</a>
</body>
</html>