<?php
class VueAccueil extends VueGenerique{

    public function __construct () {
		parent::__construct();

	}

    public function afficherAccueil() {
        echo 'Hello';
        include_once('templates/accueil.php'); 
    }
}
?>
