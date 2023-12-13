<?php

class ModuleGenerique {
	private $affichage;
	protected $title;
	protected $controleur;
	
	public function __construct () {
		$this->title = "";
		$this->affichage = "";
	}
	
	public function exec () {
		$this->controleur->exec();
		echo'Hello';
		$this->affichage = ob_get_clean();
	
	}


	public function get_affichage() {
		return $this->affichage;
	}


}
