<?php

namespace app\models\recettes;

use app\models\recettes\TypeRecetteModel;
use app\models\produits\ProduitModel;
use app\models\departements\DepartementModel;

use Flight;

class RecetteModel 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $typeRecetteModel = new TypeRecetteModel(Flight::db());
        $produitModel = new ProduitModel(Flight::db());
        $departementModel = new DepartementModel(Flight::db());

        $stmt = $this->db->query("SELECT * FROM recettes");
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $recettes = array();
        foreach($results as $result) {
            $typeRecette = $typeRecetteModel->getById($result["type_recette_id"]);
            $produit = $produitModel->getById($result["produit_id"]);
            $departement = $departementModel->getById($result["departement_id"]);
            $recettes[] = [
                'id' => $result["id"],
                'description' => $result["description"],
                'type' => $typeRecette,
                'produit' => $produit,
                'departement' => $departement
            ];
        }   
        return $recettes;
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM recettes WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function save($description, $type_recette_id, $produit_id, $departement_id)
    {   
        $stmt = $this->db->prepare("INSERT INTO recettes (description, type_recette_id, produit_id, departement_id) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$description, $type_recette_id, $produit_id, $departement_id]);
    }

}