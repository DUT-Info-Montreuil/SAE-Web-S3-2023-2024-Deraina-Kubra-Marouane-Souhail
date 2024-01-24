<?php
require_once "modules/mod_defense/cont_defense.php"; 

class ModDefense extends ModuleGenerique {

    public function __construct() {
        parent::__construct();
        $this->controleur = new ControleurDefense();
    }

   
}
