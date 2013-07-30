<?php
function gen_arr($n)
{
for ($i = 0; $i < $n; $i++)
	$a[$i] = rand(0,20);
return $a;	
}

function print_arr($arr){
$n = count($arr);
for ($i =0; $i< $n; $i++)
	{echo $arr[$i]." ";}
echo "<br />";
}

function sum_arr($arr){
	echo "sum of array is: ".array_sum($arr)."<br />";
}

function max_arr($arr){
	echo "Max of array is: ".max($arr)."<br/>";
}

function min_arr($arr){
echo "min of array is: ".min($arr)."<br />";
}

function replace_arr($arr, $old_val, $new_val){
$n = count($arr);
$k = 0;
for ($i =0; $i< $n; $i++)
{ 
if ($arr[$i]==$old_val)
	{$arr[$i] = $new_val;
	$k++;}
}
echo "<br />replaced $k values <br />";
return $arr;
}

$arr = gen_arr(10);
print_arr($arr);
max_arr($arr);
min_arr($arr);
sum_arr($arr);

print_r (array_count_values($arr));
$arr1 = replace_arr($arr, 2, 5);
print_arr($arr1);
//sort($arr);
//print_arr($arr); 
//$t = array_diff($arr, $arr1);
//print_arr($t);
//$array = array("color" => array("blue", "red", "green"),
  //             "size"  => array("small", "medium", "large"));
//print_r(array_keys($array));

?>


<?php
$input = array(4, "4", "3", 4, 3, "3");
$result = array_unique($input);
var_dump($result);
print_r($result);
?>
