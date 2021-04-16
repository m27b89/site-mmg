<?php
    require_once "functions/functions.php";

    $conn = connectDBContent();

    $dataContent = selectDBContent($conn);
   
    closeDB($conn);
?>