<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

$fruits=array("apple","mango","banana","grapes");
$numbers=array(7,6,4,2,9);

sort($fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

sort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";

rsort($fruits);
echo "<pre>";
print_r($fruits);
echo "</pre>";

rsort($numbers);
echo "<pre>";
print_r($numbers);
echo "</pre>";


$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

asort($age);		//右側 associate value
echo "<pre>";
print_r($age);
echo "</pre>";

arsort($age);
echo "<pre>";
print_r($age);
echo "</pre>";

ksort($age);		//左側 key
echo "<pre>";
print_r($age);
echo "</pre>";

krsort($age);
echo "<pre>";
print_r($age);
echo "</pre>";


$a1=array("dog", "cat");
$a2=array("fido","missy");							//これは$a1に紐づいてるから、$a1に合わせて順番入れ替わる
array_multisort($a1,$a2);
echo "<pre>";
print_r($a1);
print_r($a2);
echo "</pre>";

$a1=array("dog", "dog", "cat");
$a2=array("pluto","fido","missy");					//plutoとfidoはどっちでもよくなって、今度はSORT_ASCが効く
array_multisort($a1,SORT_DESC,$a2,SORT_ASC);
echo "<pre>";
print_r($a1);
print_r($a2);
echo "</pre>";

$a1=array(1,30,15,7,25);
$a2=array(4,30,20,41,66);
$num=array_merge($a1,$a2);
array_multisort($num,SORT_DESC,SORT_NUMERIC);
echo "<pre>";
print_r($num);
echo "</pre>";
?>
</body>
</html>