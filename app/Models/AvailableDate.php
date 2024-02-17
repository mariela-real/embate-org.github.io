<?php

namespace App\Models;

class AvailableDate {
    private $_schedules;


    function __construct() {
        $this->_schedules = array(' ','xd', '08:50:00', '09:10:00', '09:30:00', '09:50:00', '10:10:00');
    }

    public function setSchedule($_schedules) {
        $this->_schedules = $_schedules;
    }

    public function getSchedule() {
        return $this->_schedules;
    }
}
