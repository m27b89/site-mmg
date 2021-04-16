<?php
require_once "core/functions/functions.php";

$conn = connectDBContent();

$title = $_POST["title"];
$description = $_POST["description"];
$id = $_POST["id"];
$time = time();

updateContent($conn, $id, $time, $title, $description);

closeDB($conn);

?>