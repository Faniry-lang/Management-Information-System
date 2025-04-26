<?php 

namespace app\models\depenses;

use Flight;

class TypeDepenseModel 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }
    public function getAll() {
        $stmt = $this->db->query("SELECT * from type_depense");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM type_depense WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function save($nom) {
        $stmt = $this->db->prepare("INSERT INTO type_depense (nom) VALUES (?)");
        return $stmt->execute([$nom]);
    }
}