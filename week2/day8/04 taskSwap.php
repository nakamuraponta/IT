<?php 
$fruit1 = "apple";
$fruit2 = "orange";

echo $fruit1;
echo "<br>";

$temp = $fruit1;
$fruit1 = $fruit2;
$fruit2 = $temp;

echo $fruit1;
echo "<br>";
echo "<br>";


$number = 123;
echo "The sum of the digits of $number is ";

$x = floor($number/100);
$xRemainder = $number%=100;
$y = floor($xRemainder/10);
$z = $xRemainder%=10;
$sum = array($x, $y, $z);
echo array_sum($sum);
echo "<br>";
echo "<br>";

$number = 123456;
$count = 100;
$x = 10**$count;
$y = floor($number/$x);
while ($count >= 0) {
	echo $y"<br>";
--$count;
}

?>