<?php
include("check.php");
include("addcomment.php");
?>

<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Add Photo</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
<div class="main">
<a href="logout.php" style="font-size:18px">Click here to Logout?</a>
<h1 class="hello">Hello, <em><?php echo $login_user;?>!</em></h1>

<div class="formbox">
    <form method="post" action="">
        <label>Comment:</label><br>
        <textarea name="desc" cols="40" rows="5"  ></textarea><br><br>
        <label>Photo:</label>
        <input type="text" name="photoID" value="<?php echo $_GET['id'] ?>" /><br><br>
        <input type="submit" name="submit" value="Submit Comment" />
    </form>
    <div class="msg"><?php echo $msg;?></div>
</div>
    </div>
</body>
</html>