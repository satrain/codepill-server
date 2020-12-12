<?php
include 'includes/class-autoload.inc.php';
Session::init();
echo $_SESSION['email'];
echo "Logged in";