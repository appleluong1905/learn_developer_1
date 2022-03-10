<!DOCTYPE html>
<html>
<head>
	<title>Register</title>
</head>
<body>
	<h1>Register form</h1>
	<!-- <form action="success.php"> -->
	<form method="POST">
		<p>
			Username: <input type="text" name="username111">
		</p>
		<p>
			Email: <input type="text" name="emailttttt">
		</p>
		<p>
			<input type="submit" name="Register" value="Register">
		</p>
	</form>
	<?php 
		// echo $_POST['username111'];
		// echo "<br>";
		// echo $_POST['emailttttt'];
		// echo $_GET['username'];
		// echo "<br>";
		// echo $_GET['email'];
	    echo $_REQUEST['username111'];
		echo "<br>";
		echo $_REQUEST['emailttttt'];
	?>

</body>
</html>