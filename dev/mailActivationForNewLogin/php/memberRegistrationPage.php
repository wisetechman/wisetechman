<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Registration of New Member</title>
<link rel="stylesheet" href="../css/memberRegistration.css">
</head>
<body>

	<form action="memberRegistration.php" method="post" class="registration_form">
		<fieldset>
			<legend>Registration Form </legend>

			<p>
				Create A new Account <span
					style="background: #EAEAEA none repeat scroll 0 0; line-height: 1; margin-left: 210px;; padding: 5px 7px;">Already
					a member? <a href="login.php">Log in</a>
				</span>
			</p>

			<div class="elements">
				<label for="name">Name :</label> <input type="text" id="name" name="name" size="25" />
			</div>
			<div class="elements">
				<label for="e-mail">E-mail :</label> <input type="text" id="e-mail" name="e-mail" size="25" />
			</div>
			<div class="elements">
				<label for="Password">Password:</label> <input type="password" id="Password" name="Password" size="25" />
			</div>
			<div class="submit">
				<input type="hidden" name="formsubmitted" value="TRUE" /> <input type="submit" value="Register" />
			</div>
		</fieldset>
	</form>
	Go Back to
	<a href="#">Account Verification on sign up</a>
</body>
</html>