<?php
require_once 'modele_connexion.php';
require_once 'vue_connexion.php';
require_once '././fonction.php';

class ControleurConnexion {
    public $vue_connexion;
    public $modele_connexion;
    private $action;

    public function __construct() {
        $this->vue_connexion = new VueConnexion();
        $this->modele_connexion = new ModeleConnexion();
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'connexion';
    }

    public function connexion() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $nom = $_POST['nom'] ?? '';
            $mot_de_passe = $_POST['mot_de_passe'] ?? '';
            
           
            $utilisateur = $this->modele_connexion->verifierLoginExistant($nom);
    
            if ($utilisateur !== null && password_verify($mot_de_passe, $utilisateur['mot_de_passe'])) {
                // Les informations de connexion sont correctes, initialisation de la session
                $_SESSION['user_id'] = $utilisateur['idJoueur'];
                echo "Connexion réussie !";
                header('Location: index.php');
                exit;
            } else {
                
                echo "Informations de connexion incorrectes.";
                $this->vue_connexion->form_connexion();
            }
        } else {
            $this->vue_connexion->form_connexion();
        }
    }
    
    
    public function inscription() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // Récupération des informations du formulaire
            $nom = $_POST['nom'] ?? '';
            $mot_de_passe = $_POST['mot_de_passe'] ?? '';
            $confirmation_mot_de_passe = $_POST['confirmation_mot_de_passe'] ?? '';
            $token = $_POST['token'] ?? '';
    
            // Vérification du token CSRF
            if (!Fonction::isTokenValid($token)) {
                die('Erreur de sécurité : token invalide.');
            }
    
            // Vérification de la concordance des mots de passe
            if ($mot_de_passe !== $confirmation_mot_de_passe) {
                echo "Les mots de passe ne correspondent pas.";
                return;
            }
    
            // Vérification de l'unicité du nom
            if ($this->modele_connexion->verifierLoginExistant($nom)) {
                echo "Ce nom est déjà utilisé. Veuillez choisir un autre.";
                return;
            }
    
            // Téléchargement de l'image
            $logo = $this->telechargementImage();
            if (!$logo) {
                echo "Erreur lors du téléchargement de l'image.";
                return;
            }
    
            // Hachage du mot de passe
            $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);
    
            // Ajout de l'utilisateur à la base de données
            if ($this->modele_connexion->ajouterUtilisateur($nom, $mot_de_passe_hash, $logo)) {
                echo "Inscription réussie !";
                // Connectez l'utilisateur et redirigez-le vers la page d'accueil ou autre
                $_SESSION['user_id'] = $this->modele_connexion->verifierLoginExistant($nom);
                unset($_SESSION['user_id']);
                header("Location: index.php?module=connexion&action=connexion"); 
                exit;
            } else {
                echo "Erreur lors de l'inscription.";
            }
        }
    }

    public function telechargementImage() {
        $logo = '';
    
        if (isset($_FILES['logo']) && $_FILES['logo']['error'] == UPLOAD_ERR_OK) {
            $extension = pathinfo($_FILES['logo']['name'], PATHINFO_EXTENSION);
            $dossierCible = "modules/mod_connexion/logos/";
            $nomFichier = uniqid("logo_") . '.' . $extension;
            $fichierCible = $dossierCible . $nomFichier;
    
            if (move_uploaded_file($_FILES['logo']['tmp_name'], $fichierCible)) {
                $logo = $fichierCible;
            } else {
                echo "Erreur lors du téléchargement du fichier.";
                return $logo; // Retourner la valeur de $logo même en cas d'erreur
            }
        }
    
        return $logo; // Retourner la valeur de $logo
    }
    

    public function deconnexion() {
        unset($_SESSION['user_id']);
        echo "Vous êtes déconnecté.";
        header('Location: index.php');
    }
   

    public function form_inscription() {
        $token = Fonction::generateToken();
        Fonction::storeToken($token);
        $this->vue_connexion->form_inscription($token);
  }
  
  public function getAffichage() {
    return $this->vue_connexion->getAffichage();
}

    public function exec() {
        switch ($this->action) {
            case 'afficher':
                $this->form_inscription();
                break;
            case'inscription':
                $this->inscription();
                break;
            case 'connexion':
                $this->connexion();
                break;
            case 'deconnexion':
                $this->deconnexion();
                break;
            default:
                die ("Action inexistante");
        }
    }
}
?>