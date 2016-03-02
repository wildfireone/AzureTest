<?php

include("connection.php"); //Establishing connection with our database


    if(empty($_POST["username"]) || empty($_POST["password"]))
    {

        echo "Both fields are required.";
    }else
    {
// Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];

//Check username and password from database
        $sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
        if (!$sql) {
            // There was an error...do something about it here...
            print mysqli_error($db);
        }
        $result=mysqli_query($db,$sql);

//If username and password exist in our database then accept the user and login.
//Otherwise echo error.

        if(mysqli_num_rows($result) == 1)
        {
            header("Location: home.php"); // Redirecting To another Page
            echo "here";
        }else
        {
            echo "Incorrect username or password.";
        }

}

?>