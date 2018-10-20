<?php 
for ($x = 0; $x <= 10; $x++) {
	echo "The number is: $x <br>";
} 
echo "<br>";
echo "<br>";


$colors = array("red","green", "blue", "yellow");
foreach ($colors as $value) {
	echo "$value <br>";
}
echo "<br>";

$colors = array("red","green", "blue", "yellow");
$j = 0;
foreach ($colors as $value) {
	echo "$j: $value<br>";
	++$j;
}
echo "<br>";

$array = array(
'red' => "red apple",
'green' => "green pear",
'blue' => "blue grape",
'yellow' => "yellow banana"
);
foreach ($array as $colors => $fruits)//ここと
echo "$colors: $fruits<br>";
echo "<br>";

$array = array(
'red' => "red apple",
'green' => "green pear",
'blue' => "blue grape",
'yellow' => "yellow banana"
);
while (list($colors, $fruits) = each($array))//ここが違うだけ
echo "$colors: $fruits<br>";
echo "<br>";
?>