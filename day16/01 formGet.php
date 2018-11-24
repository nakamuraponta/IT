<!DOCTYPE html>
<html>
<head>
	<title>Form using get method</title>
</head>
<body>
<form method="POST" action="02 welcome.php">								//POSTじゃなくてGETやと、送った後表示されるページでURLに表示されちゃう
	<div>
		<label>Name:</label><br>
		<input type="text" name="name" placeholder="username">
	</div>
	<div>
		<label>Password:</label><br>
		<input type="password" name="password" placeholder="password">
	</div>
	<div>
		<label>Name:</label><br>
		<input type="text" name="email" placeholder="email"><br>
	</div>
		<input type="submit" value="submit">
</form>
	









</body>
</html>

