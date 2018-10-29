<?php

include_once 'includes/dbh.inc.php';

if (!$conn) {											//繋がってるか確認
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


$sql = "CREATE TABLE IF NOT EXISTS Products(
ProductID INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
ProductName VARCHAR(25) NOT NULL,
Price INT(5) NOT NULL,
MFD TIMESTAMP,
Country VARCHAR(25)
);";

if ($conn->query($sql) === TRUE)
	echo "Table MyUsers created successfully<br>";
else
	echo "Error creating table: " . $conn->error;


$sql = "INSERT INTO Products (ProductName, Price, Country)
VALUES ('Amul', 500, 'India');";

$sql .= "INSERT INTO Products (ProductName, Price, Country)
VALUES ('PatatoChips', 752, 'Italy');";

$sql .= "INSERT INTO Products (ProductName, Price, Country)
VALUES ('KitKat', 680, 'USA');";

$sql .= "INSERT INTO Products (ProductName, Price, Country)
VALUES ('Maaza', 830, 'Japan');";

$sql .= "INSERT INTO Products (ProductName, Price, Country)
VALUES ('GoodDay', 900, 'India');";


if ($conn->multi_query($sql) === TRUE)
	echo "New records created successfully<br>";
else
	echo "Error: " . $sql ."<br>" . $conn->error;

$sql = "SELECT MIN(Price) AS SmallestPrice
		FROM Products;";

?>