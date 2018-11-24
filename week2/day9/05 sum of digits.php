<?php 
	$num = 2018;
	$sum = 0;
	$rem = 0;

for ($i=0; $i <= strlen($num); $i++){
	$rem = $num % 10;    //  8     1     0     2
	$sum = $sum + $rem;  //0+8   8+1   9+0   9+2
	$num = $num / 10;    //201    20     2   0.1
}

echo "Sum of digits: $sum";
?>