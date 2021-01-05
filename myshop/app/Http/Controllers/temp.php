<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use iiiphr\shamsi_calendar;

class temp extends Controller
{
    public function index(){
        return shamsi_calendar::get_date();
    }
}
