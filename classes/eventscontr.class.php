<?php

class EventsContr extends Events {

    public function createEvent($eventHeading, $eventLocation, $eventImage, $eventDescription, $eventExecDate, $eventAuthor) {
        $this->setEvent($eventHeading, $eventLocation, $eventImage, $eventDescription, $eventExecDate, $eventAuthor);
    }

}