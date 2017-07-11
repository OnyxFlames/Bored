<?php
    if (!isset($_GET["username"]))
    {
        echo "This page requires a username!";
    }
    else
    {
        $value = $_GET["username"];
        setcookie("username", $value, time() + 60 * 60 * 24, "/");
        echo "Username: $value issued for 24 hours.";
        header("location: ../index.php");
    }
?>