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

<div id="photo">
    <?php
        if(isset($GET_['id'])){
            $photoID = $GET_['id'];
            $photoSql="SELECT * FROM photos WHERE photoID='$photoID'";
            $photoresult=mysqli_query($db,$photoSql) or die(mysqli_error($db));

            if(mysqli_num_rows($photoresult)==1){
                $photoRow = mysqli_fetch_assoc($photoresult);
                echo "<h1>".$photoRow['title']."</h1>";
                echo "<h3>".$photoRow['postDate']."</h3>";
                echo " <p>".$photoRow['description']."</p>";


                $commentSql="SELECT * FROM comments WHERE photoID='$photoID'";
                $commentresult=mysqli_query($db,$commentSql) or die(mysqli_error($db));
                if(mysqli_num_rows($commentresult)>1) {

                    echo "<h2> Comments </h2>";
                    while($commentRow = mysqli_fetch_assoc($commentresult)){
                        echo "<div class = 'comments'>";
                        echo "<h1>".$commentRow['postDate']."</h1>";
                        echo "<p>".$commentRow['description']."</p>";
                        echo "</div>";
                    }

                }
                echo "<a href='addcomment.php?id=".$photoID."'> Add Comment</a>";

            }
            else{
                echo "<h1>No Photo Selected</h1>";
            }

        }
    else{

        echo "<h1>No Photo Selected</h1>";
    }

    ?>
</div>

</body>
</html>
