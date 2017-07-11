<?php
    $form = "";
    $form .= "<form name='frmUsername' id='frmUsername' action='php/createuser.php' method='GET'>";
    $form .= "You haven't selected a username!<br>";
    $form .= "Enter a username: <input type='text' name='username' id='username'> ";
    $form .= "<input type='submit' value='Create username'>";
    $form .= "</form>";
    return $form;
?>