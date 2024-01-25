<?php

require_once "vue_generique.php";

class VueAccueil extends VueGenerique{

    public function __construct () {
		parent::__construct();

	}

    public function afficherAccueil() {
       include_once('view/accueil.php'); 
    }
}
?>
