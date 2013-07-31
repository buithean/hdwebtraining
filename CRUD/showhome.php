<?php
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>
<body>
<?php 
 echo "<table border = '1' width = '800'>";
 echo "<tr><td width = '100'>ID</td><td width = '200'>Firstname</td><td width = '200'>Lastname</td>";
 echo "<td width = '100'>Age</td><td width = '100'>Edit</td><td width = '100'>Delete</td></tr>";
 $result = mysqli_query($con,"SELECT * FROM Persons1");

  while($row = mysqli_fetch_array($result))
  {
    echo "<tr>";
  	echo "<td>".$row['ID']."</td>";  
  	echo "<td>".$row['FirstName']."</td>";
  	echo "<td>".$row['LastName']."</td>";
  	echo "<td>".$row['Age']."</td>";
    echo "<td><a href='edit.php?do=edit&id=".$row['ID']."&firstname=".$row['FirstName']."&lastname=".$row['LastName']."&age=".$row['Age']."'>edit</a></td>";
  	echo "</tr>";
   
  } 
   
echo "</table>";
?>
<a href='home.php'>Back Home</a>
</body>