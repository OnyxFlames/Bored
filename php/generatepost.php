
    <?php

    require "php/connect.php";

    $post = "";
    $post .= "<form id='frmPost', name='frmPost' action='php/post.php' method='post'>";
    $post .= "Title:&nbsp;<input type='text' id='txtTitle' name='txtTitle'><br>";
    $post .= "Content:&nbsp;<input type='text' id='txtContent' name='txtContent'><br>";
    $post .= "<input type='submit' value='Post' id='btnPost' class='button'>";
    $post .= "</form>";

    return $post;
    ?>