<?php
if (!isset($_COOKIE["username"]))
{
    echo "You're not logged in!";
}
else
{
        setcookie("username", "NULL", time() - 60 * 60 * 24, "/");
        header("location: ../index.php");
}
?>