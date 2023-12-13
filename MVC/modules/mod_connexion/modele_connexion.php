<?php
require_once 'cont_connexion.php';
require_once '././fonction.php';

class ModConnexion extends ModuleGenerique {
    private $cont_connexion;  

    public function __construct() {
        parent::__construct();
        $this->controleur = new ContConnexion();
    }

}



