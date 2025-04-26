<?php

namespace app\controllers;

use Flight;

class PageController
{

    public function __construct() {
    }

    public function home() 
    {
        Flight::render('testing_page');
    }
    
}
