<?php
require_once "core/functions/functions.php";
if(!isset($_COOKIE["id"])){
    // header("Location: index.php");
}
$conn = connectDBContent();

$id = $_GET["id"];
$time = time();
$code = $_GET["code"];

$data = checkContent($conn, $id, $time, $code);

closeDB($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="header/favicon/favicon.ico" type="image/x-icon">
    <title>lk.admin.mmg</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>
<body>

<section class="admin__panel">
    <div class="container">
        <div class="admin-content">
            <div class="admin-header">
                <div class="header__inner">
                    <div class="header__logo">
                        <img class="header__logo-img" src="header/img/logo.png" alt="logo">
                    </div>
                    <div class="header__admin">
                        <h3 class="header__admin-name">Admin: <?php echo $_COOKIE["username"]?></h3>
                    </div>
                    <div class="header__btn"><a class="header__btn-back" href="index.php">back</a></div>
                </div>
            </div>
            <div class="admin-main">
                <?php
    
        if(isset($data["title"]) && $data["description"] == ""){
            echo '<form class="main__form" action="updateContent.php" method="post"><div class="form-id__wrapp" ><h3 class="form-id">ID</h3><input class="main__form-id" type="text" name=id value='.$data["id"].' readonly="readonly"></div><h3 class="form-title">Title</h3><textarea class="main__form-title" name="title" id="" >'.$data["title"].'</textarea><input class="main__form-btn" type="submit" value="update"></form>';
        }
        elseif(!isset($data["title"])){
            header("Location: index.php");
        }
        else{
            echo '<form class="main__form" action="updateContent.php" method="post"><div class="form-id__wrapp" ><h3 class="form-id">ID</h3><input class="main__form-id" type="text" name=id value='.$data["id"].' readonly="readonly"></div><h3 class="form-title">Title</h3><textarea class="main__form-title" name="title" id="" >'.$data["title"].'</textarea><h3 class="form-title">Description</h3><textarea class="main__form-description" name="description" id="" >'.$data["description"].'</textarea><input class="main__form-btn" type="submit" value="update"></form>';
        }
        ?>
            </div>
            <div class="admin-footer">
                <div class="footer__time">
                    <p class="admin-footer__time">When:
                        <?php echo date('Y-m-d H:i:s', $data["time_add"]);?>
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>
    
</body>
</html>