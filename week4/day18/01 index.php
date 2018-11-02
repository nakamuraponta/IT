<!DOCTYPE html>
<html>
<head>
	<title>FORM VALIDATION</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="01 index.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php 

$nameErr= $emailErr = $passwordErr = "";
$name = $email = $password = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name"])) {
	$nameErr = "Name is required";
} else {
	$name = test_input($_POST["name"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
		$nameErr = "Only letters and space allowed";
	}
}

if (empty($_POST["password"])) {
	$passwordErr = "password is required";
} else {
	$password = test_input($_POST["password"]);
}

if (empty($_POST["email"])) {
	$emailErr = "Email is required";
} else {
	$email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format";
	}
}
}
	

function test_input($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}
?>


<div class="container">
	<div class="wrapper crearfix">
		<div class="left p-5">
			<form method="post" action="01 validation.php">
				<h3>LOGIN HERE</h3>
				<div class="form-group">
					<p style="font-size: 15px; font-weight: lighter;">Username</p>
					<input type="text" name="name" class="form-control" value="<?php echo $name;?>" style="margin-top: -15px;">
					<span class="error"> <?php echo $nameErr;?></span>
					<br>
				</div>
				<div class="form-group">
					<p style="font-size: 15px; font-weight: lighter; margin-top: -20px;">Password</p>
					<input type="password" name="password" class="form-control" value="<?php echo $password;?>" style="margin-top: -15px;">
					<span class="error"> <?php echo $passwordErr;?></span>
					<br>
				</div>
				<button type="submit" class="btn btn-primary" style="margin-left: 75px; margin-top: 80px;">LOGIN</button>
			</form>
		</div>
		<div class="right p-5">
			<form method="post" action="01 register.php">
				<h3>REGISTER HERE</h3>
				<div class="form-group">
					<p style="font-size: 15px; font-weight: lighter;">Username</p>
					<input type="text" name="name" class="form-control" value="<?php echo $name;?>" style="margin-top: -15px;">
					<span class="error"> <?php echo $nameErr;?></span>
					<br>
				</div>
				<div class="form-group">
					<p style="font-size: 15px; font-weight: lighter; margin-top: -20px;">Password</p>
					<input type="password" name="password" class="form-control" value="<?php echo $password;?>" style="margin-top: -15px;">
					<span class="error"> <?php echo $passwordErr;?></span>
					<br>
				</div>
				<div class="form-group">
					<p style="font-size: 15px; font-weight: lighter; margin-top: -20px;">E-mail</p>
					<input type="text" name="email" class="form-control" value="<?php echo $email;?>" style="margin-top: -15px;">
					<span class="error"> <?php echo $emailErr;?></span>
					<br>
				</div>
				<button type="submit" class="btn btn-primary" style="margin-left: 60px;">REGISTER</button>
			</form>
		</div>
	</div>
</div>











</body>
</html>