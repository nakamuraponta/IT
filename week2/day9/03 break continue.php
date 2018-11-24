<?php 
$i = 0;
while (++$i) {
	switch ($i) {
		case 5:
			echo "At 5<br />\n";
			break 1;//switchの外に出る
		case 10:
			echo "At 10; exit while<br />\n";
			break 2;//switchとwhile両方の外に出る
		default:
			break;//switchの外に出る
	}
}
echo "<br>";
echo "<br>";


$j = 5;
while ($j > -1)
{
	$j--;
	if ($j == 0)
		continue;//0はスキップ
	echo (10 / $j) . "<br>";
}
 ?>