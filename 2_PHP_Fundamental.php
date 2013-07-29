<?php
//Array
echo "<h3>Array:</h3> ";

$cars=array("Volvo","BMW","Toyota","Ford");
echo "I like " . $cars[0] . ", " . $cars[1] . ", " . $cars[2] ." and ".$cars[3]. ".";
echo "</br>";
$arrlength=count($cars);
echo "I have ".$arrlength." cars !!!";
echo "<br /> they are: <br />";
for($x=0;$x<$arrlength;$x++)
  {
  $y = $x;
  $y++;
  echo $y.".".$cars[$x];
  echo "<br />";
  }
?>
<?php
echo "<h3>String</h3>";
$txt="Hello world!";
echo $txt."<br />";
//string length
echo "the string has ".strlen($txt)." characters";
echo "<br />";
//String concatenation
$txt2="What a nice day!";
echo $txt . " " . $txt2;
?>

<?php
echo "<h3>FILE</h3>";
$ifile=fopen("2input.txt","r") or exit("Unable to open file!");
$ofile=fopen("2output.txt","w") or exit("Unable to open file!");
while (!feof($ifile))
  {
  $file = fgets($ifile);
  echo $file."<br />";
  fwrite($ofile,$file);
  }
fclose($ifile);
fclose($ofile);
?>

<?php
echo "<h3>directory</h3>";
//Open images directory
echo getcwd();
echo "<br />";
chdir("..");
echo getcwd();
echo "<br />";
$dir = dir("hdwebtraining");
$ofile=fopen("output.txt","w") or exit("Unable to open file!");

//List files in images directory
while (($file = $dir->read()) !== false)
{
echo "filename: " . $file . "<br />";
$a = $file."\n";
fwrite($ofile,$a);
}

$dir->close();
fclose($ofile);
?>

