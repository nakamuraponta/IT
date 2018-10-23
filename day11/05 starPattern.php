<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 
echo "Pattern 1";
echo "<pre>";
for($i=0;$i<=5;$i++){
	for($j=1;$j<=$i;$j++){
		echo "* ";
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 2";
echo "<pre>";
for($i=5;$i>=0;$i--){
	for($j=1;$j<=$i;$j++){
		echo "* ";
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 3";
echo "<pre>";
for($i=0;$i<=5;$i++){
	for($j=1;$j<=5-$i;$j++){
		echo "   ";
	}
	for($k=1;$k<=$i*2-1;$k++){
		echo "* ";
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 4";
echo "<pre>";
for($i=0;$i<=10;$i++){
	if ($i<=5) {
		for($j=1;$j<=$i;$j++){
		echo "*  ";
		}
	}
	if ($i>=6) {
		for($j=1;$j<=11-$i;$j++){
		echo "*  ";
		}
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 5";
echo "<pre>";
for($i=0;$i<=4;$i++){
	for($j=1;$j<=5;$j++){
		echo "*   ";
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 6";
echo "<pre>";
for($i=0;$i<=5;$i++){
	if ($i<=3) {
		for($j=1;$j<=$i*2-1;$j++){
		echo "*  ";
		}
	}
	if ($i>=4) {
		for($j=1;$j<=12-$i*2-1;$j++){
		echo "*  ";
		}
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";



echo "Pattern 7";
echo "<pre>";
for($i=0;$i<=13;$i++){
	if ($i<=3) {
		for($j=1;$j<=3-$i;$j++){
		echo "     ";
		}
		for($j=1;$j<=$i*2+3;$j++){
		echo "*   ";
		}
		for($j=1;$j<=7-$i*2;$j++){
		echo "     ";
		}
		for($j=1;$j<=$i*2+3;$j++){
		echo "*   ";
		}
		for($j=1;$j<=3-$i;$j++){
		echo "     ";
		}
	}
	if ($i>=4) {
		for($j=1;$j<=$i-4;$j++){
		echo "     ";
		}
		for($k=1;$k<=27-$i*2;$k++){
		echo "*   ";
		}
	}
echo "<br>";
}
echo "</pre>";
echo "<br>";
?>
</body>
</html>