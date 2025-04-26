<?php

use app\controllers\BudgetController;
use app\controllers\CRMController;
use app\controllers\LoginController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

 $loginCtrl = new LoginController();
 $budgetCtrl = new BudgetController();
 $CRMCtrl = new CRMController();


$router->get('/', [$loginCtrl, 'index']);
$router->get('/login', [$loginCtrl, 'login']);
$router->get('/dashboard/crm/@page', [$CRMCtrl, 'dashboardCRM']);
$router->get('/popups/@name', [$budgetCtrl, 'GetPopup']);

$router->get('/dashboard/budget/@page', [$budgetCtrl, 'dashboardBudget']);

$router->post('/dashboard/budget/nouveau-produit', [$budgetCtrl, 'InsertProduit']);
$router->post('/dashboard/budget/nouvelle-categorie-produit', [$budgetCtrl, 'InsertCategorieProduit']);

$router->post('/dashboard/budget/nouvelle-charge', [$budgetCtrl, 'InsertCharge']);
$router->post('/dashboard/budget/nouvelle-categorie-charge', [$budgetCtrl, 'InsertCategorieCharge']);

$router->post('/dashboard/budget/nouvelle-recette', [$budgetCtrl, 'InsertRecette']);
$router->post('/dashboard/budget/nouveau-type-recette', [$budgetCtrl, 'InsertTypeRecette']);

$router->post('/dashboard/budget/nouvelle-depense', [$budgetCtrl, 'InsertDepense']);
$router->post('/dashboard/budget/nouveau-type-depense', [$budgetCtrl, 'InsertTypeDepense']);
