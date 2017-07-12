<?php

    require "connect.php";

    $titleQ = $mysqli->query("select * from POST") or die($mysqli->error);

    $titles = array();
    $contents = array();
    $poster = array();
    while($t = $titleQ->fetch_array())
    {
        array_push($titles, $t["title"]);
        array_push($contents, $t["content"]);
        array_push($poster, $t["poster"]);
    }

    /*
        Until we get into actual posting for boards, we will use test data.
    */
    $ret = "";
    if (!isset($_COOKIE["username"]))
    {
        $ret = "<h1 color='red'>You are not logged in!";
    }
    else
    {
    $username = $_COOKIE["username"];
    $ret .= "<table id='tblPost'><tr><td>";

        for ($i = 0; $i < count($titles); $i++)
        {
            $ret .= "<h2 id=\"title\">" . $titles[$i] . "</h2>";
            $ret .= "<p id=\"content\">" . $contents[$i];
            
            if ($poster[$i] == $username)
            {
                $ret .= "<br><br>Poster: " . "<strong>YOU</strong>" . "</p>";
            }
            else
            {
                $ret .=  "<br><br>Poster: " . $poster[$i] . "</p>";
            }
        }
    }
    return $ret;
?>