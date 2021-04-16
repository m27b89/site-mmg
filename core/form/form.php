<?php
    require_once "../functions/functions.php";

    $conn = connectDBContent();

    $nameComment  = $_POST["name"];
    $emailComment = $_POST["email"];
    $txtComment  = $_POST["txt"];

    function checkFormForValidComment ($comment) {
        $comment = trim($comment);
        $comment = stripslashes($comment);
        $comment = htmlspecialchars($comment);
        return $comment;
    }

    $commentName  = checkFormForValidComment ($nameComment);
    $commentEmail  = checkFormForValidComment ($emailComment);
    $commentText  = checkFormForValidComment ($txtComment);

    if(isset($commentName) && isset($commentEmail) && isset($commentText)){
        $time = time();
        sendMessage($conn, $commentName, $commentEmail, $commentText, $time);
    }

    // echo "COMMENT - name: ".$commentName."email: ".$commentEmail."text: ".$commentText;

    closeDB($conn);
?>