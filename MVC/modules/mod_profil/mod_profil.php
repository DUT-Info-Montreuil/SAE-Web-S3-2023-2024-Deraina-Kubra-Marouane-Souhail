<?php
require_once "connexion.php"; 

class ModProfil extends Connexion {

    public function  __construct(){
	}

    public function NbPartieJouee(){
        
        $query = "SELECT count(*) FROM Partie where idJoueur:=;";
    }




}



?>