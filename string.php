<?php 
//Doc so co 3 chu so
function read_num($num){
	switch ($num){
		case 1:
			return "Mot ";
			break;
		case 2:
			return "Hai ";
			break;
		case 3:
			return "Ba ";
			break;
		case 4:
			return "Bon ";
			break;
		case 5:
			return  "Nam ";
			break;
		case 6:
			return "Sau ";
			break;
		case 7:
			return "Bay";
			break;
		case 8:
			return "Tam";
			break;
		case 9: 
			return "Chin";
			break;
		case 0:
			return "Khong";
			break;
		default:
			break;
	}
}
$num = 311;
$a[0] = floor($num / 100);
$a[1] = floor($num / 10) - $a[0]*10;
$a[2] = $num % 10;

if (($a[0]==0) && ($a[1]==0) && ($a[2] ==0))
	echo "Khong";
elseif($a[1]==1 && $a[2]==0)
	echo read_num($a[0])." Tram Muoi <br/>";
elseif($a[1]==1 && $a[2]==5)	 
	echo read_num($a[0])." Tram Lam <br/>";
elseif ($a[1]==1 && ($a[2]!=5||$a[2]!=0))
	echo read_num($a[0])." Tram Muoi ".read_num($a[2])."<br/>";
else echo read_num($a[0])." Tram ".read_num($a[1])." Muoi ".read_num($a[2])."<br/>";


echo "<br/ > String function <br/>";
$str = "This is an exaple";
$str1 = "That";
$str2 = "This";
$estr =  explode(" ",$str);
print_r($estr);
echo "<br/>";
foreach ($estr as $t )
{
	echo $t." ";
}
echo "<br/>";
echo str_replace($str2, $str1, $str);
?>


<?php
$mystring = 'This is an exaple';
$findme   = 'is';
$pos = strpos($mystring, $findme);
echo "<br/>";
// Note our use of ===.  Simply == would not work as expected
// because the position of 'a' was the 0th (first) character.
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
?>


<?php
$var1 = "Hello There";
$var2 = "hello there";
echo "<br />";
$if = strcasecmp($var1, $var2);
if ($if == 0) {
    echo "\"$var1\" is equal to \"$var2\" in a case-insensitive string comparison <br/>";
}
elseif ($if > 0)
	echo "\"$var1\" is longer than \"$var2\" <br/>";
else 
	echo "\"$var1\" is shorter than \"$var2\" <br/>";
?>

<?php 
echo "<br/>";
print "a \n b";
print("Hello World");

print "print() also works without parentheses.";

print "This spans
multiple lines. The newlines will be
output as well";

print "This spans\n multiple lines. The newlines will be\noutput as well.";

print "escaping characters is done \"Like this\".";

?>