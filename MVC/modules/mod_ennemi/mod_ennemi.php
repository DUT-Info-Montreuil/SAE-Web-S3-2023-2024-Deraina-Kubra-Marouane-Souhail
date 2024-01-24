<?php

require_once 'connexion.php';

class ModeleEnnemi extends Connexion {

    public function getDetailsEnnemiB() {
        try {
            $query = self::$bdd->prepare("SELECT PvBase, Degats, Description, RessourceDonnee, Image FROM Ennemi WHERE Pouvoir IS NULL");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('Erreur lors de la récupération des détails des ennemis : ' . $e->getMessage());
        }
    }
    

    public function getDetailsEnnemiP() {
        try {
            $query = self::$bdd->prepare("SELECT PvBase, Degats, Description, Pouvoir, RessourceDonnee, Image FROM Ennemi WHERE Pouvoir IS NOT NULL");
            $query->execute();
            return $query->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            die('Erreur lors de la récupération des détails des ennemis : ' . $e->getMessage());
        }
    }
}
?>