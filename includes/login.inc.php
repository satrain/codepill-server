<?php
include 'class-autoload.inc.php';
Session::init();

if(isset($_POST['login'])) {
    $email = $_POST['login_email'];
    $pass = $_POST['login_password'];

    $getUserObj = new UsersView();
    $getUserObj->validateUser($email, $pass);
}