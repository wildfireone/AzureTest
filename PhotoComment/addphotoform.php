<?php
include("check.php");
include("addphoto.php");
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Photo</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<a href="logout.php" style="font-size:18px">Click here to Logout?</a>
<h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>

<div class="photo box">
    <form method="post" action="">
        <label>Title</label><br>
        <input type="text" name="title" placeholder="title" /><br><br>
        <label>Description:</label><br>
        <textarea name="desc" cols="40" rows="5"  ></textarea><br><br>
        <input type="submit" name="submit" value="Submit Photo" />
    </form>
    <div class="msg"><?php echo $msg;?></div>
</div>
</body>
</html>