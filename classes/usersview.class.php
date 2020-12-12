<?php

class UsersView extends Users {

    public function validateUser($email, $pass) {
        $results = $this->getUserByEmail($email);
        if($email == $results[0]['user_email']) {
            if(password_verify($pass, $results[0]['user_password'])) {
                Session::init();
                Session::set('email', $email);
                header("location: ../loggedin.php");
            }
            else {
                echo "Wrong password";
            }
        }
        else {
             die("Error trying to validate user");
        }
    }

}