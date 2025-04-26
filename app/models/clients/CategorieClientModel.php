<?php 

namespace app\models\clients;

use Flight;

class CategorieClientModel 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }
    public function getAll() {
        $stmt = $this->db->query("SELECT * from categorie_client");
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM categorie_client WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function save($nom, $description) {
        $stmt = $this->db->prepare("INSERT INTO categorie_client (nom, description) VALUES (?, ?)");
        return $stmt->execute([$nom, $description]);
    }
}