<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
include("connection.php"); //Establishing connection with our database

$error = ""; //Variable for storing our errors.


//if(isset($_POST["submit"]))
//{
    echo $_POST["username"];
    echo "submitted";
    if(empty($_POST["username"]) || empty($_POST["password"]))
    {
        echo"empty";
        $error = "Both fields are required.";
    }else
    {
// Define $username and $password
        $username=$_POST['username'];
        $password=$_POST['password'];

// plain text password
        $password = $password;

//Check username and password from database
        $sql="SELECT uid FROM users WHERE username='$username' and password='$password'";
        $result=mysqli_query($db,$sql);
        $row=mysqli_fetch_array($result,MYSQLI_ASSOC);

//If username and password exist in our database then accept the user and login.
//Otherwise echo error.

        if(mysqli_num_rows($result) == 1)
        {
            header("location: home.php"); // Redirecting To another Page
        }else
        {
            $error = "Incorrect username or password.";
        }

   // }
}

?>