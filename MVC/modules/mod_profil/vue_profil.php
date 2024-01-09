<?php
class VueProfil extends VueGenerique{

    public function __construct () {
		parent::__construct();

	}

    public function afficherProfil() {
       include_once('view/profil.php'); 
    }

    public function afficherResultatRecherche($results) {
        echo "<div>Résultats de recherche :</div>";
        echo "<ul>";
        foreach ($results as $result) {
            echo "<li>" . $result['Nom'] . "</li>";
        }
        echo "</ul>";
    }
}
?>
