<?php

use app\controllers\BudgetController;
use app\controllers\CRMController;
use app\controllers\ListeProduitController;
use app\controllers\ListeChargeController;
use flight\Engine;
use flight\net\Router;

/** 
 * @var Router $router 
 * @var Engine $app
 */

 $prodCtrl = new ListeProduitController();
 $chargeCtrl = new ListeChargeController();
 $budgetCtrl = new BudgetController();
 $CRMCtrl = new CRMController();


$router->get('/', [$prodCtrl, 'index']);
$router->get('/login', [$prodCtrl, 'login']);
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
