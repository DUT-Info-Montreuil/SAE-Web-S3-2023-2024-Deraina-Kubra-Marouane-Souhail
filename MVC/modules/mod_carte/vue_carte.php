<?php
require_once 'vue_generique.php';

class VueConnexion extends VueGenerique {
    
    public function __construct() {
        parent::__construct();
    }

    public function form_inscription($token) {
         include_once('view/carte.php');
    }   


    public function form_connexion() {
        include_once('view/details.php');
    }
    

}


?>


 
