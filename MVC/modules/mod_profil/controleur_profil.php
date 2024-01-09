<?php
require_once "vue_profil.php"; 
include_once "mod_profil.php"; 

class ControleurProfil{
    private $vue;
    private $modele;
    private $action;
    
    public function __construct() {
        $this->vue = new VueProfil();
        $this->modele = new ModeleProfil();
        $this->action = isset($_GET['action']) ? $_GET['action'] : '';
    }
    
    public function exec() {

        if(isset($_SESSION['user_id'])) {
        $this->vue->afficherProfil();
        }else{
            header("Location: index.php?module=connexion&action=connexion"); 
            exit();
        }
        
        switch($this->action){
            case "EnvoyerMessage":
                $this->form_envoyerMessage();
            break;
            case "rechercherUtilisateur":
                $this->rechercherUtilisateur();
                break;
        }
    }

    private function form_envoyerMessage(){
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['contenu'])) {
            $contenu = $_POST['contenu'];
            $this->modele->envoyerMessageBd($idDestinateur, $contenu); 
        }
    }

    private function rechercherUtilisateur(){

        if (isset($_GET['user'])) {
            $results = $this->modele->rechercherUtilisateur($_GET['user']);
            $this->afficherResultatRecherche($results);
        }
    }

}
?>
