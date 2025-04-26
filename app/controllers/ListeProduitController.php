<?php

namespace app\controllers;

use app\models\produits\ProduitModel;
use app\models\produits\CategorieProduitModel;
use Flight;

class ListeProduitController
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

    public function getContenuPageProduit() 
    {
        $produitModel = new ProduitModel(Flight::db());
        $produits = $produitModel->getAll();
        $categorieProduitModel = new CategorieProduitModel(Flight::db());
        $categoriesProduit = $categorieProduitModel->getAll();

        return [
            'produits' => $produits,
            'categoriesProduit' => $categoriesProduit
        ];
    }
    

    public function dashboardBudget()
    {

        $args = [
            'items' => 'components/budget-items',
            'content' => 'layout/budget-dashboard',
            'page' => 'pages/produits'
        ];

        $args = array_merge($args, $this->getContenuPageProduit());
    
        if (isset($_GET['popup'])) {
            $args['popup'] = 'popups/' . $_GET['popup'];
        }
    
        Flight::render('dashboard', $args);
    }

    public function GetPopup($name) {
        $allowed = ['ajout-categorie-produits']; 

        if (in_array($name, $allowed)) {
            Flight::render('popups/' . $name);
        } else {
            http_response_code(404);
            echo 'Popup non trouvé';
        }
    }

    public function InsertProduit() {
        if(isset($_POST['produit'])) {
            $model = new ProduitModel(Flight::db());
            foreach($_POST['produit'] as $produit) {
                $model->save($produit['nom'], $produit['prix_unitaire'], $produit['categorie_produit_id']);
            }
        }

        Flight::redirect("/dashboard/budget");
    }

    public function InsertCategorieProduit() {
        if(isset($_POST['nom_categorie_produit'])) {
            $model = new CategorieProduitModel(Flight::db());
            $model->save($_POST['nom_categorie_produit']);
        }
        Flight::redirect("/dashboard/budget");
    }
    
}
