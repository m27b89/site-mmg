<?php
    require_once "functions/functions.php";

    $conn = connectDBContent();

    $dataPrice = selectDBPrice($conn);

    echo json_encode($dataPrice);

    closeDB($conn);
?>