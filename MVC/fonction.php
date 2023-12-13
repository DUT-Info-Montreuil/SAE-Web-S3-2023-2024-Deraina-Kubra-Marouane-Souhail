<?php

class Fonction {

    public static function generateToken() {
        return bin2hex(random_bytes(32));
    }

    /**
     * Stocke le token dans la session avec une date d'expiration.
     * $token Le token à stocker.
     */
    public static function storeToken($token) {
        $_SESSION['token'] = $token;
        $_SESSION['token_expiry'] = time() + 3600; // Le token expire après 1 heure
    }

    /**
     * Vérifie si le token reçu est valide.
     * receivedToken Le token reçu à vérifier.
     * Vrai si le token est valide, faux sinon.
     */
    public static function isTokenValid($receivedToken) {
        if (!isset($_SESSION['token']) || !isset($_SESSION['token_expiry'])) {
            return false;
        }
        return ($_SESSION['token'] === $receivedToken) && (time() < $_SESSION['token_expiry']);
    }
}

?>
