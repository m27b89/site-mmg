<?php

require_once "../functions/functions.php";

$conn = connectDBContent();

$date = time();
$registrationName = $_POST["username"];
$registrationEmail = $_POST["useremail"];
$registrationPassword = $_POST["userpassword"];

function checkFormForValidRegistration ($registration) {
    $registration = trim($registration);
    $registration= stripslashes($registration);
    $registration = htmlspecialchars($registration);
    return $registration;
}

$nameRegistration = checkFormForValidRegistration ($registrationName);
$emailRegistration = checkFormForValidRegistration ($registrationEmail );
$passwordRegistration = checkFormForValidRegistration ($registrationPassword);

if($nameRegistration && $emailRegistration && $passwordRegistration){
    registrationDB($conn, $nameRegistration, $emailRegistration, $passwordRegistration, $date);
}

// echo date("Y-m-d H:i:s", $date);

closeDB($conn);

?>