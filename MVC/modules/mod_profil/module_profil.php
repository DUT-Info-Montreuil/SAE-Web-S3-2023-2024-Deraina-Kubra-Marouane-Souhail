<?php
require_once "modules/mod_profil/controleur_profil.php"; 

class ModProfil extends ModuleGenerique {
 
    public function __construct() {
        parent::__construct();
        $this->controleur = new ControleurProfil();
    }
    
}
?>
