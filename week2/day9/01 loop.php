<?php 
$x = 1;

do {
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);
echo "<br>";

$x = 6;
do {
	echo "The number is: $x <br>";
	$x++;
} while ($x <= 5);
echo "<br>";
echo "<br>";


$count = 1;//ステートメントが一個だけやとブラケットいらない
do
echo "$count times 12 is ". $count*12 ."<br>";
while (++$count <= 12);
echo "<br>";

$count = 1;//二個やからブラケットいる
do {
echo "$count times 12 is ". $count*12;
echo "<br>";
} while (++$count <= 12);
echo "<br>";

$i = 0;
do {
	if ($i == 0)
	echo "Value is ".$i;
} while (++$i > 0);//ここで1になって、次==0じゃなくなるから一回で終わり
echo "<br>";
echo "<br>";


for ($x = 0; $x <= 10; $x++) {
	echo "The number is: $x <br>";
} 



?>