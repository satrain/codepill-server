<?php

class Users extends Dbh {
    
    protected function getUsers() {
        $sql = "SELECT * FROM users";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo "Fullname: " . $row['user_fullname']. "<br>";
            echo "Email: " . $row['user_email']. "<br>";
            echo "Password: " . $row['user_password']. "<br>";
            echo "Phone number: " . $row['user_phone']. "<br>";
        }
    }

    protected function getUserByEmail($email) {
        $sql = "SELECT * FROM users WHERE user_email = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$email]);

        $results = $stmt->fetchAll();

        return $results;
    }

    protected function setUser($email, $fullName, $password, $phoneNum) {
        $userRegisteredDate = date("Y-m-d");
        $sql = "INSERT INTO users(user_email, user_fullname, user_password, user_phone, user_date_created) VALUES(?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$email, $fullName, $password, $phoneNum, $userRegisteredDate]);
        if($result) {
            echo "Successfully registered.";
        }
        else {
            echo "There was an error" . $stmt->errorCode();
        }
    }

}