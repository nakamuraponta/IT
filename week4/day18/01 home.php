<?php 

session_start();
if(!isset($_SESSION['username'])){
	header('location:01 index.php');
}
?>


<html>
<body>

<a href="01 logout.php">LOGOUT</a>
<h1>Welcome <?php echo $_SESSION['username']; ?></h1>

</body>
</html>