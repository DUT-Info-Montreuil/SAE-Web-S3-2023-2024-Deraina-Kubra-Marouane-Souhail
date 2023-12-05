<?php
require_once "modules/mod_equipes/modele_equipes.php";
require_once "modules/mod_equipes/vue_equipes.php";

class ControleurEquipes {
	private $modele;
	private $vue;
	private $action;
	
	public function __construct() {
		$this->modele = new ModeleEquipes();
		$this->vue = new VueEquipes();
	}
	
	public function exec() {
		$this->action = isset($_GET["action"]) ? $_GET["action"] : "liste";
		
		switch ($this->action) {
			case "liste" :
				$this->liste();
				break;
			case "details" :
				$this->details();
				break;
			default : 
				die ("Action inexistante");
			
		}
	}
	
	private function liste () {
		$liste = $this->modele->get_liste();
		$this->vue->menu();
		$this->vue->liste ($liste);
	}
	
	private function details () {
		$id_equipe = isset ($_GET["id"]) ? $_GET["id"] : die("Paramètre manquant");
		$donnees = $this->modele->get_details ($id_equipe);
		if (!$donnees) {
			die("Erreur dans la récupération de l'équipe");
		}
		$this->vue->menu();
		$this->vue->details ($donnees);
	}
	


}
