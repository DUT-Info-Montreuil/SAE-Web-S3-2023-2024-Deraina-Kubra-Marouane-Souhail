<?php
require_once "modules/mod_accueil/vue_accueil.php"; 

class ControleurAccueil{
    private $vue;
    
    public function __construct() {
        $this->vue = new VueAccueil();
    }
    
    public function accueil() {
        $this->vue->afficherAccueil();
    }
}
?>
