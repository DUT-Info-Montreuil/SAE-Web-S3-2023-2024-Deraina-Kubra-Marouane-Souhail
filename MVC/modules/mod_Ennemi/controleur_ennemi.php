<?php
require_once "modules/mod_accueil/vue_ennemi.php"; 

class ControleurEnnemi{
    private $vue;
    
    public function __construct() {
        $this->vue = new VueEnnemi();
    }
    
    public function accueil() {
        $this->vue->afficherAccueil();
    }
}
?>
