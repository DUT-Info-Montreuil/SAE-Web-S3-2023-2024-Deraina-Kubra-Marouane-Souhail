<?php
class VueCompMenu extends VueCompGenerique {

	public function __construct(){

		$this->affichage .= '<nav div="nav"> <a href="index.php?module=defense&action=afficher">Defenses</a>';
		$this->affichage .= '<a href="index.php?module=ennemi">Ennemis</a>';
		$this->affichage .= '<a href="index.php?module=profil">Profil</a>';
		$this->affichage .= '<a href="index.php?module=carte&action=afficher">Carte</a>';

		$utilisateurConnecte = false;
		if (isset($_SESSION['user_id'])) {
            $utilisateurConnecte = true;
        }
        if ($utilisateurConnecte) {
            $this->affichage .= '<a href="index.php?module=connexion&action=deconnexion">Déconnexion</a>';
        } else {
            $this->affichage .= '<a href="index.php?module=connexion&action=form_connexion">Connexion</a>';
            $this->affichage .= '<a href="index.php?module=connexion&action=form_inscription">Inscription</a>';
        }
		$this->affichage .= '<a href="https://github.com/dandriambala/KQD_Defense/archive/develop_design_pattern.zip" class="download-button" target="_blank">Télécharger</a>';
		$this->affichage .= "</nav>";

	}	


}
