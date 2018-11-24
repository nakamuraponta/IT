<?php 
	include_once 'includes/dbh.inc.php';
?>


<!DOCTYPE html>
<html>
<head>
	<title>PHP_MYSQL</title>
</head>
<body>


<?php 

if (!$conn) {																				//繋がってるか確認
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


$sql = "CREATE DATABASE IF NOT EXISTS mydb3";												//ブラウザじゃなくてもデータベースが作れる
if ($conn->query($sql) === TRUE)
echo "Database created successfully<br>";
else
echo "Error creating database: " . $conn->error;


$sql = "CREATE TABLE IF NOT EXISTS MyUsers (
uid INT(2) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
username VARCHAR(30) NOT NULL,
password VARCHAR(10) NOT NULL,
email VARCHAR(50),
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE)															//表をつくる
	echo "Table MyUsers created successfully<br>";
else
	echo "Error creating table: " . $conn->error;


/*
$sql = "INSERT INTO MyUsers (username, password, email)	
VALUES ('John', 'JohnDoe', 'john@example.com');";											//表にデータをおくる

$sql .= "INSERT INTO MyUsers (username, password, email)
VALUES ('Peter', 'PeterDoe', 'peter@example.com');";

$sql .= "INSERT INTO MyUsers (username, password, email)
VALUES ('Mary', 'MaryJohn', 'mary@example.com');";

$sql .= "INSERT INTO MyUsers (username, password, email)
VALUES ('Julie', 'JulieJohn', 'julie@example.com');";

$sql .= "INSERT INTO MyUsers (username, password, email)
VALUES ('Kishore', 'KishoreDoe', 'kishore@example.com');";

if ($conn->multi_query($sql) === TRUE)
echo "New record created successfully<br>";
else
echo "Error: " . $sql . "<br>" . $conn->error;
*/


$sql = "UPDATE MyUsers SET email='johndoe@gmail.com' WHERE uid=12";							//データの更新は部分的にできる

if ($conn->query($sql) === TRUE) {
	echo "Record updated successfully<br>";
} else {
	echo "Error updating record: " . $conn->error;
}


$sql = "DELETE FROM MyUsers WHERE uid=13";													//データを部分的に消去

if ($conn->query($sql) === TRUE) {
	echo "Record deleted successfully<br>";
} else {
	echo "Error deleting record: " . $conn->error;
}


$sql = "TRUNCATE TABLE MyUsers";															//データを全部消去

if ($conn->query($sql) === TRUE) {
	echo "Records from MyUsers deleted successfully<br>";
} else {
	echo "Error deleting record: " . $conn->error;
}


$sql = "DROP TABLE MyUsers";																//そもそも表を消去

if ($conn->query($sql) === TRUE) {
	echo "MyUsers table droped successfully<br>";
} else {
	echo "Error deleting table: " . $conn->error;
}


$conn->close();

?>
















</body>
</html>