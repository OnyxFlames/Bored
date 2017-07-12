<html>
    <head>
    <title>Bored - For when you're bored</title>
    <link rel="stylesheet" href="css/board.css">
    </head>
    <body>
    <h1>Bored - For when you're bored</h1>
    <?php

    require "php/connect.php";

    $res = $mysqli->query("select * from POST") or die($mysqli->error);
    while ($row = $res->fetch_array())
    {
        echo $row["title"];
    }

    $userform = require "php/userform.php";
    $output = "<div id='boardlist'>";
    if (!isset($_COOKIE["username"]))
    {
        $output .= $userform;
    }
    else
    {
        $username = $_COOKIE["username"];
        $output .= "Welcome, $username!";
        $output .= " <input type='button' id='btnLogout' class='button' value='Log out'>";
        $board = require "php/generateboard.php";
        $output .= $board;
        $post = require "php/generatepost.php";
        $output .= $post;
    }
    $output .= "</div>";
    echo $output;
    ?>
    </body>
    <script src="js/logout.js"></script>
</html>