<?php

class VueCompFooter extends VueCompGenerique {


   public function __construct() {
       $this->affichage .= '<footer>';
       $this->affichage .= '<div class="footer-column contact-column">';
       $this->affichage .= '<h3>Contact</h3>';
       $this->affichage .= '<p>Email: contact@example.com</p>';
       $this->affichage .= '<p>Téléphone: +123456789</p>';
       $this->affichage .= '</div>';

	   $this->affichage .= '<div class="column-separator"></div>';

       $this->affichage .= '<div class="footer-column useful-links-column">';
       $this->affichage .= '<h3>Liens Utiles</h3>';
       $this->affichage .= '<ul>';
       $this->affichage .= '<li><a href="index.php?">Accueil</a></li>';
       $this->affichage .= '<li><a href="index.php?module=connexion&action=afficher">Inscription</a></li>';
       $this->affichage .= '<li><a href="index.php?module=connexion&action=connexion">Connexion</a></li>';
       $this->affichage .= '</ul>';
       $this->affichage .= '</div>';


       $this->affichage .= '<div id="footer_texte">';
       $this->affichage .= 'Copyright - Novembre 2023 - Deraina, Marouane, Souhail, Kubra';
       $this->affichage .= '</div>';
       $this->affichage .= '</footer>';

   }


}

