<?php 

namespace app\models\charges;

use Flight;

class CategorieChargeModel 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }
    public function getAll() {
        $stmt = $this->db->query("SELECT * from categorie_charge");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM categorie_charge WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function save($nom) {
        $stmt = $this->db->prepare("INSERT INTO categorie_charge (nom) VALUES (?)");
        return $stmt->execute([$nom]);
    }
}