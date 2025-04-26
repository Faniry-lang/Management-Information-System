<?php 

namespace app\models\recettes;

use Flight;

class TypeRecetteModel 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }
    public function getAll() {
        $stmt = $this->db->query("SELECT * from type_recette");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM type_recette WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function save($nom) {
        $stmt = $this->db->prepare("INSERT INTO type_recette (nom) VALUES (?)");
        return $stmt->execute([$nom]);
    }
}