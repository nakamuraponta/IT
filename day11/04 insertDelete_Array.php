<!DOCTYPE html>
<html>
<head>
	<title>php insert and delete</title>
</head>
<body>
<?php 
$fruits=array('banana','apple','grape','orange');
$fruits[4]='mango';										//arrayに新しい要素を加えた
echo "<pre>";
print_r($fruits);
echo "</pre>";

$colors=array("red","green");
array_push($colors,"blue","yellow","white");			//arrayに新しい要素を加えた
echo "<pre>";
print_r($colors);
echo "</pre>";

$a=array("red","green");
array_pop($a);											//arrayの最後の要素消した
echo "<pre>";
print_r($a);
echo "</pre>";

$a1=array("red","green");
$a2=array("blue","yellow");
echo "<pre>";
print_r(array_replace($a1,$a2));						//arrayの最後の要素消した
echo "</pre>";
?>
</body>
</html>