<?php
session_start();
include("connection.php"); //Establishing connection with our database

$msg = ""; //Variable for storing our errors.
if(isset($_POST["submit"]))
{
    $title = $_POST["title"];
    $desc = $_POST["desc"];
    $url = "test";
    $name = $_SESSION["username"];
    $date = date("Y-m-d H:i:s");

    $sql="SELECT userID FROM users WHERE username='$name'";
    $result=mysqli_query($db,$sql);
    $row=mysqli_fetch_array($result,MYSQLI_ASSOC);
    if(mysqli_num_rows($result) == 1) {
        //echo $name." ".$email." ".$password;
        $id = $row['userID'];
        $query = mysqli_query($db, "INSERT INTO photos (title, desc, postDate, url, userID) VALUES ('$title', '$desc', ,'$date','$url', '$id')") or die(mysqli_error($db));
        if ($query) {
            $msg = "Thank You! photo added. click <a href='photos.php'>here</a> to go back";
        }
    }
    else{
        $msg = "You need to login first";
    }
}

?>