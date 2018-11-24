<?php 

include_once 'includes/dbh.inc.php';


if (!$conn) {											//繋がってるか確認
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


$sql = "SELECT * FROM MyUsers;";
$result = $conn -> query($sql);

if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
		echo $row["uid"]." &nbsp;".$row["username"]." &nbsp;".$row["password"]." &nbsp;".$row["email"]." &nbsp;".$row["reg_date"]."<br>";
	}
} else echo "No records found<br>";


$sql = "SELECT * FROM MyUsers WHERE username = 'Kishore';";
$result = $conn -> query($sql);

if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
		echo $row["uid"]." &nbsp;".$row["username"]." &nbsp;".$row["password"]." &nbsp;".$row["email"]." &nbsp;".$row["reg_date"]."<br>";
	}
} else echo "No records found<br>";


$sql = "SELECT * FROM MyUsers LIMIT 3";
$result = $conn -> query($sql);

if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
		echo $row["uid"]." &nbsp;".$row["username"]." &nbsp;".$row["password"]." &nbsp;".$row["email"]." &nbsp;".$row["reg_date"]."<br>";
	}
} else echo "No records found<br>";










?>