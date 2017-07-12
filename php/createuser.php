<?php
    if (!isset($_GET["username"]))
    {
        echo "This page requires a username!";
    }
    else
    {

        require "connect.php";


        $user = $_POST["username"];
        $mysqli->query("select username from user where user = '$user'");

        if ($mysqli->num_rows == 1)
        {
            die("User already exists!");
        }

        $user = $_POST["username"];
        $pass = $_POST["password"];
        //setcookie("username", $value, time() + 60 * 60 * 24, "/");
        //echo "Username: $value issued for 24 hours.";
        header("location: ../index.php");
    }
?>