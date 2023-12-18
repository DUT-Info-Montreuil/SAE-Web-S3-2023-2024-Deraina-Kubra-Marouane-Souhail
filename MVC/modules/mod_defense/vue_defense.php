<?php
require_once 'vue_generique.php';

class VueDefense extends VueGenerique {
    
    public function __construct() {
        parent::__construct();
    }

    public function afficher(){
         include_once('view/defense.php');
    }   

    public function afficherPiege($detailsPiege) {
        include_once('view/details_piege.php');
    }
}


?>
