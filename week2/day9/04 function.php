<?php 
//argumentもreturnもない
function sayHello(){
	echo "Hello";
}
sayHello();//ファンクションの呼び出し
echo "<br><br>";



//argumentはあってreturnはない
function sayHello2($name){
	echo "Hello $name<br/>";
}
sayhello2("Padma");
sayhello2("Kazuaki");
sayhello2("Raj");
echo "<br>";


//argumentはなくてreturnはある
function square(){
$x = 5;
return $x*$x;
}
echo "Square of 5 is: ".square();
echo "<br><br>";


//argumentもreturnもある
function cube($n){
return $n*$n*$n;
}
echo "Cube of 3 is: ".cube(3);
echo "<br><br>";


//default argument
function sayHello3($name = "Kazuaki"){
	echo "Hello $name<br/>";
}
sayhello3("Padma");
sayhello3();//ここはデフォルトのKazuakiに
sayhello3("Raj");
echo "<br>";


//recursive function ファンクションの中におんなじファンクション
function recursion($a)
{
	if ($a < 20) {
		echo "$a\n";
		recursion($a + 1);
	}
}
recursion(10);
echo "<br><br>";


//array使ったやつ
$input = array(1,2,3,4);
function takes_array($input)
{
	echo "$input[1] + $input[3] = " , $input[1] + $input[3];//arrayの時は、文章繋ぐ時ドットじゃなくてカンマ
}
takes_array($input);
echo "<br><br>";


function sum($a, $b): float {
	return $a +$b;
}
var_dump(sum(1, 2));
 ?>