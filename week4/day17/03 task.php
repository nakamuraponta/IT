<!DOCTYPE html>
<html>
<head>
	<title>FORM VALIDATION</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="03 task.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php 

$name1Err = $name2Err = $emailErr = $password1Err = $password2Err = "";
$name1 = $name2 = $email = $password1 = $password2 = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
if (empty($_POST["name1"])) {
	$name1Err = "Name is required";
} else {
	$name1 = test_input($_POST["name1"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$name1)) {
		$name1Err = "Only letters and space allowed";
	}
}

if (empty($_POST["password1"])) {
	$password1Err = "password is required";
} else {
	$password1 = test_input($_POST["password1"]);
}

if (empty($_POST["name2"])) {
	$name2Err = "Name is required";
} else {
	$name2 = test_input($_POST["name2"]);
	if (!preg_match("/^[a-zA-Z ]*$/",$name2)) {
		$name2Err = "Only letters and white space allowed";
	}
}

if (empty($_POST["password2"])) {
	$password2Err = "password is required";
} else {
	$password2 = test_input($_POST["password2"]);
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
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<h3>LOGIN HERE</h3>
				<div class="form-group">
					<p style="font-size: 15px; font-weight: lighter;">Username</p>
					<input type="text" name="name1" class="form-control" value="<?php echo $name1;?>" style="margin-top: -15px;">
					<span class="error"> <?php echo $name1Err;?></span>
					<br>
				</div>
				<div class="form-group">
					<p style="font-size: 15px; font-weight: lighter; margin-top: -20px;">Password</p>
					<input type="password" name="password1" class="form-control" value="<?php echo $password1;?>" style="margin-top: -15px;">
					<span class="error"> <?php echo $password1Err;?></span>
					<br>
				</div>
				<button type="submit" class="btn btn-primary" style="margin-left: 75px; margin-top: 80px;">LOGIN</button>
			</form>
		</div>
		<div class="right p-5">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<h3>REGISTER HERE</h3>
				<div class="form-group">
					<p style="font-size: 15px; font-weight: lighter;">Username</p>
					<input type="text" name="name2" class="form-control" value="<?php echo $name2;?>" style="margin-top: -15px;">
					<span class="error"> <?php echo $name2Err;?></span>
					<br>
				</div>
				<div class="form-group">
					<p style="font-size: 15px; font-weight: lighter; margin-top: -20px;">Password</p>
					<input type="password" name="password2" class="form-control" value="<?php echo $password2;?>" style="margin-top: -15px;">
					<span class="error"> <?php echo $password2Err;?></span>
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