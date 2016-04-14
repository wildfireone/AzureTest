
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
    <h1>Bug List</h1>
    <div id="content">
        <?php

        include("connection.php"); //Establishing connection with our database

        //select everything from our bugs table
        $sql="SELECT * FROM bugs";
        if (!$sql) {
            // There was an error...do something about it here...
            print mysqli_error($db);
        }
        //fetch our result from the database
        $result=mysqli_query($db,$sql);
        //we scan through each row in the response
        while( $row = mysqli_fetch_assoc( $result)){
            //get the title and id from the bug
            $bugTitle = $row['title'];
            $bugID = $row['ID'];
            //write the link to the page
            echo '<a href="bug.php?id="'.$bugID.'>'.$bugTitle.'</a></br>';

        }
        ?>
    </div>
    </body>
</html>

