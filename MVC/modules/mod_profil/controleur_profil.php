<?php
require_once "modules/mod_profil/vue_profil.php"; 
require_once 'mod_profil.php';


class ControleurProfil{
    private $vue;
    private $modele;


    public function __construct() {
        $this->vue = new VueProfil();
        $this->modele = new ModeleProfil(); 
    }
    

    private function traiterCreationTournoi() {
        $idCreateur = $_SESSION['user_id'];
        $nom = $_POST['nom'];
        $regle = $_POST['regle'];
        $dateDebut = $_POST['dateDebut'];
        $dateFin = $_POST['dateFin'];
        $capacite = $_POST['capacite'];
        $recompense = $_POST['recompense'];

        $this->modele->creationTournoi($idCreateur, $nom, $regle, $dateDebut, $dateFin, $capacite, $recompense);
        exit(); 
}



public function exec() {
    if (isset($_SESSION['user_id'])) {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            if (isset($_POST['submitTournoi'])) {
                $this->traiterCreationTournoi(); // Traiter la création de tournoi
            } elseif (isset($_POST['submitJoinTournoi'])) {
                $this->rejoindreTournoi(); // Traiter la demande de rejoindre un tournoi
            } elseif (isset($_POST['submitQuitTournoi'])) {
                $this->quitterTournoi(); // Traiter la demande de quitter un tournoi
            }
        }
        $tournois = $this->modele->getTournois(); // Récupérer les tournois
        $this->vue->afficherProfil($tournois); // Passer les tournois à la vue
    } else {
        header("Location: index.php?module=connexion&action=connexion"); 
        exit();
    }
}


private function rejoindreTournoi() {
    $userID = $_SESSION['user_id'];

    // Vérifiez si 'tournoiID' est défini et non null
    $tournoiID = isset($_POST['tournoiID']) ? $_POST['tournoiID'] : null;

    if ($tournoiID === null) {
        $_SESSION['popup_message'] = "Aucun tournoi sélectionné.";
        return;
    }

    if (ModeleProfil::estDejaInscrit($userID)) {
        $_SESSION['popup_message'] = "Vous êtes déjà inscrit à un tournoi.";
    } elseif (ModeleProfil::rejoindreTournoi($userID, $tournoiID)) {
        $_SESSION['popup_message'] = "Inscription au tournoi réussie.";
    } else {
        $_SESSION['popup_message'] = "Erreur lors de l'inscription au tournoi.";
    }

}


private function quitterTournoi() {
    $userID = $_SESSION['user_id'];

    if (ModeleProfil::quitterTournoi($userID)) {
        $_SESSION['popup_message'] = "Vous avez quitté le tournoi.";
    } else {
        $_SESSION['popup_message'] = "Erreur lors de la tentative de quitter le tournoi.";
    }
}
}
?>
