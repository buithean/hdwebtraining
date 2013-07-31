<?php
session_start();
?>
<?php 

$_SESSION["fullname"]=$_POST["fullname"];
$_SESSION["email"]=$_POST["email"];
$_SESSION["username"]=$_POST["username"];
$_SESSION["password"]=$_POST["password"];
?>

<?php 
echo "<br/> Welcome ".$_SESSION["fullname"]."<br/>";
echo "Your email: ".$_SESSION["email"]."<br/>";
echo "Your username: ".$_SESSION["username"]."<br/>";
echo "Your password: ".$_SESSION["password"]."<br/>";
echo "<a href = 'session.php'>back</a>";
?>