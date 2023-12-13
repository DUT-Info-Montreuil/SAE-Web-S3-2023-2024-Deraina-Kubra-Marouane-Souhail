<?php
require_once "modules/mod_ennemi/vue_ennemi.php"; 

class ControleurEnnemi{
    private $vue;
    
    public function __construct() {
        $this->vue = new VueEnnemi();
    }
    
    public function exec() {
        $this->vue->afficher();
    }
}
?>
