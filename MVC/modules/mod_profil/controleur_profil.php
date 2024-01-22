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
        var_dump($this->action); 
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
           
            $idDestinateur = isset($_POST['id_destinateur']) ? $_POST['id_destinateur'] : null;

            if ($idDestinateur) {
                $this->modele->envoyerMessageBd($idDestinateur, $contenu);
            } else {
                echo "Erreur lors de l'envoi du message. Destinataire non spécifié.";
            }
        }
    }

    private function rechercherUtilisateur(){

        $searchTerm = isset($_GET['user']) ? $_GET['user'] : '';
       

        $results = $this->modele->rechercherUtilisateur($searchTerm);
    
        if (!empty($results)) {
            $htmlResults = "<div>Résultats de recherche :</div><ul>";
            foreach ($results as $result) {
                $htmlResults .= "<li>" . $result['Nom'] . "</li>";
            }
            $htmlResults .= "</ul>";
            echo $htmlResults;
        } else {
            echo "Aucun résultat trouvé.";
        }
    }

}
?>
