<?php
require_once "modules/mod_accueil/controleur_accueil.php"; // Assurez-vous que le chemin est correct

class ModAccueil {
    private $controleur;
    
    public function __construct() {
        $this->controleur = new ControleurAccueil();
    }
    
    public function exec() {
        $this->controleur->accueil();
    }
}
?>
