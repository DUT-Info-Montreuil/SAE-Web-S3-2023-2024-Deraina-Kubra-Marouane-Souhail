<?php
require_once 'mod_carte.php';
require_once 'vue_carte.php';
require_once '././fonction.php';

class ControleurCarte {
    public $vue_carte;
    public $modele_carte;
    private $action;

    public function __construct() {
        $this->vue_carte = new VueConnexion();
        $this->modele_carte = new ModeleCarte();
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'bienvenue';
    }

 
    

  
  public function getAffichage() {
    return $this->vue_carte->getAffichage();
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
            default:
                die ("Action inexistante");
        }
    }
}
?>