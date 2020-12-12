<?php

class EventsView extends Events {

    public function showEventsByLocation($eventLocation) {
        $results = $this->getEventsByLocation($eventLocation);
    }

    public function showAllEvents() {
        $results = $this->getAllEvents();
    }

    public function showEventById($eventId) {
        $result = $this->getEventById($eventId);
        echo <<<EOT
        Event heading: {$result[0]['event_heading']} <br>
        Event image: <img style='width: 250px; height: 150px;' src='{$result[0]['event_image_url']}'> <br>
        Event description: {$result[0]['event_description']}
        EOT;
    }

}