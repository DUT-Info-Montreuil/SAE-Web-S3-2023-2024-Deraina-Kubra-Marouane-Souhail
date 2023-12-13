<?php
class VueCompMenu extends VueCompGenerique {

	public function __construct(){
		$this->affichage .= '<ul><li><a href="index.php?module=defense">Defense</a></li>';
		$this->affichage .= '<li><a href="index.php?module=ennemis">ennemis</a></li>';
		$this->affichage .= '<ul><li><a href="index.php?module=profile">profile</a></li>';
		$this->affichage .= '<li><a href="index.php?module=map">map</a></li>';
		//$this->affichage .= '<ul><li><a href="index.php?module=connexion">connexion</a></li>';
		$this->affichage .= '<li><a href="index.php?module=inscription">inscription</a></li>';
		if (isset($_SESSION['login'])) {
			$this->affichage .= '<li><a href="index.php?module=connexion&action=deconnexion">Déconnexion</a></li>';
		}
		else {
			$this->affichage .= '<li><a href="index.php?module=connexion&action=form_connexion">Connexion</a></li>';
		}
		$this->affichage .= "</ul>";

	}	


}
