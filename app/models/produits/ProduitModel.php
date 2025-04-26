<?php

namespace app\models\produits;

use app\models\produits\CategorieProduitModel;

use Flight;

class ProduitModel 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $categProdModel = new CategorieProduitModel(Flight::db());
        $stmt = $this->db->query("SELECT * FROM produits");
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $produits = array();
        foreach($results as $result) {
            $categProd = $categProdModel->getById($result["categorie_produit_id"]);
            $produits[] = [
                'id' => $result["id"],
                'nom' => $result["nom"],
                'prix_unitaire' => $result["prix_unitaire"],
                'categorie' => $categProd
            ];
        }   
        return $produits;
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM produits WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function save($nom, $prix_unitaire, $categorie_produit_id)
    {   
        $stmt = $this->db->prepare("INSERT INTO produits (nom, prix_unitaire, categorie_produit_id) VALUES (?, ?, ?)");
        return $stmt->execute([$nom, $prix_unitaire, $categorie_produit_id]);
    }

}