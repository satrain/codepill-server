<?php 
    include 'includes/class-autoload.inc.php';
    // fetch data with get method, $_GET['id']

    $singleEvent = new EventsView();
    $singleEvent->showEventById($_GET['id']);
?>



