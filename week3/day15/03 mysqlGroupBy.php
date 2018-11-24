<?php

include_once 'includes/dbh.inc.php';

if (!$conn) {											//繋がってるか確認
die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully<br>";


//同じ国の人何人いるか
$sql="SELECT COUNT(CustomerID), Country
	  FROM Customers
	  GROUP BY Country;";
echo "<br>";


//同じ国の人が二人以上
$sql="SELECT COUNT(CustomerID), Country
	  FROM Customers
	  GROUP BY Country
	  HAVING COUNT(CustomerID) >= 2";
echo "<br>";


//同じ国の人が二人以上っていうのを多い順に並び替える
$sql="SELECT COUNT(CustomerID), Country
	  FROM Customers
	  GROUP BY Country
	  HAVING COUNT(CustomerID) >= 2
	  ORDER BY COUNT(CustomerID) DESC;";
echo "<br>";


//インドと日本の人表示
$sql="SELECT * FROM Customers
	  WHERE Country IN ('India', 'Japan');";
echo "<br>";


//名前の最初の文字指定する
$sql="SELECT * FROM Customers
	  WHERE CustomerName LIKE 'b%';";
echo "<br>";


//名前の最後の文字指定する
$sql="SELECT * FROM Customers
	  WHERE CustomerName LIKE '%r';";
echo "<br>";


//名前の途中の文字指定する
$sql="SELECT * FROM Customers
	  WHERE CustomerName LIKE '%oh%';";
echo "<br>";


//名前の具体的に何文字目かの文字指定する
$sql="SELECT * FROM Customers
	  WHERE CustomerName LIKE '_i%';";
echo "<br>";


//特定の条件除外する
$sql="SELECT * FROM Customers
	  WHERE CustomerName NOT LIKE '_i%';";
echo "<br>";


//こんなことや
$sql="SELECT * FROM Customers
	  WHERE CustomerName LIKE 'jap%';";
echo "<br>";


//こんなこともできる
$sql="SELECT * FROM Customers
	  WHERE CustomerName NOT LIKE 'i_d_a';";
echo "<br>";




























?>