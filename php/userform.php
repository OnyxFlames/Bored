<?php
    $userform = "";
    $userform .= "<form name='frmUsername' id='frmUsername' action='php/createuser.php' method='POST'>";
    $userform .= "You aren't logged in!<br>";
    $userform .= "Enter a username: <input type='text' name='username' id='username'><br>";
    $userform .= "Enter a password: <input type='password' name='password' id='password' placeholder='Note: Not secure'><br><br>";
    $userform .= "<input type='submit' value='Create user'>";
    $userform .= "</form>";
    return $userform;
?>