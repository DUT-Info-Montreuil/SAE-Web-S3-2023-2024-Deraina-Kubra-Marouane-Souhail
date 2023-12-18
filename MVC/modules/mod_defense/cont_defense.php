<?php
// ControleurDefense.php
require_once 'mod_defense.php';
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

    public function exec() {
        switch ($this->action) {
            case 'afficher':
                $this->afficher();
                break;
            case 'piege':
                $this->afficherPiege();
                break;    
            default:
                // Action par défaut si l'action n'est pas reconnue
                $this->inscription();
                break;
        }
    }
}

?>