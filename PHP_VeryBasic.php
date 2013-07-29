<?php
//Variable
echo "<h3>Variable:</h3> ";
$x=5;
$y=6;
$z=$x+$y;// z = 11
echo $z;
echo "</Br>";

//for loop
echo "<h3>For Loop </h3>";
for ($i =1; $i <= 10; $i++)
	{
	if ($i%2==0)
		echo $i." la so chan"."</br>";
	else 
		echo $i." la so le"."</br>";
	}
?>
<?php
echo "<h3>While loop: </h3>";
$i=1;
while($i<=5)
  {
  echo "The number is " . $i . "<br>";
  $i++;
  }
?>

<?php
echo "<h3>Do While loop: </h3>";
$i=1;
do
  {
  echo "The number is " . $i . "<br>";
  $i++;
  }
while($i<=5);
?>