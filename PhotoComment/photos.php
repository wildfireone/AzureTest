<?php
	include("check.php");
	include("userphotos.php");
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

<div id="photolist">
	<?php echo $resultText;?>
</div>
<a href='addphotoform.php'> Add New Photo </a>;

</body>
</html>