<?php
require_once "modules/mod_ennemi/vue_ennemi.php"; 
require_once 'mod_ennemi.php';

class ControleurEnnemi{
    private $vue;
    public $modele_ennemi;
    
    public function __construct() {
        $this->vue = new VueEnnemi();
        $this->modele_ennemi = new ModeleEnnemi();
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'afficher';
    }

    
    public function afficher() {
        $this->vue->afficher();
  }

public function afficherEnnemiB() {
    $detailsEnnemiB = $this->modele_ennemi->getDetailsEnnemiB();
    $this->vue->afficherEnnemiB($detailsEnnemiB);
}


public function afficherEnnemiP() {
    $detailsEnnemiP = $this->modele_ennemi->getDetailsEnnemiP();
    $this->vue->afficherEnnemiP($detailsEnnemiP);
}

    public function exec() {
        switch ($this->action) {
            case 'afficher':
                $this->afficher();
                break;
            case 'ennemiB':
                $this->afficherEnnemiB();
                break;   
            case 'ennemiP': 
                $this->afficherEnnemiP();
                break;     
            default:
                $this->afficher();
                break;
        }
    }
}
?>
