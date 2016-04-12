<?php

	include("connection.php");
	include("submit.php");

?>
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Registration Form</title>
<link rel="stylesheet" type="text/css" href="../registration/style.css">
</head>

<body>
<div align="center">
	<h1 style="font-family:Cambria, 'Hoefler Text', 'Liberation Serif', Times, 'Times New Roman', serif; font-size:32px;">Photo Commenter Registration</h1>
	<div class="loginBox">
		<h3>Login Form</h3>
		<br><br>
		<form method="post" action="">
			<label>Username:</label><br>
			<input type="text" name="username" placeholder="username" required/><br><br>
			<label>Email:</label><br>
			<input type="email" name="email" placeholder="email" required />  <br><br>
			<label>Password:</label><br>
			<input type="password" name="password" placeholder="password" required/>  <br><br>
			<input type="submit" name="submit" value="Register!" />
		</form>
		<div class="error"><?php echo $error;?></div>
		<div class="register">You can register <a href="register.php"> here </a> </div>
	</div>
</body>
</html>
