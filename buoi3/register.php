<!DOCTYPE html>
<html>
<head>
	<title>Register form</title>
</head>
<body>
	<h1>Register form</h1>
	<?php
		$errUsername = $errPhone = $errEmail = $errGender = "";
		$userName = $email = $phone = "";
		if (isset($_POST['username'])) {
			$userName = $_POST['username'];
			$email = $_POST['email'];
			$phone = $_POST['phone'];
			$gender = "";

			if (isset($_POST['gender'])) {
				$gender = $_POST['gender'];
			} else {
				$errGender = "Please choose your gender";
			}
			if ($_POST['username'] == '') {
				$errUsername = "Please input your username";
			}
			if ($_POST['email'] == '') {
				$errEmail = "Please input your email";
			}
			if ($_POST['phone'] == '') {
				$errPhone = "Please input your phone";
			}
		}
	?>
	<form action="#" method="POST">
		<p>Username*: 
			<input type="text" name="username" value="<?php echo $userName?>">
			<?php echo $errUsername;?>
		</p>
		<p>Email*: 
			<input type="text" name="email" value="<?php echo $email?>">
			<?php echo $errEmail;?>
		</p>
		<p>Phone*: 
			<input type="text" name="phone" value="<?php echo $phone?>">
			<?php echo $errPhone;?>
		</p>
		<p>Gender*: 
			<input type="radio" name="gender" value="male" <?php echo ($gender == 'male')?'checked':'';?>> Male
			<input type="radio" name="gender" value="female" <?php echo ($gender == 'female')?'checked':'';?>> Female
			<?php echo $errGender;?>
		</p>
		<p>
			<input type="submit" name="register" value="Register">
		</p>
	</form>
</body>
</html>