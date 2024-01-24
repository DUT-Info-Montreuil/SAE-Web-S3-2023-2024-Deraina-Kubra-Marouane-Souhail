<?php
require_once "modules/mod_ennemi/controleur_ennemi.php"; // Assurez-vous que le chemin est correct

class ModEnnemi extends ModuleGenerique {
    
    public function __construct() {
        parent::__construct();
        $this->controleur = new ControleurEnnemi();
    }

}
?>
