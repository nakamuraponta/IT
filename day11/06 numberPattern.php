<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
echo "Pattern 1";
echo "<pre>";
$k=1;
for($i=0;$i<=4;$i++){
	for($j=1;$j<=$i;$j++){
		echo $k;
		$k++;
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 2";
echo "<pre>";
for($i=0;$i<=5;$i++){
	for($j=1;$j<=$i;$j++){
		if ($j%2==1) {
			echo "0 ";
		}
		else {
			echo "1 ";
		}
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 3";
echo "<pre>";
for($i=0;$i<=5;$i++){
	for($j=1;$j<=$i;$j++){
		echo $j;
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 4";
echo "<pre>";
for($i=0;$i<=5;$i++){
	for($j=1;$j<=$i;$j++){
		echo "1 ";
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 5";
echo "<pre>";
for($i=5;$i>=0;$i--){
	for($j=1;$j<=$i;$j++){
		echo "1 ";
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 6";
echo "<pre>";
for($i=5;$i>=0;$i--){
	for($j=1;$j<=$i;$j++){
		echo $i-$j+1;
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 7";
echo "<pre>";
for($i=5;$i>=0;$i--){
	for($j=1;$j<=$i;$j++){
		echo $i;
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 8";
echo "<pre>";
for($i=0;$i<=8;$i++){
	for($j=1;$j<=8-$i;$j++){
		echo "  ";
	}
	for($k=1;$k<=$i*2-1;$k++){
		echo $i;
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 9";
echo "<pre>";
for($i=1;$i<=5;$i++){
	for($j=1;$j<=$i-1;$j++){
		echo "  ";
	}
	for($k=1;$k<=11-$i*2;$k++){
		echo 6-$i;
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 10";
echo "<pre>";
for($i=0;$i<=5;$i++){
	for($j=$i;$j>=1;$j--){
		echo $j;
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";
?>
</body>
</html>