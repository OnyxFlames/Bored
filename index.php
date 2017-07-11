<html>
    <head>
    <title>Bored - For when you're bored</title>
    <link rel="stylesheet" href="css/board.css">
    </head>
    <body>
    <h1>Bored - For when you're bored</h1>
    <?php
    $userform = require "php/userform.php";
    $output = "";
    if (!isset($_COOKIE["username"]))
    {
        $output .= $userform;
    }
    else
    {
        $username = $_COOKIE["username"];
        $output .= "Welcome, $username!";
        $output .= " <input type='button' id='btnLogout' value='Log out'>";
    }
    $board = require "php/generateboard.php";
    $output .= $board;
    echo $output;
    ?>
    </body>
    <script src="js/logout.js"></script>
</html>