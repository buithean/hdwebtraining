<?php
$con=mysqli_connect("localhost","root","root","my_db");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 ?>
<?php 

if (isset($_POST['OK'])) {
    //update action
    
   $a = $_POST['firstname'];
    $qr = "UPDATE Persons1 SET FirstName = '".$a."', LastName = '".$_POST['lastname']."', Age = '".$_POST['age']." '
    		WHERE ID = ".$_POST['id']; 
     //die($qr);
    mysqli_query($con,$qr);
    echo "<script>alert('Update successful')</script>";
   
} else if (isset($_POST['cancel'])) {
    //delete action
    echo "<script>location.href='showhome.php'</script>";
} else {
    //no button pressed
}
?>

<html>
 <script>location.href="showhome.php"</script>
<body>
</body>
</html>