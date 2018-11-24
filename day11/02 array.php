<?php 

//シンプルなarray
$cars = array("Volvo", "BMW", "Toyota");
echo "I like " . $cars[0] . ", " . $cars[1] . " and " . $cars[2] . ".<br><br>";


//ループ使ったarray
$cars = array("Volvo", "BMW", "Toyota");
$arrlength = count($cars);

for($x = 0; $x < $arrlength; $x++) {
	echo $cars[$x];
	echo "<br>";
}


//associative連立したarray
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");
echo "<br>Peter is " . $age['Peter'] . " years old.<br>";


//ループしてassociative連立したarray
$age = array("Peter"=>"35", "Ben"=>"37", "Joe"=>"43");

foreach($age as $x => $x_value) {
	echo "<br>";
	echo "Key=" . $x . ", Value=" . $x_value;
}





?>