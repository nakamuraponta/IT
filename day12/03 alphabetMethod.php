<?php


$alpha = range('A','Z');
for($i=0; $i<5; $i++){
	for($j=5; $j>$i; $j--){
		echo $alpha[$i];
	}
	echo "<br>";
}


echo "<br>";
for($i=65;$i<=69;$i++){						//65がAっていうのはなんかで決まってる
	for($j=5;$j>=$i-64;$j--){
		echo chr($i);						//chrが数字を文字に変換するやつ
	}
	echo "<br>";
}


echo "<br>";
$alpha = range('A','Z');
for($i=0; $i<5; $i++){
	for($j=0; $j<=$i; $j++){
		echo $alpha[$i];
	}
	echo "<br>";
}


echo "<br>";
$alpha = range('A','Z');
for($i=0; $i<5; $i++){
	for($j=0; $j<=$i; $j++){
		echo $alpha[$j];
	}
	echo "<br>";
}


echo "<br>";
$alpha = range('A','Z');
for($i=0; $i<5; $i++){
	for($j=4; $j>=$i; $j--){
		echo $alpha[$j];
	}
	echo "<br>";
}




















?>