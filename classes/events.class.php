<?php

class Events extends Dbh {

    protected function setEvent($eventHeading, $eventLocation, $eventImage, $eventDescription, $eventExecDate, $eventAuthor) {
        $eventDateCreated = date("Y-m-d");
        $sql = "INSERT INTO events(event_heading, event_location, event_image_url, event_description, event_execute_date, event_author, event_date_created) VALUES(?, ?, ?, ?, ?, ?, ?)";
        $stmt = $this->connect()->prepare($sql);
        $result = $stmt->execute([$eventHeading, $eventLocation, $eventImage, $eventDescription, $eventExecDate, $eventAuthor, $eventDateCreated]);
        if($result) {
            echo "Successfully added an event.";
        }
        else {
            echo $stmt->errorCode();
        }
    }

    protected function getEventsByLocation($eventLocation) {
        $sql = "SELECT * FROM events WHERE event_location = ?";
        $stmt = $this->connect()->prepare($sql);   
        $stmt->execute([$eventLocation]);

        while($row = $stmt->fetch()) {
            echo "Event heading: " . $row['event_heading'] . "<br>";
            echo "Event image: " . $row['event_image_url'] . "<br>";
            echo "Event execution date: " . $row['event_execute_date'] . "<br>";
            echo "Event Location: " . $row['event_location'];
        }
    }

    protected function getEventById($eventId) {
        $sql = "SELECT * FROM events WHERE event_id = ?";
        $stmt = $this->connect()->prepare($sql);
        $stmt->execute([$eventId]);

        $result = $stmt->fetchAll();

        return $result;
    }

    protected function getAllEvents() {
        $sql = "SELECT * FROM events";
        $stmt = $this->connect()->query($sql);
        while($row = $stmt->fetch()) {
            echo "Event heading: <a href='single-event.php?id=" . $row['event_id'] . "'>" . $row['event_heading'] . "</a><br>";
            echo "Event image: <img style='width: 250px; height: 150px;' src='" . $row['event_image_url'] . "'><br>";
            echo "Event execution date: " . $row['event_execute_date'] . "<br>";
            echo "Event Location: " . $row['event_location'] . "<br><hr>";
        }
    }

}