<?php
require_once "modules/mod_profil/vue_profil.php"; 

class ControleurProfil{
    private $vue;
    
    public function __construct() {
        $this->vue = new VueProfil();
    }
    
    public function exec() {

        if(isset($_SESSION['user_id'])) {
        $this->vue->afficherProfil();
        }else{
            header("Location: index.php?module=connexion&action=connexion"); 
            exit();
        }
    }
}
?>
