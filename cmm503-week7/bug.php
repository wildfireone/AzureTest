
/**
 * Created by PhpStorm.
 * User: John Isaacs
 * Date: 14/03/2016
 * Time: 11:14
 */
<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>PHP Login Form without Session</title>
    <link rel="stylesheet" href="style.css" type="text/css" />
</head>

<body>
    <div id="content">
        <?php

        include("connection.php"); //Establishing connection with our database

        //select everything from our bugs table where the ID is right
        $sql="SELECT * FROM bugs WHERE bugs.ID = ".$_GET["id"];
        if (!$sql) {
            // There was an error...do something about it here...
            print mysqli_error($db);
        }
        //fetch our result from the database
        $result=mysqli_query($db,$sql);
        //we scan through each row in the response
        $row = mysqli_fetch_assoc($result);
        //get the title and id from the bug
        $bugTitle = $row['title'];
        $bugID = $row['ID'];
        $bugDesc = $row['desc'];

        echo "<h2>".$bugTitle."</h2>";
        echo "<p>".$bugDesc."</p>";

        //select everything from our bugs table where the ID is right
        $sql="SELECT * FROM comments WHERE bugID = ".$_GET["id"];

        //fetch our result from the database
        $result=mysqli_query($db,$sql);
        //we scan through each row in the response
        while( $row = mysqli_fetch_assoc( $result)){
            //get the title and id from the bug
            $commentTitle = $row['title'];
            $comment = $row['comment'];
            //write the link to the page
            echo '<h3>'.$title.'</h3>';
            echo '<p>'.$comment.'</p>';
        }

        ?>
    </div>
</body>
</html>

