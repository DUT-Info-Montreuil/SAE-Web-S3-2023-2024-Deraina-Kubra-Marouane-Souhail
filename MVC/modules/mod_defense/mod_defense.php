<?php
// ModeleDefense.php
require_once 'connexion.php';

class ModeleDefense extends Connexion {

    public function getDetailsPiege() {
        try {
            $typePiege = "piege"; // Le type que vous recherchez
            $query = self::$bdd->prepare("SELECT Description, Cout, Degats, Image , Detail FROM Defense WHERE Type = :type");
            $query->bindParam(':type', $typePiege, PDO::PARAM_STR);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('Erreur lors de la récupération des détails du piège : ' . $e->getMessage());
        }
    }

    public function getDetailsTourelle() {
        try {
            $typeTourelle = "tourelle"; // Le type que vous recherchez
            $query = self::$bdd->prepare("SELECT Description, Cout, Degats, Image , Detail FROM Defense WHERE Type = :type");
            $query->bindParam(':type', $typeTourelle, PDO::PARAM_STR);
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('Erreur lors de la récupération des détails de la tourelle : ' . $e->getMessage());
        }
    }
    

}
