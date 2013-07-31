<?php
setcookie("fullname", $_POST["fullname"], time()+3600);
setcookie("email",$_POST["email"] , time()+3600);
setcookie("address",$_POST["address"] , time()+3600);
?>

<?php 
echo "<br/> Welcome ".$_COOKIE["fullname"]."<br/>";
echo "<br/> Your email ".$_COOKIE["email"]."<br/>";
echo "<br/> Your address ".$_COOKIE["address"]."<br/>";
?>

<?php 
$past = time() - 3600;
foreach ( $_COOKIE as $key => $value )
{
    setcookie( $key, $value, $past);
}

echo "<h3><a href = 'cookies.php'>Back</a></h3>";
?>