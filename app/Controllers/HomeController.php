<?php

namespace App\Controllers;

use App\Models\Contact;
use App\Models\Gallery;

class HomeController extends Controller
{
    public function index()
    {

        // return $contactModel->all(); 
        return $this->view(
            'home',
            [
                'title' => 'Home',
                'description' => 'Esta es la pagina home'
            ]
        );
    }
}
