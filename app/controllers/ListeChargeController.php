<?php

namespace app\controllers;

use app\models\charges\ChargeModel;
use app\models\charges\CategorieChargeModel;
use Flight;

class ListeChargeController
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

    public function dashboardCRM()
    {
        $args = [
            'items' => 'components/crm-items',
            'content' => 'layout/crm-dashboard',
            'page' => 'pages/produits'
        ];
    
        if (isset($_GET['page'])) {
            $args['page'] = 'pages/' . $_GET['page'];
        }
    
        if (isset($_GET['popup'])) {
            $args['popup'] = 'popups/ajout-categorie-produits';
        }
    
        Flight::render('dashboard', $args);
    }

    public function getContenuPageCharge() 
    {
        $chargeModel = new ChargeModel(Flight::db());
        $charges = $chargeModel->getAll();
        $categorieChargeModel = new CategorieChargeModel(Flight::db());
        $categoriesCharge = $categorieChargeModel->getAll();

        return [
            'charges' => $charges,
            'categoriesCharge' => $categoriesCharge
        ];
    }
    

    public function dashboardBudget()
    {

        $args = [
            'items' => 'components/budget-items',
            'content' => 'layout/budget-dashboard',
            'page' => 'pages/charges'
        ];

        $args = array_merge($args, $this->getContenuPageCharge());

    
        if (isset($_GET['popup'])) {
            $args['popup'] = 'popups/' . $_GET['popup'];
        }
    
        Flight::render('dashboard', $args);
    }

    public function GetPopup($name) {
        $allowed = ['ajout-categorie-charges']; 

        if (in_array($name, $allowed)) {
            Flight::render('popups/' . $name);
        } else {
            http_response_code(404);
            echo 'Popup non trouvé';
        }
    }

    public function InsertCharge() {
        if(isset($_POST['charge'])) {
            $model = new ChargeModel(Flight::db());
            foreach($_POST['charge'] as $charge) {
                $model->save($charge['nom'], $charge['prix_unitaire'], $charge['categorie_charge_id']);
            }
        }

        Flight::redirect("/dashboard/budget/charges");
    }

    public function InsertCategorieCharge() {
        if(isset($_POST['nom_categorie_charge'])) {
            $model = new CategorieChargeModel(Flight::db());
            $model->save($_POST['nom_categorie_charge']);
        }
        Flight::redirect("/dashboard/budget/charges");
    }
    
}
