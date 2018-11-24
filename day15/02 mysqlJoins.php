<?php

include_once 'includes/dbh.inc.php';

if (!$conn) {											//繋がってるか確認
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


$sql = "CREATE TABLE IF NOT EXISTS Customers(
CustomerID INT(4) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
CustomerName VARCHAR(30) NOT NULL,
ContactName VARCHAR(30) NOT NULL,
Country VARCHAR(50)
);";

if ($conn->query($sql) === TRUE)
	echo "Table MyUsers created successfully<br>";
else
	echo "Error creating table: " . $conn->error;


$sql = "CREATE TABLE IF NOT EXISTS Orders(
OrderID INT(4) NOT NULL,
CustomerID INT(4) UNSIGNED NULL,
OrderDate TIMESTAMP
);";

if ($conn->query($sql) === TRUE)
	echo "Table Orders created successfully<br>";
else
	echo "Error creating table: " . $conn->error;


$stmt = $conn->prepare("INSERT INTO Orders (OrderID, CustomerID)
						VALUES (?, ?)");
$stmt->bind_param("ii", $OrderID, $CustomerID);														//文字やとiじゃなくてs

$OrderID = 1;
$CustomerID = 101;
$stmt->execute();

$OrderID = 2;
$CustomerID = 103;
$stmt->execute();

$OrderID = 3;
$CustomerID = 102;
$stmt->execute();

$OrderID = 4;
$CustomerID = 101;
$stmt->execute();

$OrderID = 5;
$CustomerID = 102;
$stmt->execute();

$OrderID = 6;
$CustomerID = 103;
$stmt->execute();

$OrderID = 7;
$CustomerID = 105;
$stmt->execute();

$OrderID = 8;
$CustomerID = 104;
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();




?>