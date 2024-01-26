<?php
require_once "vue_generique.php";

class VueProfil extends VueGenerique{

    public function __construct () {
		parent::__construct();

	}

    public function afficherProfil($token) {
       include_once('view/profil.php'); 
    }
}
?>
