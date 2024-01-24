<?php
// ControleurDefense.php
require_once 'modele_defense.php';
require_once 'vue_defense.php';

class ControleurDefense {
    public $vue;
    public $modele_defense;
    
    public function __construct() {
        $this->vue = new VueDefense();
        $this->modele_defense = new ModeleDefense();
        $this->action = isset($_GET['action']) ? $_GET['action'] : 'afficher';
    }
    
    public function afficher() {
        $this->vue->afficher();
  }

  public function afficherPiege() {
    $detailsPiege = $this->modele_defense->getDetailsPiege();
    $this->vue->afficherPiege($detailsPiege);
}

public function afficherTourelle() {
    $detailsTourelle = $this->modele_defense->getDetailsTourelle();
    $this->vue->afficherTourelle($detailsTourelle);
}



    public function exec() {
        switch ($this->action) {
            case 'afficher':
                $this->afficher();
                break;
            case 'piege':
                $this->afficherPiege();
                break;   
            case 'tourelle': 
                $this->afficherTourelle();
                break;     
            default:
                $this->afficher();
                break;
        }
    }
}

?>