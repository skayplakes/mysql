<?php

require_once 'connection.php';

if(isset($_POST['register'])) {
	$username = $_POST['username'];
	$password = $_POST['password'];
	$pw2 = $_POST['pw2'];

	if($password == $pw2) {
		$password = sha1($password);
		$sql = "INSERT INTO users (username,password,role) VALUES ('$username','$password','regular')";
		mysqli_query($connect,$sql);

		echo "Registered successfully";

	} else {
		echo "Password did not match.";
	}
}	



?>





<!DOCTYPE html>
<html>
<head>
	<title></title>

	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>


<body>

	<div class="container-fluid">
		<h1>Register</h1>

		<form method="POST" action="">

			<div class="form-group">
				<input type="text" name="username" placeholder="Username">
			</div>

			<div class="form-group">
				<input type="password" name="password" placeholder="Password">
			</div>

			<div class="form-group">
				<input type="password" name="pw2" placeholder="Confirm Password">
			</div>

			<div class="form-group">
				<input class="btn btn-success" class="btn btn-default" type="submit" name="register" value="Register">
			</div>

		</form>
	</div>



	<script src="jquery-3.2.1.min.js"></script>
	<!-- Latest compiled and minified JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</body>
</html>