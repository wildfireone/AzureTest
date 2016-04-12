<?php
	include("check.php");	
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Home</title>
<link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<a href="logout.php" style="font-size:18px">Click here to Logout?</a>
<h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>

<div class="searchBox">
	<form method="post" action="">
		<label>Username:</label><br>
		<input type="text" name="username" placeholder="username" /><br><br>
		<label>Password:</label><br>
		<input type="password" name="password" placeholder="password" />  <br><br>
		<input type="submit" name="submit" value="Login" />
	</form>
	<div class="error"><?php echo $error;?></div>
	<div class="register">You can register <a href="register.php"> here </a> </div>
</div>

<div id="photolist">


</div>

</body>
</html>