<?php 

session_start();

$dbServerName = "localhost";
$dbUsername = "root";
$dbPassword = "root";
$dbname = "mydatabase";

$conn = mysqli_connect($dbServerName,$dbUsername,$dbPassword);
mysqli_select_db($conn,$dbname);

$name = $_POST['name'];
$pass = $_POST['password'];

$s = "select * from users where username = '$name' && password = '$pass'";

$result = mysqli_query($conn,$s);
$num = mysqli_num_rows($result);
if ($num == 1) {
	$_SESSION['username'] = $name;
	header('location:01 home.php');
} else {
	header('location:01 index.php');
}

?>