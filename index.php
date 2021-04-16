<?php
    require_once "core/select.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="header/favicon/favicon.ico" type="image/x-icon">
    <title>MMG</title>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.2/css/all.css" integrity="sha384-vSIIfh2YWi9wW0r9iZe7RJPrKwp6bG+s9QZMoITbCckVJqGCCRhc+ccxNcdpHuYu" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/keyframes.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
</head>

<body>

    <div class="greeting">
         <div class="greeting__inner">
             <h4 class="greeting__title">Welcom <?php echo $_COOKIE["username"]?></h4>
        </div> 
    </div>

    <div class="message-info">
        <div class="message__inner">
            <h4 class="message-title">message sent</h4>
        </div>
    </div>

    <div class="message__email-error">
        <div class="email-erro__inner">
            <h4 class="email-erro__title">This is email already exists</h4>
        </div>
    </div>

    <div class="message-error">
        <div class="message__inner">
            <h4 class="message-title">message was not delivered</h4>
        </div>
    </div>

    <div class="warning__login">
        <div class="warnintg__login-inner">
                <h4 class="warning__login-title">Try again please, write email and password</h4>
        </div>
    </div>

    <div class="login__wrapp" id="login__wrapp">
        <div class="login">
            <div class="login-close" id="login-close">
                <i class="fas fa-times-circle"></i>
            </div>
            <div class="login__inner" id="login__inner">
                <form action="">
                        <input class="login-email" type="email" name="loginemail" id="login-email" placeholder="Your email">
                        <input class="login-password" type="password" name="loginpassword" id="login-password" placeholder="Your password">
                    <div class="login-send__btn">
                        <input class="login-send" id="send-login" type="submit" value="Login">
                    </div>
                </form>
                <p class="registration-get" id="registration-get">registration</p>
            </div>
            <div class="registration__inner" id="registration__inner">
                <form action="">
                    <input class="registration-name" id="registration-name" type="text"  placeholder="Your name">
                    <input class="registration-email" id="registration-email" type="email" placeholder="Your email">
                    <input class="registration-password" id="registration-password" type="password" placeholder="Your password">
                    <div class="registration__btn">
                        <input class="registration-send" id="send-registration" type="submit" value="Registration">
                    </div>
                </form>
                <p class="login-get" id="login-get">login</p>
            </div>
        </div>
    </div>

    <div class="warning__btn">
        <div class="warning__btn-inner">
            <p class="wraning__title" id="title__form">You did not write data</p>
            <p class="wraning__title" id="title__email">You did not write email</p>
            <p class="wraning__title" id="title__data">This is site without data</p>
        </div>
    </div>

    <header class="header" id="header">
        <div class="heade__top">
            <div class="container">
                <div class="header__top-inner">
                    <div class="logo">
                        <a class="logo__link" href="#">
                            <img class="logo__img" src="header/img/logo.png" alt="mmg">
                        </a>
                    </div>
                    
                        <div class="menu__gamburger">
                            <div class="t-gamburger"></div>
                            <div class="b-gamburger"></div>
                            <div class="bt-gamburger"></div>
                        </div>

                    <nav class="menu">
                        <ul class="menu__list">
                            <li class="menu__list-item">
                                <a class="menu__link">Home</a>
                            </li>
                            <li class="menu__list-item">
                                <a class="menu__link">News</a>
                            </li>
                            <li class="menu__list-item menu__list-parent">
                                <a class="menu__link menu__link--icon">Products</a>
                                <ul class="menu__list-sub">
                                    <li class="menu__list-sub-item">about</li>
                                    <li class="menu__list-sub-item">free</li>
                                </ul>
                            </li>
                            <li class="menu__list-item">
                                <a class="menu__link">Download</a>
                            </li>
                            <li class="menu__list-item">
                                <a class="menu__link">Contact</a>
                            </li>
                            <li class="menu__list-item" id="enter">
                            <?php 
                                    if(isset($_COOKIE["id"])){
                                        echo '<a href="logout.php" class="menu__link menu-login__link">Logout</a>';
                                    }else{
                                        echo '<a id="btn-login" class="menu__link menu-login__link">Login</a>';
                                    }
                                ?>
                             
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>

            <div class="menu__navigation">
                <ul class="navigation__list">
                    <li class="navigation__list-item">
                        <a class="navigation__link">Home</a>
                    </li>
                    <li class="navigation__list-item">
                        <a class="navigation__link">News</a>
                    </li>
                    <li class="navigation__list-item navigation__list-parent">
                        <a class="navigation__link navigation__link--icon">Products</a>
                    </li>
                    <li class="navigation__list-item">
                        <a class="navigation__link">Download</a>
                    </li>
                    <li class="navigation__list-item">
                        <a class="navigation__link">Contact</a>
                    </li>
                    <li class="navigation__list-item" id="enter">
                    <?php 
                            if(isset($_COOKIE["id"])){
                                echo '<a href="logout.php" class="naviation__link naviation-login__link">Logout</a>';
                            }else{
                                echo '<a id="btn-login__mob" class="naviation__link naviation-login__link">Login</a>';
                            }
                        ?>
                        
                    </li>
                </ul>
            </div>

            <div class="header__content">
                <div class="container">
                    <div class="header__content-inner">
                        <div class="header__title">
                            <h1 class="title__list-ble">Ble</h1>
                            <h2 class="title__list-energy">Bluetooth low energy</h2>
                            <h3 class="title__list-technology">Technology</h3>
                        </div>
                        <div class="header__advantages-row">
                            <div class="advantages-list">
                                <img class="advantages-list__img" src="header/icon/business.png" alt="business">
                                <h3 class="advantages-list__item"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[0]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[0]["id"].'&code='.$dataContent[0]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[0]["title"];
                                    }
                                ?></h3>
                            </div>
                            <div class="advantages-list">
                                <img class="advantages-list__img" src="header/icon/creating.png" alt="creating">
                                <h3 class="advantages-list__item"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[1]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[1]["id"].'&code='.$dataContent[1]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[1]["title"];
                                    }
                                ?></h3>
                            </div>
                            <div class="advantages-list">
                                <img class="advantages-list__img" src="header/icon/actualizing.png" alt="actualizing">
                                <h3 class="advantages-list__item"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[2]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[2]["id"].'&code='.$dataContent[2]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[2]["title"];
                                    }
                                ?></h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="header__content-wave">
                    <div class="header__wave-item"></div>
                    <div class="header__wave-item header__wave-left"></div>
                    <div class="header__wave-item header__wave-right"></div>
                </div>
            </div>
        </div>
    </header>
    <section class="product" id="products">
        <div class="container">
            <div class="product__inner-row">
                <div class="product__img">
                    <div class="product__img-item"></div>
                </div>
                <div class="product__row">
                    <div class="product__row-slider-parent" id="row-slider-parent">
                    </div>
                    <div class="product__row-control" id="control__slider">
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <section class="main">
        <div class="main__img"></div>
        <div class="container">
            <div class="main__inner">
                <div class="main__row">
                    <div class="main__item">
                        <img class="main__item-icon" src="main/icon/Reload Icon.png" alt="icon">
                        <p class="main__item-title item-title"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[3]["title"].'</p> <a class="content__btn-update" href="lk.php?id='.$dataContent[3]["id"].'&code='.$dataContent[3]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[3]["title"];
                                    }
                                ?>
                        <p class="main__item-subscribe item-subscribe"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[3]["description"].'</p> <a href="lk.php?id='.$dataContent[3]["id"].'&code='.$dataContent[3]["vendor_code"].'"></a>';
                                    }else{
                                        echo $dataContent[3]["description"];
                                    }
                                ?>
                    </div>
                    <div class="main__item">
                        <img class="main__item-icon" src="main/icon/Inbox Icon.png" alt="icon">
                        <p class="main__item-title item-title"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[4]["title"].'</p> <a class="content__btn-update" href="lk.php?id='.$dataContent[4]["id"].'&code='.$dataContent[4]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[4]["title"];
                                    }
                                ?>
                        <p class="main__item-subscribe item-subscribe"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[4]["description"].' <a href="lk.php?id='.$dataContent[4]["id"].'&code='.$dataContent[4]["vendor_code"].'"></a>';
                                    }else{
                                        echo $dataContent[4]["description"];
                                    }
                                ?></p>
                    </div>
                    <div class="main__item">
                        <img class="main__item-icon" src="main/icon/Clock Icon.png" alt="icon">
                        <p class="main__item-title item-title"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[5]["title"].'</p> <a class="content__btn-update" href="lk.php?id='.$dataContent[5]["id"].'&code='.$dataContent[5]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[5]["title"];
                                    }
                                ?>
                        <p class="main__item-subscribe item-subscribe"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[5]["description"].' <a href="lk.php?id='.$dataContent[5]["id"].'&code='.$dataContent[5]["vendor_code"].'"></a>';
                                    }else{
                                        echo $dataContent[5]["description"];
                                    }
                                ?></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="download" id="download">
        <div class="container">
            <div class="download__circle-bg"></div>
            <div class="download__inner">
                <p class="download__title"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[6]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[6]["id"].'&code='.$dataContent[6]["vendor_code"].'"">update</a>';
                                    }else{
                                        echo $dataContent[6]["title"];
                                    }
                                ?></p>
                <p class="download__subtitle"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[6]["description"].' <a href="lk.php?id='.$dataContent[6]["id"].'&code='.$dataContent[6]["vendor_code"].'""></a>';
                                    }else{
                                        echo $dataContent[6]["description"];
                                    }
                                ?></p>
                <div class="download__buttons">
                    <div class="download__btn-item">
                        <img src="download/icon/iconfinder_152_Google_Play_4519086.png" alt=""
                            class="download__btn-img">
                        <a href="#" class="download__btn">Google Play</a>
                    </div>
                    <div class="download__btn-item">
                        <img src="download/icon/pngegg.png" alt="" class="download__btn-img">
                        <a href="#" class="download__btn">App Store</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="advantages">
        <div class="container">
            <div class="advantages__column" id="coulumn"></div>
        </div>
    </section>

    <section class="contacts" id="contact">
        <div class="triangle"></div>
        <div class="container">
            <div class="contacts__inner">
                <p class="contacts__title"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[7]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[7]["id"].'&code='.$dataContent[7]["vendor_code"].'"">update</a>';
                                    }else{
                                        echo $dataContent[7]["title"];
                                    }
                                ?></p>
                <p class="contacts__subtitle"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[7]["description"].' <a href="lk.php?id='.$dataContent[7]["id"].'&code='.$dataContent[7]["vendor_code"].'""></a>';
                                    }else{
                                        echo $dataContent[7]["description"];
                                    }
                                ?></p>
            </div>

            <form class="contacts__form">
                <input class="item-name" name="firstname" data-rule type="text" id="username" placeholder="Your name" required="required">
                <input class="item-email" name="email" data-rule type="text" id="useremail"  placeholder="Email Address" required="required">
                <textarea class="item-message" name="text" data-rule id="usertext" cols="30" rows="10" placeholder="Message..." required="required"></textarea>
                <input class="item-btn" type="submit" value="send" id="send-form">
            </form>
        </div>
    </section>
    <footer class="footer">
        <div class="container">
            <div class="footer__inner">
                <div class="footer__row">
                    <h3 class="footer__row-title"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[8]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[8]["id"].'&code='.$dataContent[8]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[8]["title"];
                                    }
                                ?></h3>
                    <ul class="footer__row-items">
                        <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[9]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[9]["id"].'&code='.$dataContent[9]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[9]["title"];
                                    }
                                ?></a></li>
                        <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[10]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[10]["id"].'&code='.$dataContent[10]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[10]["title"];
                                    }
                                ?></a></li>
                        <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[11]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[11]["id"].'&code='.$dataContent[11]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[11]["title"];
                                    }
                                ?></a></li>
                        <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[12]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[12]["id"].'&code='.$dataContent[12]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[12]["title"];
                                    }
                                ?></a></li>
                    </ul>
                </div>
    
                <div class="footer__row">
                    <h3 class="footer__row-title"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[13]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[13]["id"].'&code='.$dataContent[13]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[13]["title"];
                                    }
                                ?></h3>
                    <ul class="footer__row-items">
                        <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[14]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[14]["id"].'&code='.$dataContent[14]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[14]["title"];
                                    }
                                ?></a></li>
                        <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[15]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[15]["id"].'&code='.$dataContent[15]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[15]["title"];
                                    }
                                ?></a></li>
                        <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[16]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[16]["id"].'&code='.$dataContent[16]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[16]["title"];
                                    }
                                ?></a></li>
                        <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[17]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[17]["id"].'&code='.$dataContent[17]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[17]["title"];
                                    }
                                ?></a></li>
                        <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[18]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[18]["id"].'&code='.$dataContent[18]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[18]["title"];
                                    }
                                ?></a></li>
                        
                    </ul>
                </div>
    
                <div class="footer__row">
                    <h3 class="footer__row-title"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[19]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[19]["id"].'&code='.$dataContent[19]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[19]["title"];
                                    }
                                ?></h3>
                    <ul class="footer__row-items">
                    <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[20]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[20]["id"].'&code='.$dataContent[20]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[20]["title"];
                                    }
                                ?></a></li>
                        <li><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[21]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[21]["id"].'&code='.$dataContent[21]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[21]["title"];
                                    }
                                ?></a></li>
                    </ul>
                </div>
    
                <div class="footer__row">
                    <ul class="footer__row-items">
                        <li class="footer__row-list"><span class="item__icon"><i class="fas fa-phone-alt"></i></span><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[22]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[22]["id"].'&code='.$dataContent[22]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[22]["title"];
                                    }
                                ?></a></li>
                        
                        <li class="footer__row-list"><span class="item__icon"><i class="fas fa-envelope"></i></span><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[23]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[23]["id"].'&code='.$dataContent[23]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[23]["title"];
                                    }
                                ?></a></li>
                        
                        <li class="footer__row-list"><span class="item__icon"><i class="fas fa-map-marker-alt"></i></span><a class="footer__row-item" href="#"><?php 
                                    if(isset($_COOKIE["id"])){
                                        echo $dataContent[24]["title"].' <a class="content__btn-update" href="lk.php?id='.$dataContent[24]["id"].'&code='.$dataContent[24]["vendor_code"].'">update</a>';
                                    }else{
                                        echo $dataContent[24]["title"];
                                    }
                                ?></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </footer>
    <script src="js/login.js"></script>
    <script src="js/navLinks.js"></script>
    <script src="js/slider.js"></script>
    <script src="js/checkFomrForValid.js"></script>
    <script src="js/advantages.js"></script>
    
</body>

</html>