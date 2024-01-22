<?php
class VueCompMenu extends VueCompGenerique {

	public function __construct(){
		$this->affichage .= '<nav div="nav"> <a href="index.php?module=defense&action=afficher">Defense</a>';
		$this->affichage .= '<a href="index.php?module=ennemi">Ennemis</a>';
		$this->affichage .= '<a href="index.php?module=profil">Profil</a>';
		$this->affichage .= '<a href="index.php?module=map">Carte</a>';
		$utilisateurConnecte = false;
		if (isset($_SESSION['user_id'])) {
            $utilisateurConnecte = true;
        }
        if ($utilisateurConnecte) {
            $this->affichage .= '<a href="index.php?module=connexion&action=deconnexion">Déconnexion</a>';
        } else {
            $this->affichage .= '<a href="index.php?module=connexion&action=connexion">Connexion</a>';
            $this->affichage .= '<a href="index.php?module=connexion&action=afficher">Inscription</a>';
        }
		$this->affichage .= "</nav>";

	}	


}
