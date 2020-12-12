<?php

class EventsView extends Events {

    public function showEventsByLocation($eventLocation) {
        $results = $this->getEventsByLocation($eventLocation);
    }

    public function showAllEvents() {
        $results = $this->getAllEvents();
    }

}