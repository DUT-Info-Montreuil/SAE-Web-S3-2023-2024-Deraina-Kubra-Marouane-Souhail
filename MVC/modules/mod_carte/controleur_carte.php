<?php
require_once 'modele_carte.php';
require_once 'vue_carte.php';
require_once '././fonction.php';

class ControleurCarte {
    public $vue_carte;
    public $modele_carte;
    private $action;

    public function __construct() {
        $this->vue_carte = new VueCarte();
        $this->modele_carte = new ModeleCarte();
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'afficher';
    }
    
    public function getImagesCartes () {
        return $this->modele_carte->getCartes();
    }
 
    public function afficher() {
        $cartes = $this->modele_carte->getCartes(); 
        $this->vue_carte->carte($cartes);
    }
    
    

  
  public function getAffichage() {
    return $this->vue_carte->getAffichage();
}

    public function exec() {
        switch ($this->action) {
            case 'afficher':
                $this->afficher();
                break;
            default:
                die ("Action inexistante");
        }
    }
}
?>