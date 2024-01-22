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
        header("Location: index.php?module=profil&action=afficherProfil");
        exit();
}

private function traiterEnvoiArgent() {
    $destinataireID = $_POST['recipient'];
    $montant = $_POST['amount'];

    $envoiReussi = $this->modele->envoyerArgent($destinataireID, $montant);
    header("Location: index.php?module=profil&action=afficherProfil");
    exit();
}

        public function exec() {
            if (isset($_SESSION['user_id'])) {
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitTournoi'])) {
                    $this->traiterCreationTournoi(); // Traiter la création de tournoi
                    
                }
                if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submitEnvoiArgent'])) {
                    $this->traiterEnvoiArgent(); // Traiter l'envoi d'argent
                }
                $this->vue->afficherProfil();
            } else {
                header("Location: index.php?module=connexion&action=connexion"); 
                exit();
            }
        }
    }
    ?>
