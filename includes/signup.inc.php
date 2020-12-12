<?php
include 'class-autoload.inc.php'; 
Session::init();

if(isset($_POST['signup'])) {
    $email = $_POST['signup_email'];
    $fullName = $_POST['signup_fullname'];
    $pass = $_POST['signup_password'];
    $phoneNum = $_POST['signup_phone'];

    $hash_pass = password_hash($pass, PASSWORD_DEFAULT);

    $signupObj = new UsersContr();
    $signupObj->createUser($email, $fullName, $hash_pass, $phoneNum);

    Session::set('email', $email);
    Session::set('fullname', $fullName);
}