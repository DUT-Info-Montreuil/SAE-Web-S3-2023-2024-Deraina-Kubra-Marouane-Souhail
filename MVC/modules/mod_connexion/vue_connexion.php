<?php
require_once 'vue_generique.php';

class VueConnexion extends VueGenerique {
    
    public function __construct() {
        parent::__construct();
    }

    public function form_inscription($token) {
        echo '<h2>Inscription</h2>';
        echo '<form method="post" action="index.php?module=connexion&action=inscription" enctype="multipart/form-data">';
        echo '<input type="hidden" name="token" value="' . $token . '">';
        echo 'Nom : <input type="text" name="nom" required><br>';
        echo 'Mot de passe : <input type="password" name="mot_de_passe" required><br>';
        echo 'Confirmation du mot de passe : <input type="password" name="confirmation_mot_de_passe" required><br>';
        echo 'Photo de profil : <input type="file" name="logo" accept="image/*" required><br>';
        echo '<input type="submit" value="S\'inscrire">';
        echo '</form>';
    }
    

    public function form_connexion() {
        echo '<h2>Connexion</h2>';  
        echo '<form method="post" action="index.php?module=connexion&action=connexion">';
        echo 'Nom : <input type="text" name="nom" required><br>';
        echo 'Mot de passe : <input type="password" name="mot_de_passe" required><br>';
        echo '<input type="submit" value="Se connecter">';
        echo '</form>';
    }
    

}


?>


 
