<?php
// Except form inputs include event date published, event author, ...
include 'class-autoload.inc.php';
Session::init();

if(isset($_POST['event_set'])) {
    $eventHeading = $_POST['event_heading'];
    $eventLocation = $_POST['event_location'];
    $eventDescription = $_POST['event_description'];
    $eventExecDate = $_POST['event_date'];
    $eventAuthor = $_SESSION['fullname'];
    $directory = 'assets/images/uploads/';

    $errors = array();
    $fileName = $_FILES['event_imageToUpload']['name'];
    $fileSize = $_FILES['event_imageToUpload']['size'];
    $fileTmp = $_FILES['event_imageToUpload']['tmp_name'];
    $fileType = $_FILES['event_imageToUpload']['type'];
    $fileExt = strtolower(pathinfo($fileName, PATHINFO_EXTENSION));

    $extensions = array("jpeg", "jpg", "png");

    if(in_array($fileExt, $extensions) === false) {
        $errors[] .= " Extension not allowed, please choose a JPEG or PNG file.";
    }

    if($fileSize > 2097152) {
        $errors[] = "File size must be excately 2MB";
    }

    if(empty($errors) == true) {
        $filePath = $directory . $fileName;
        move_uploaded_file($fileTmp, "../" . $directory . $fileName);
        $eventsObj = new EventsContr();
        $eventsObj->createEvent($eventHeading, $eventLocation, $filePath, $eventDescription, $eventExecDate, $eventAuthor);
    }
}