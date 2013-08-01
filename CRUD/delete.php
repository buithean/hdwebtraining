<?php


$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
  
  $id = $_GET['id'];
 
?>

<?php 
$sql = "DELETE from Persons1 where ID = '$id'";
mysqli_query($con,$sql);
echo "<Script>alert('One recode delete')</Script>";
?>
<script>location.href="showhome.php"</script>
