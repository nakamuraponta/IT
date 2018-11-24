<?php 
$name="kazuaki";
$x=5;
$y=10.5;
$a=5;
$b=10;
echo "My name is $name";
echo "My name is ".$name."!";
echo $x+$y;
echo "<br>";

$var_name1 = 678;
$var_name2 = "a678";
$var_name3 = "678";
$var_name4 = "W3resource.com";
$var_name5 = 698.99;
$var_name6 =+125689.66;
echo var_dump($var_name1)."<br>";
echo var_dump($var_name2)."<br>";
echo var_dump($var_name3)."<br>";
echo var_dump($var_name4)."<br>";
echo var_dump($var_name5)."<br>";
echo var_dump($var_name6)."<br>";

//var_dump() with arrays
$var_name=array(99, 'w3resource', 67899.99, array('X', 'Y' ,1));
var_dump($var_name);

$var1 = 'test';
var_dump(isset($var1));
?>