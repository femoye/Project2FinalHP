<?php
/*****************************************
Author:	Joseph Owens and Femi Oyedepo
Date:	2/9/2015
Description: Registration process page
 *****************************************/



if(isset($_POST['submitted'] ) ) {
    @ $filePointer = fopen("users.csv","a");
    if (!$filePointer){
        print "Write access is denied";
        exit;
    }

    // shortcut names

    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $dob = $_POST['dob'];
    $userid = $_POST['userid'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];


    $output = "\"$fname\", \"$lname\", \"$email\", \"$dob\", \"$userid\", \"$password1\" \n";
    fwrite($filePointer, $output);
    fclose($filePointer);
}   // end if


//prevent access if user hasn't submitted the form.
if (!isset($_POST['submit'])) {
    die(header("Location: registration.php"));
}
session_start();

$_SESSION['formAttempt'] = true;

if (isset($_SESSION['error'])) {
    unset($_SESSION['error']);
}

$required = array("fname" , "lname" , "dob", "email", "userid", "password1", "password2");

$_SESSION['error'] = array();

//check required fields
foreach ($required as $requiredField) {
    if (!isset($_POST[$requiredField]) || $_POST[$requiredField] == "") {
        $_SESSION['error'][] = $requiredField . " is required.";
    }
}

//validate text
if (!preg_match("/^[a-zA-Z\s]+$/",$_POST['fname'])) {
    $_SESSION['error'][] = "First name must contain letters only.";
}
if (!preg_match('/^[\w .]+$/',$_POST['lname'])) {
    $_SESSION['error'][] = "Last name must contain letters only.";
}


//check zip code
if (isset($_POST['zip']) && $_POST['zip'] != "") {
    if (!preg_match('/^[\d]+$/',$_POST['zip'])) {
        $_SESSION['error'][] = "Zip code should be digits only.";
    } else if (strlen($_POST['zip']) < 5 || strlen($_POST['zip']) > 9) {
        $_SESSION['error'][] = "Zip code should be between 5 and 9 digits.";
    }
}

//check email address
if (!filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)) {
    $_SESSION['error'][] = "Use mail@domain.com format for e-mail";
}

//check that passwords match
if ($_POST['password1'] != $_POST['password2']) {
    $_SESSION['error'][] = "Passwords don't match";
}

//final disposition
if (isset($_SESSION['error']) && count($_SESSION['error']) > 0) {
    die(header("Location: registration.php"));
} else {
    unset($_SESSION['formAttempt']);
    die(header("Location: success.php"));
}


