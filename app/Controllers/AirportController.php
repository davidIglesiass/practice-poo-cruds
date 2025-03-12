<?php

namespace App\Controllers;
use Exception;

class AirportController extends Controller
{

    public $messages = [];

    public function index($messages = [])
    {
        return $this->view('airport.index', compact('messages'));
    }
}