<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<body>
	<h1>Register form</h1>
	<?php
		$errUsername = $errPhone = $errEmail = $errGender = "";
	?>
	<form action="#" method="POST">
		<p>Username*: 
			<input type="text" name="username">
		</p>
		<p>Email*: 
			<input type="text" name="email">
		</p>
		<p>Phone*: 
			<input type="text" name="phone">
		</p>
		<p>Gender*: 
			<input type="radio" name="gender" value="male"> Male
			<input type="radio" name="gender" value="female"> Female
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
	<?php
		if (isset($_POST['username'])) {
			$userName = $_POST['username'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$gender = "";
			if (isset($_POST['gender'])) {
				$gender = $_POST['gender'];
			}
			echo $userName." <br>";
			echo $email." <br>";
			echo $phone." <br>";
			echo $gender." <br>";
		}
	?>
</body>
</html>