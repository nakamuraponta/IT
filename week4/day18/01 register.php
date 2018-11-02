<?php 

session_start();

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbname = "mydatabase";

$conn = mysqli_connect($dbServerName,$dbUsername,$dbPassword);
mysqli_select_db($conn,$dbname);

$name = $_POST['name'];												//userをPOSTすることを$nameで定義しますよ
$pass = $_POST['password'];
$email = $_POST['email'];

$s = "select * from users where username = '$name'";				//同じ名前のやつ全部の名前から選ぶ

$result = mysqli_query($conn,$s);									//最初にコネクション、右は実行するコード
$num = mysqli_num_rows($result);									//選んだおんなじ名前の数数える
if ($num == 1) {
	echo "Username already taken";
} else {															//名前が被ってなければ登録する
	$reg = "insert into users(username,password,email) values ('$name','$pass','$email')";
	mysqli_query($conn,$reg);
	echo "Registerd successfully";
}






?>