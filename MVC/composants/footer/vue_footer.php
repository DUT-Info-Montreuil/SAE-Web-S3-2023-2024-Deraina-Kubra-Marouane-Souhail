<?php

class VueCompFooter extends VueCompGenerique {


   public function __construct() {
       $this->affichage .= '<footer>';
       $this->affichage .= '<div class="footer-column contact-column">';
       $this->affichage .= '<h4>Contact</h4>';
       $this->affichage .= '<h5>Email: contact@example.com</h5>';
       $this->affichage .= '<h5>Téléphone: +123456789</h5>';
       $this->affichage .= '</div>';

	   $this->affichage .= '<div class="column-separator"></div>';

       $this->affichage .= '<div class="footer-column useful-links-column">';
       $this->affichage .= '<h4>Liens Utiles</h4>';
       $this->affichage .= '<ul>';
       $this->affichage .= '<li><a href="index.php?">Accueil</a></li>';
       $this->affichage .= '<li><a href="index.php?module=connexion&action=form_inscription">Inscription</a></li>';
       $this->affichage .= '<li><a href="index.php?module=connexion&action=form_connexion">Connexion</a></li>';
       $this->affichage .= '</ul>';
       $this->affichage .= '</div>';

       $this->affichage .= '<div id="footer_texte">';
       $this->affichage .= '©  - 2023-2024 - Deraina, Marouane, Souhail, Kubra';
       $this->affichage .= '</div>';
       $this->affichage .= '</footer>';

   }


}

