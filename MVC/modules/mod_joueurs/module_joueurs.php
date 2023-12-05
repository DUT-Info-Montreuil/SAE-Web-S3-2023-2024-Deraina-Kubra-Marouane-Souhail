<?php
require_once "modules/mod_joueurs/controleur_joueurs.php";

class ModJoueurs {
	
	private $title;
	private $controleur;
	
	public function __construct () {
		$this->title = "";
		$this->controleur = new ControleurJoueurs();
	}
	
	public function exec () {
		$this->controleur->exec();
	}


}
