<?php
require_once 'controleur_connexion.php';
require_once '././fonction.php';

class ModConnexion extends ModuleGenerique {

    public function __construct() {
        parent::__construct();
        $this->controleur = new ControleurConnexion();
    }

}



