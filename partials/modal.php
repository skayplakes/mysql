<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

    <div class="container button-container">
	    <button onclick="document.getElementById('id01').style.display='block'" style="width:auto;">Login</button>
	</div>

	<div id="id01" class="modal">
		<form class="modal-content animate" action="store_layout.php" method="POST">
			<div class="imgcontainer">
				<span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span> 
				<img src="img/man.png">
			</div>

			<div class="container modal-form">
					<label><b>Username</b></label>
					<input type="text" name="username" placeholder="Enter Username" required>

					<label><b>Password</b></label>
					<input type="password" name="password" placeholder="Enter Password" required>

					<button type="submit" name="login">Login</button>
					<input type="checkbox" checked="checked"> Remember me

			</div>

			<div class="container modal-form" style="background-color:#f1f1f1">
				<span class="psw">Forgot <a href="change_pass.php">password?</a></span>
				<span class="new" name='register'><a href="register.php">New user? Register here</a></span>

			</div>

		</form>

		<content>

			<?php require_once 'register.php'; ?>
			
		</content>

		<style>
			content {
				display: none;
			}
		</style> 
		<!--to hide the registration form in the modal -->

	</div>

	<!--END LOGIN BUTTON-->

</body>
</html>