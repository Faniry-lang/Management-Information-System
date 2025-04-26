<?php

use app\controllers\PageController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

 $loginCtrl = new PageController();

$router->get('/', [$loginCtrl, 'home']);
