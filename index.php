<?php
// Forms gathered together
include 'includes/class-autoload.inc.php'; 
?>

<!-- Signup form -->
<h1>Signup form</h1>
<form action="includes/signup.inc.php" method="post">
    <input type="email" name="signup_email"><br><br>
    <input type="text" name="signup_fullname"><br><br>
    <input type="password" name="signup_password"><br><br>
    <input type="number" name="signup_phone"><br><br>
    <input type="submit" name="signup" value="Signup">
</form>

<hr>

<!-- Login form -->
<h1>Login form</h1>
<form action="includes/login.inc.php" method="post">
    <input type="email" name="login_email"><br><br>
    <input type="password" name="login_password"><br><br>
    <input type="submit" name="login" value="Login">
</form>

<hr>

<!-- Add event form -->
<h1>Create Event Form</h1>
<form action="includes/set-event.inc.php" method="post" enctype="multipart/form-data">
    <input type="text" name="event_heading" placeholder="Event heading"><br><br>
    <input type="text" name="event_location" placeholder="Event location"><br><br>
    <input type="file" name="event_imageToUpload"><br><br>
    <textarea name="event_description" cols="30" rows="10" placeholder="Event description"></textarea><br><br>
    <input type="date" name="event_date"><br><br>
    <input type="submit" name="event_set">
</form>