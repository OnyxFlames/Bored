<?php

    require "connect.php";

    if ($_POST["txtTitle"] == "")
        die("Title cannot be empty!");
    if ($_POST["txtContent"] == "")
        die("Post cannot be empty!");

    $newtitle =  $_POST["txtTitle"];
    $newcontent = $_POST["txtContent"];
    $newposter = $_COOKIE["username"];

    $mysqli->query("insert into POST (title, content, poster) values ('$newtitle', '$newcontent', '$newposter');") or die($mysqli->error);
    header("location: ../index.php");
?>