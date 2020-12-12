<?php

class Session {

    public static function init() {
        session_start();
    }

    public static function set($key, $val) {
        $_SESSION[$key] = $val;
    }

    public static function isSet() {
        if(isset($_SESSION['email'])) {
            header("location: loggedin.php");
        }
    }

    public static function destroy() {
        session_unset();
        session_destroy();
        header("location: ../index.php");
    }
}