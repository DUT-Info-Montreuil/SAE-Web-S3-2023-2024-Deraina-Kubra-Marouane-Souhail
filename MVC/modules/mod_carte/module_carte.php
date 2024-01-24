<?php
require_once 'controleur_carte.php';
require_once '././fonction.php';

class ModCarte extends ModuleGenerique {

    public function __construct() {
        parent::__construct();
        $this->controleur = new ControleurCarte();
    }

}



