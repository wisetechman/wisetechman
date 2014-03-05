<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Member Login</title>

<link rel="stylesheet" href="../css/login.css">
</head>
<body>
	<form action="loginPage.php" method="post" class="registration_form">
		<fieldset>
			<legend>Login Form </legend>

			<p>Enter Your username and Password Below</p>

			<div class="elements">
				<label for="name">Email :</label> <input type="text" id="e-mail" name="e-mail" size="25" />
			</div>

			<div class="elements">
				<label for="Password">Password:</label> <input type="password" id="Password" name="Password" size="25" />
			</div>
			<div class="submit">
				<input type="hidden" name="formsubmitted" value="TRUE" /> <input type="submit" value="Login" />
			</div>
		</fieldset>
	</form>
	Go Back to
	<a href="#">Account Verification on sign up</a>
</body>
</html>

<?php
include ('authenicateLogin.php');
?>