<?php 

include_once 'includes/dbh.inc.php';

$sql = "CREATE TABLE IF NOT EXISTS Persons (
PersonID INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
LastName varchar(25),
FirstName varchar(25),
Address varchar(60),
Country varchar(25)
)";

if ($conn->query($sql) === TRUE)
	echo "Table Persons created successfully<br>";
else
	echo "Error creating table: " . $conn->error;


/*
$sql = "INSERT INTO Persons (LastName, FirstName, Address, Country)
VALUES ('Nakamura', 'Ken', 'Kawasaki', 'Japan');";

$sql .= "INSERT INTO Persons (LastName, FirstName, Address, Country)
VALUES ('Fujihira', 'Kazuaki', 'Chiba', 'Japan');";

$sql .= "INSERT INTO Persons (LastName, FirstName, Address, Country)
VALUES ('Iso', 'Takuma', 'Ibaraki', 'Japan');";

$sql .= "INSERT INTO Persons (LastName, FirstName, Address, Country)
VALUES ('Wolski', 'Zbyszek', 'Keskuskatu', 'Finland');";

$sql .= "INSERT INTO Persons (LastName, FirstName, Address, Country)
VALUES ('Wilman Kala', 'Matti Karttunen', 'Florida', 'Norway');";

if ($conn->multi_query($sql) === TRUE)			//これがないとできない
echo "New record created successfully<br>";
else
echo "Error: " . $sql . "<br>" . $conn->error;
*/


$sql="SELECT DISTINCT Country FROM Persons;";			//かぶってるやつ除外して表示
$result = $conn -> query($sql);

if($result -> num_rows > 0){
	while($row = $result -> fetch_assoc()){
		echo $row["Country"]."<br>";
	}
} else echo "No records found<br>";


/*
$sql="ALTER TABLE Persons ADD City varchar(25);";		//表の項目を変える
if ($conn->query($sql) === TRUE)
	echo "Table Persons altered successfully<br>";
else
	echo "Error altering table: " . $conn->error;
*/


$sql = "UPDATE Persons SET City = 'Tokyo' WHERE Country = 'Japan';";
$sql .= "UPDATE Persons SET City = 'Helsinki' WHERE Country = 'Finland';";
$sql .= "UPDATE Persons SET City = 'Stavanger' WHERE Country = 'Norway';";

if ($conn->multi_query($sql) === TRUE)
echo "Records updated successfully<br>";
else
echo "Error: " . $sql . "<br>" . $conn->error;


























?>