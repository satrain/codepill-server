<?php

class UsersContr extends Users {

    public function createUser($email, $fullName, $pass, $phone) {
        $userRegisteredDate = date("Y-m-d");
        $this->setUser($email, $fullName, $pass, $phone);
    }

}