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

/*
$sql = "CREATE TABLE IF NOT EXISTS Orders(
OrderID INT(4) NOT NULL,
OrderDate TIMESTAMP,
CustomerID INT(4),
PRIMARY KEY (OrderID),
FOREIGN KEY (CustomerID) REFERENCES Customers(CustomerID)
);";

if ($conn->query($sql) === TRUE)
else
	echo "Table Orders created successfully<br>";
	echo "Error creating table: " . $conn->error;
*/

$stmt = $conn->prepare("INSERT INTO Customers (CustomerID, CustomerName, ContactName, Country) VALUES (?, ?, ?, ?)");
$stmt->bind_param("isss", $CustomerID, $CustomerName, $ContactName, $Country);														//数字やとsじゃなくてi

$CustomerID = 101;
$CustomerName = "John";
$ContactName = "JohnDoe";
$Country = "India";
$stmt->execute();

$CustomerID = 102;
$CustomerName = "Michel";
$ContactName = "Gates";
$Country = "Japan";
$stmt->execute();

$CustomerID = 103;
$CustomerName = "Sridhar";
$ContactName = "Murali";
$Country = "Russia";
$stmt->execute();

$CustomerID = 104;
$CustomerName = "Bill";
$ContactName = "Clinton";
$Country = "Japan";
$stmt->execute();

$CustomerID = 105;
$CustomerName = "Sunder";
$ContactName = "Pichhai";
$Country = "India";
$stmt->execute();

$CustomerID = 106;
$CustomerName = "Mark";
$ContactName = "Zucherberg";
$Country = "Japan";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();




?>