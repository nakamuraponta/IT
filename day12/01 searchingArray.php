<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php 

$a=array("a"=>"red", "b"=>"green","c"=>"blue");
echo array_search("RED",$a,true);
echo "<br><br>";

$a=array("a"=>"5","b"=>5, "c"=>"5");
echo array_search(5,$a,true);

?>



 </body>
</html>