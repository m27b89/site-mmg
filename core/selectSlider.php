<?php
    require_once "functions/functions.php";

    $conn = connectDBContent();

    $dataSlider = selectDBSlider($conn);

    echo json_encode($dataSlider);

    closeDB($conn);
?>