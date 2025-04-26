<?php 

namespace app\models\departements;

class DepartementModel 
{

    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAll() 
    {
        $stmt = $this->db->query("SELECT * FROM departements");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM departements WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }
}