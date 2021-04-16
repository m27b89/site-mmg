<?php
require_once "core/functions/functions.php";
$conn = connectDBContent();

$messages = selectMessages($conn);

echo '<div class="table__users" ><table class="list__users"><tr><th>ID</th><th>Name</th><th>Email</th><th>Message</th><th>Time</th></tr>';

foreach($messages as $message){
    $time = date("Y-m-d H:i:s", $message["time"]);
    echo '<tr><td class="user">'.$message["id"].'</td><td class="user">'.$message["name"].'</td><td class="user">'.$message["email"].'</td><td class="user">'.$message["message"].'</td><td class="user">'.$time.'</td></tr>';
}

echo '<table>';

closeDB($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    
</body>
</html>