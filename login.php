<?php
require_once "core/functions/functions.php";

$conn = connectDBContent();

$loginEmail = $_POST["loginemail"];
$loginPassword = $_POST["loginpassword"];

 function checkFormForValidLogin ($login) {
        $login = trim($login);
        $login = stripslashes($login);
        $login = htmlspecialchars($login);
        return $login;
    }

$emailLogin = checkFormForValidLogin ($loginEmail);
$passwordLogin = checkFormForValidLogin ($loginPassword);

if(isset($emailLogin) && isset($passwordLogin)){
    $user = selectUser($conn, $emailLogin, $passwordLogin);
    // echo $user;
    // var_dump($user);
    // if($user === "login"){
    //     setcookie("id", $searchUser["id"], time()+14*60*60);
    //     setcookie("hash", $searchUser["hash"], time()+14*60*60, null, null, null, true);
    // }
    // else{
    //     setcookie("id", $searchUser["id"], time()-14*60*60);
    //     setcookie("hash", $searchUser["hash"], time()-14*60*60, null, null, null, true);
    // }
    if(!$user){
        echo 0;
    }
    if($emailLogin === $user["email"] && md5($passwordLogin) === $user["password"]){
        $hash = generation(20);
        // echo $hash;
        $sql = 'UPDATE users SET hash="'.$hash.'" WHERE id='.$user["id"];
        $query = mysqli_query($conn, $sql);
        // var_dump($query);
        if(isset($query)){
            setcookie("id", $user["id"], time()+14*60*60);
            setcookie("hash", $hash, time()+14*60*60, null, null, null, true);
            setcookie("username", $user["user"], time()+14*60*60);
            echo "login";
        }
        else{
            setcookie("id", $user["id"], time()-14*60*60, "localhsot/site/mmg");
            setcookie("hash", $user["hash"], time()-14*60*60, "localhsot/site/mmg");
            setcookie("username", $user["user"], time()-14*60*60, "localhsot/site/mmg");
            echo false;
        }
    }
}

closeDB($conn);