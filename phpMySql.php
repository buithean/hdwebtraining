<?php
$con=mysqli_connect("localhost","root","root");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
/*
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
  */
?> 
<?php 
$sql = "CREATE TABLE Persons 
(
ID INT NOT NULL AUTO_INCREMENT,
FirstName CHAR(15),
LastName CHAR(15),
Age INT,
CONSTRAINT pk PRIMARY KEY (ID)
)ENGINE=InnoDB";

$db_selected =  mysqli_select_db($con,"my_db");
if (!$db_selected) {
    die ('Can\'t use my_db : ' . mysql_error()) ;
}


if (mysqli_query($con,$sql))
  {
  echo "Database my_db created successfully";
  }
else
  {
  echo "Error creating database: " . mysqli_error($con);
  }

?>
