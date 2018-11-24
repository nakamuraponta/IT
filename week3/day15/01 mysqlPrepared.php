<?php

include_once 'includes/dbh.inc.php';

if (!$conn) {											//繋がってるか確認
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


$stmt = $conn->prepare("INSERT INTO MyUsers (username, password, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $username, $password, $email);							//項目の数だけ?とS


$username = "John";
$password = "Doe";
$email = "john@example.com";
$stmt->execute();

$username = "Mary";
$password = "Doe";
$email = "mary@example.com";
$stmt->execute();

$username = "Julie";
$password = "Dooley";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
















?>