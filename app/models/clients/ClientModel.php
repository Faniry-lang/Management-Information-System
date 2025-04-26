<?php

namespace app\models\clients;

use app\models\clients\CategorieClientModel;

use Flight;

class ClientModel 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $categClientModel = new CategorieClientModel(Flight::db());
        $stmt = $this->db->query("SELECT * FROM clients");
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $clients = array();
        foreach($results as $result) {
            $categClient = $categClientModel->getById($result["categorie_client_id"]);
            $clients[] = [
                'id' => $result["id"],
                'nom' => $result["nom"],
                'email' => $result["email"],
                'categorie' => $categClient
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