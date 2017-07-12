<?php

    $mysqli = mysqli_connect("localhost","root", "","board", "3306");

    // Check connection
    if (mysqli_connect_errno())
    {
        echo "Failed to connect to MySQL: " . mysqli_connect_error();
    }
    return $mysqli;
?>