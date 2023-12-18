<?php
require_once 'connexion.php';

class ModeleCarte extends Connexion {
    
    public function getCartes() {
        $req = self::$bdd->prepare("SELECT * FROM Terrain"); 
        $req->execute();
        return $req->fetchAll(PDO::FETCH_ASSOC); 
    }
}
?>
