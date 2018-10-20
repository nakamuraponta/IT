<?php 
$x = 1;

while ($x <= 5) {
	echo "The number is $x <br>";
	$x++;
}
echo "<br>";

$i = 1;
while ($i <= 10) {
	echo $i++;//一文で増やすのと表示するの両方できます
}
echo "<br>";
echo "<br>";
echo "<br>";


$count = 1;
while ($count <= 12)
{
echo "$count times 12 is " . $count*12 . "<br>";
++$count;
}
echo "<br>";

$count = 0;
while (++$count <= 12)
echo "$count times 12 is " . $count*12 . "<br>";
?>