<!DOCTYPE html>
<html>
<head>
	<title>FORM VALIDATION</title>
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
	<style>
		.error {color: #FF0000;}
	</style>
</head>
<body>


<?php 

$nameErr = $emailErr = $genderErr = $websiteErr = "";
$name = $email = $gender = $comment = $website = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	if (empty($_POST["name"])) {
		$nameErr = "Name is required";
	} else {
		$name = test_input($_POST["name"]);
		if (!preg_match("/^[a-zA-Z]*$/",$name)) {
			$nameErr = "Only letters and white space allowed";
		}
	}

if (empty($_POST["email"])) {
	$emailErr = "Email is required";
} else {
	$email = test_input($_POST["email"]);
	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
		$emailErr = "Invalid email format";
	}
}

if (empty($_POST["website"])) {
	$websiteErr = "Website is required";
} else {
	$website = test_input($_POST["website"]);
	if (!preg_match("/\b(?:(?:https?|ftp):\/\/|www\.)[-a-z0-9+&@#\/%?=~_|!:,.;]*[-a-z0-9+&@#\/%=~_|]/i",$website)) {
		$websiteErr = "Invalid URL";
	}
}

if (empty($_POST["comment"])) {
	$comment = "";
} else {
	$comment = test_input($_POST["comment"]);
}

if (empty($_POST["gender"])) {
	$genderErr = "Gender is required";
} else {
	$gender = test_input($_POST["gender"]);
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
	<div class="row">
		<div class="col-md-12 mt-5">
			<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
				<div class="form-group">
					Name: <input type="text" name="name" class="form-control" value="<?php echo $name;?>">
					<span class="error"> <?php echo $nameErr;?></span>
					<br>
				</div>
				<div class="form-group">
					E-mail: <input type="text" name="email" class="form-control" value="<?php echo $email;?>">
					<span class="error"> <?php echo $emailErr;?></span>
					<br>
				</div>
				<div class="form-group">
					Website: <input type="text" name="website" class="form-control" value="<?php echo $website;?>">
					<span class="error"> <?php echo $websiteErr;?></span>
					<br>
				</div>
				<div class="form-group">
					Comment: <textarea name="comment" rows="5" cols="40" class="form-control"><?php echo $comment;?></textarea>
				</div>
				<div class="form-group">
					Genders:
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="female") echo "checked";?> value="female">Female
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="male") echo "checked";?> value="male">Male
					<input type="radio" name="gender" <?php if (isset($gender) && $gender=="other") echo "checked";?> value="other">Other
					<span class="error"><?php echo $genderErr;?></span>
					<br>
				</div>
				<button type="submit" class="btn btn-primary">LOGIN</button>
			</form>
		</div>
	</div>
</div>











</body>
</html>