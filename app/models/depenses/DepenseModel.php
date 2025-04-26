<?php

namespace app\models\depenses;

use app\models\depenses\TypeDepenseModel;
use app\models\charges\ChargeModel;
use app\models\departements\DepartementModel;

use Flight;

class DepenseModel 
{
    private $db;

    public function __construct($db) 
    {
        $this->db = $db;
    }

    public function getAll()
    {
        $typeDepenseModel = new TypeDepenseModel(Flight::db());
        $chargeModel = new ChargeModel(Flight::db());
        $departementModel = new DepartementModel(Flight::db());

        $stmt = $this->db->query("SELECT * FROM depenses");
        $results = $stmt->fetchAll(\PDO::FETCH_ASSOC);
        $depenses = array();
        foreach($results as $result) {
            $typeDepense = $typeDepenseModel->getById($result["type_depense_id"]);
            $charge = $chargeModel->getById($result["charge_id"]);
            $departement = $departementModel->getById($result["departement_id"]);
            $depenses[] = [
                'id' => $result["id"],
                'description' => $result["description"],
                'type' => $typeDepense,
                'charge' => $charge,
                'departement' => $departement
            ];
        }   
        return $depenses;
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM depenses WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetchAll(\PDO::FETCH_ASSOC)[0];
    }

    public function save($description, $type_depense_id, $charge_id, $departement_id)
    {   
        $stmt = $this->db->prepare("INSERT INTO depenses (description, type_depense_id, charge_id, departement_id) VALUES (?, ?, ?, ?)");
        return $stmt->execute([$description, $type_depense_id, $charge_id, $departement_id]);
    }

}