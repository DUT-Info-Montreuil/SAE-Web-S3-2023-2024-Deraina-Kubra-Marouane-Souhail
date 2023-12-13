<?php
require_once "modules/mod_profil/vue_profil.php"; 

class ControleurProfil{
    private $vue;
    
    public function __construct() {
        $this->vue = new VueProfil();
    }
    
    public function exec() {
        $this->vue->afficherProfil();
    }
}
?>
