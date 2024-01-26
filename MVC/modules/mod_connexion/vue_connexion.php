<?php
require_once 'vue_generique.php';

class VueConnexion extends VueGenerique {
    
    public function __construct() {
        parent::__construct();
    }

    public function form_inscription($token) {
         include_once('view/inscription.php');
    }   


    public function form_connexion($token) {
        include_once('view/connexion.php');
    }
    

}


?>


 
