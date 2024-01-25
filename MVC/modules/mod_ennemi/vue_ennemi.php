<?php
require_once "vue_generique.php";

class VueEnnemi extends VueGenerique{

    public function __construct () {
		parent::__construct();

	}
    
    public function afficher() {
        include_once('view/ennemi.php'); 
    }

    public function afficherEnnemiB($detailsEnnemiB) {
        include_once('view/ennemi_base.php');
    }

    public function afficherEnnemiP($detailsEnnemiP) {
        include_once('view/ennemi_avec_pouvoir.php');
    }
}
?>
