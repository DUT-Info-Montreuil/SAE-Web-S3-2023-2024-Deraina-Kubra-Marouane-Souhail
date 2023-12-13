<?php
class VueCompMenu extends VueCompGenerique {

	public function __construct(){
		$this->affichage .= '<nav div="nav"> <a href="index.php?module=defense">Defense</a>';
		$this->affichage .= '<a href="index.php?module=ennemis">Ennemis</a>';
		$this->affichage .= '<a href="index.php?module=profile">Profil</a>';
		$this->affichage .= '<a href="index.php?module=map">Carte</a>';
		$this->affichage .= '<a href="index.php?module=inscription">Inscription</a>';
		if (isset($_SESSION['login'])) {
			$this->affichage .= '<a href="index.php?module=connexion&action=deconnexion">Déconnexion</a>';
		}
		else {
			$this->affichage .= '<a href="index.php?module=connexion&action=form_connexion">Connexion</a>';
		}
		$this->affichage .= "</nav>";

	}	


}
