<?php 

namespace app\models\produits;

use Flight;

class CategorieProduitModel 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }
    public function getAll() {
        $stmt = $this->db->query("SELECT * from categorie_produit");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM categorie_produit WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function save($nom) {
        $stmt = $this->db->prepare("INSERT INTO categorie_produit (nom) VALUES (?)");
        return $stmt->execute([$nom]);
    }
}