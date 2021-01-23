<?php

namespace App\Http\Controllers;

use iiiphr\shamsi_calendar\CalendarController;

class temp extends CalendarController
{
    public function index(){
        return $this->get_date();
    }
}
