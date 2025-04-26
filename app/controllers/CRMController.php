<?php  

namespace app\controllers;

use app\models\produits\ProduitModel;
use app\models\produits\CategorieProduitModel;
use app\models\charges\ChargeModel;
use app\models\charges\CategorieChargeModel;
use app\models\recettes\RecetteModel;
use app\models\recettes\TypeRecetteModel;
use app\models\depenses\DepenseModel;
use app\models\depenses\TypeDepenseModel;
use app\models\departements\DepartementModel;
use Flight;

class CRMController 
{

    public function __construct() {}

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

    public function getContenuPageRecette() 
    {
        $recetteModel = new RecetteModel(Flight::db());
        $recettes = $recetteModel->getAll();

        $typeRecetteModel = new TypeRecetteModel(Flight::db());
        $typesRecette = $typeRecetteModel->getAll();

        $produitModel = new ProduitModel(Flight::db());
        $produits = $produitModel->getAll();

        $departementModel = new DepartementModel(Flight::db());
        $departements = $departementModel->getAll();

        return [
            'recettes' => $recettes,
            'typesRecette' => $typesRecette,
            'produits' => $produits,
            'departements' => $departements
        ];
    }

    public function getContenuPageDepense() 
    {
        $depenseModel = new DepenseModel(Flight::db());
        $depenses = $depenseModel->getAll();

        $typeDepenseModel = new TypeDepenseModel(Flight::db());
        $typesDepense = $typeDepenseModel->getAll();

        $chargeModel = new ChargeModel(Flight::db());
        $charges = $chargeModel->getAll();

        $departementModel = new DepartementModel(Flight::db());
        $departements = $departementModel->getAll();

        return [
            'depenses' => $depenses,
            'typesDepense' => $typesDepense,
            'charges' => $charges,
            'departements' => $departements
        ];
    }

    public function GetPopup($name) {
        $allowed = ['ajout-categorie-produits', 'ajout-categorie-charges', 'ajout-type-recettes', 'ajout-type-depenses']; 

        if (in_array($name, $allowed)) {
            Flight::render('popups/' . $name);
        } else {
            http_response_code(404);
            echo 'Popup non trouvé';
        }
    }

    public function dashboardCRM($page)
    {

        $args = [
            'items' => 'components/crm-items',
            'content' => 'layout/budget-dashboard',
            'page' => 'pages/' . $page
        ];

        if($page == 'produits') {
            $args = array_merge($args, $this->getContenuPageProduit());
        } else if($page == 'charges') {
            $args = array_merge($args, $this->getContenuPageCharge());
        } else if($page == 'recettes') {
            $args = array_merge($args, $this->getContenuPageRecette());
        } else if($page == 'depenses') {
            $args = array_merge($args, $this->getContenuPageDepense());
        }
    
        if (isset($_GET['popup'])) {
            $args['popup'] = 'popups/' . $_GET['popup'];
        }
    
        Flight::render('dashboard', $args);
    }

    public function InsertProduit() {
        if(isset($_POST['produit'])) {
            $model = new ProduitModel(Flight::db());
            foreach($_POST['produit'] as $produit) {
                $model->save($produit['nom'], $produit['prix_unitaire'], $produit['categorie_produit_id']);
            }
        }

        Flight::redirect("/dashboard/budget/produits");
    }

    public function InsertCategorieProduit() {
        if(isset($_POST['nom_categorie_produit'])) {
            $model = new CategorieProduitModel(Flight::db());
            $model->save($_POST['nom_categorie_produit']);
        }
        Flight::redirect("/dashboard/budget/charges");
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

    public function InsertRecette() {
        if(isset($_POST['recette'])) {
            $model = new RecetteModel(Flight::db());
            foreach($_POST['recette'] as $recette) {
                $model->save($recette['description'], $recette['type_recette_id'], $recette['produit_id'], $recette['departement_id']);
            }
        }

        Flight::redirect("/dashboard/budget/recettes");
    }

    public function InsertTypeRecette() {
        if(isset($_POST['nom_type_recette'])) {
            $model = new TypeRecetteModel(Flight::db());
            $model->save($_POST['nom_type_recette']);
        }
        Flight::redirect("/dashboard/budget/recettes");
    }

    public function InsertDepense() {
        if(isset($_POST['depense'])) {
            $model = new DepenseModel(Flight::db());
            foreach($_POST['depense'] as $depense) {
                $model->save($depense['description'], $depense['type_depense_id'], $depense['charge_id'], $recette['departement_id']);
            }
        }

        Flight::redirect("/dashboard/budget/depenses");
    }

    public function InsertTypeDepense() {
        if(isset($_POST['nom_type_depense'])) {
            $model = new TypeDepenseModel(Flight::db());
            $model->save($_POST['nom_type_depense']);
        }
        Flight::redirect("/dashboard/budget/depenses");
    }

}