<?php
require_once "modules/mod_joueurs/modele_joueurs.php";
require_once "modules/mod_joueurs/vue_joueurs.php";

class ControleurJoueurs {
	private $modele;
	private $vue;
	private $action;
	
	public function __construct() {
		$this->modele = new ModeleJoueurs();
		$this->vue = new VueJoueurs();
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
			case "form_ajout" :
				$this->form_ajout();
				break;
			case "ajout" : 
				$this->ajout();
				break;
			default : 
				die ("Action inexistante");
			
		}
	}
	
	private function liste () {
		$this->vue->menu();
		$liste = $this->modele->get_liste();
		$this->vue->liste ($liste);
	}
	
	private function details () {
		$id_joueur = isset ($_GET["id"]) ? $_GET["id"] : die("Paramètre manquant");
		$donnees = $this->modele->get_details ($id_joueur);
		if (!$donnees) {
			die("Erreur dans la récupération du joueur");
		}
		$this->vue->menu();
		$this->vue->details ($donnees);
	}
	
	private function form_ajout () {
		$this->vue->menu();
		$this->vue->form_ajout();
	}
	
	private function ajout () {
		$nom_joueur = isset ($_POST["nom"]) ? $_POST["nom"] : die("Paramètre manquant");
		$bio_joueur = isset ($_POST["bio"]) ? $_POST["bio"] : die("Paramètre manquant");
		if ($this->modele->ajout ($nom_joueur, $bio_joueur)) {
			$this->vue->menu();
			$this->vue->confirmAjout();
		}
		else {
			$this->vue->menu();
			$this->vue->erreurBD();
		}
	}


}
