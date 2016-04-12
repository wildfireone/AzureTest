<?php
session_start();
include("connection.php"); //Establishing connection with our database


if(isset($_get["id"]))
{
    $photoID = $_get["id"];
    $remsql = "DELETE FROM photos WHERE photoID='$photoID'";
    $query = mysqli_query($db, $remsql) or die(mysqli_error($db));
    if ($query) {
        header("Location: photos.php");
    }
    else {
        echo "Sorry, there was an error deleting the file.";
    }
    //echo $name." ".$email." ".$password

}

?>