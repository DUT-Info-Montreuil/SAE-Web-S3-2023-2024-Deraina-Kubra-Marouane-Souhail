<?php
require_once "modules/mod_accueil/controleur_accueil.php";

class ModAccueil extends ModuleGenerique {
 
    public function __construct() {
        parent::__construct();
        $this->controleur = new ControleurAccueil();
    }
    
}
?>
