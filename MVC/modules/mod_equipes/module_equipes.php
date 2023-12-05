<?php
require_once "modules/mod_equipes/controleur_equipes.php";


class ModEquipes {
	private $title;
	private $controleur;
	
	public function __construct () {
		$this->title = "";
		$this->controleur = new ControleurEquipes();
	}
	
	public function exec () {
		$this->controleur->exec();
	}



}
