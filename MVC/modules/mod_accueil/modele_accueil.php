<?php
require_once "modules/mod_accueil/controleur_accueil.php"; // Assurez-vous que le chemin est correct

class ModAccueil extends ModuleGenerique {
 
    public function __construct() {
        parent::__construct();
        $this->controleur = new ControleurAccueil();
    }
    
}
?>
