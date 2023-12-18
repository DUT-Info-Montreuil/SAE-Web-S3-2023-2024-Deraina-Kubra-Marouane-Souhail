<?php
require_once 'vue_generique.php';

class VueCarte extends VueGenerique {
    
    public function __construct() {
        parent::__construct();
    }

    public function carte($cartes) {
         include_once('view/carte.php');
    }   



}


?>


 
