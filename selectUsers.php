<?php
require_once "core/functions/functions.php";
$conn = connectDBContent();

$users = selectUsers($conn);

echo '<div class="table__users" ><table class="list__users"><tr><th>ID</th><th>User</th><th>Email</th><th>Time</th></tr>';
foreach($users as $user){
    $time = date("Y-m-d H:i:s", $user["time_add"]);
    echo '<tr><td class="user">'.$user["id"].'</td><td class="user">'.$user["user"].'</td><td class="user">'.$user["email"].'</td><td class="user">'.$time.'</td></tr>';
}
echo '</table></div>';



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