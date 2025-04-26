<?php

namespace app\controllers;

use Flight;

class LoginController
{

    public function __construct() {
    }

    public function index()
    { 
        Flight::render('home'); 
    }

    public function login()
    { 
        Flight::render('login'); 
    }

    
    
}
