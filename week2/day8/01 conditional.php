<?php 
$a = 10;
$b = 15;

if ($a > $b)
	echo "a is bigger than b";

echo "<br>";
if ($a > $b) {
	echo "a is bigger than b";
}



echo "<br>";
$t = date("H");

echo "<br>";
if ($t < "20") {
	echo "Have a good day.";
}

echo "<br>";
if ($t < "20")
	echo "Have a good day.";
else
	echo "Have a good night.";

echo "<br>";
if ($t < "10")
	echo "Have a good morning.";
elseif ($t < "20")
	echo "Have a good day.";
else
	echo "Have a good night.";

echo "<br>";
if ($a > $b) {
	echo "a is bigger than b";
} elseif ($a == $b) {
	echo "a is equal to b";
} else {
	echo "a is smaller than b";
}

if ($a > $b)
	echo $a." is greater than ".$b;
elseif ($a == $b)
	echo $a." equals ".$b;
else
	echo $a." is neither greater than or equal to ".$b;
?>