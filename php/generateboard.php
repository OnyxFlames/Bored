<?php
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

    $titles = array(
            "Woo! First board.",
            "Second isn't bad.",
            "This site sucks.");
    $content = array(
            "I'm so excited to post my first board blah blah blah.",
            "I don't mind posting the second board. Kinda happy I'm not first.",
            "I'm not first this site blows."
        );
    $poster = array(
            "Jake",
            "Lil' ole timmeh",
            "Kyle"
        );
        
        for ($i = 0; $i < count($titles); $i++)
        {
            $ret .= "<h2 id=\"title\">" . $titles[$i] . "</h2>";
            $ret .= "<p id=\"content\">" . $content[$i];
            
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