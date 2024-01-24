<?php
require_once "/home/etudiants/info/dandriambala/local_html/SAE dev web/MVC/vue_generique.php";

class VueProfil extends VueGenerique{

    public function __construct () {
		parent::__construct();

	}

    public function afficherProfil() {
       include_once('view/profil.php'); 
    }
}
?>
