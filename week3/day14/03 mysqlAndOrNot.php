<?php 

include_once 'includes/dbh.inc.php';


if (!$conn) {
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


//どっちの条件も満たすと表示
$sql = "SELECT * FROM Persons WHERE Country='Finland' AND City='Helsinki';";
$result = $conn -> query($sql);


if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
		echo $row["PersonID"]." &nbsp;".$row["LastName"]." &nbsp;".$row["FirstName"]." &nbsp;".$row["Address"]." &nbsp;".$row["Country"]." &nbsp;".$row["City"]."<br>";
	}
} else echo "No records found<br>";
echo "<br>";


//どっちか満たすと表示
$sql = "SELECT * FROM Persons WHERE City='Stavanger' OR City='Helsinki';";
$result = $conn -> query($sql);


if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
		echo $row["PersonID"]." &nbsp;".$row["LastName"]." &nbsp;".$row["FirstName"]." &nbsp;".$row["Address"]." &nbsp;".$row["Country"]." &nbsp;".$row["City"]."<br>";
	}
} else echo "No records found<br>";
echo "<br>";


//ある条件を満たすと除外
$sql = "SELECT * FROM Persons WHERE NOT City='TOKYO';";
$result = $conn -> query($sql);


if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
		echo $row["PersonID"]." &nbsp;".$row["LastName"]." &nbsp;".$row["FirstName"]." &nbsp;".$row["Address"]." &nbsp;".$row["Country"]." &nbsp;".$row["City"]."<br>";
	}
} else echo "No records found<br>";
echo "<br>";



?>