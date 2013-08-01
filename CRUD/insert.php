<?php
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

$sql="INSERT INTO Persons1 (FirstName, LastName, Age)
VALUES
('$_POST[firstname]','$_POST[lastname]','$_POST[age]')";

//if (!empty($_POST['firstname'])&&!empty($_POST['lastname'])&&!empty($_POST['age']))
	//{
		if (!mysqli_query($con,$sql))
  		{
  		die('Error: ' . mysqli_error($con));
  		}
	//}
mysqli_close($con);

?> 
<body>

<script>location.href="showhome.php"</script>
</body>