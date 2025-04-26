<?php

namespace app\models\charges;

use app\models\charges\CategorieChargeModel;

use Flight;

class ChargeModel 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $categProdModel = new CategorieChargeModel(Flight::db());
        $stmt = $this->db->query("SELECT * FROM charges");
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $charges = array();
        foreach($results as $result) {
            $categProd = $categProdModel->getById($result["categorie_charge_id"]);
            $charges[] = [
                'id' => $result["id"],
                'nom' => $result["nom"],
                'prix_unitaire' => $result["prix_unitaire"],
                'categorie' => $categProd
            ];
        }   
        return $charges;
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM charges WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function save($nom, $prix_unitaire, $categorie_charge_id)
    {   
        $stmt = $this->db->prepare("INSERT INTO charges (nom, prix_unitaire, categorie_charge_id) VALUES (?, ?, ?)");
        return $stmt->execute([$nom, $prix_unitaire, $categorie_charge_id]);
    }

}