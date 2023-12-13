<?php
require_once 'connexion.php';

class ModeleConnexion extends Connexion {
  
    public function verifierLoginExistant($nom) {
		try {
			$query = self::$bdd->prepare("SELECT id, mot_de_passe FROM joueurs WHERE Nom = :nom");
			$query->bindParam(':nom', $nom, PDO::PARAM_STR);
			$query->execute();
			return $query->fetch(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {
			die('Erreur lors de la vérification du nom : ' . $e->getMessage());
		}
	}

public function ajouterUtilisateur($nom, $mot_de_passe_hash, $logo) {
    try {
        // Préparation de la requête avec le champ Argent inclus
        $stmt = self::$bdd->prepare("INSERT INTO joueurs (Nom, Mot_de_passe, Logo, Argent) VALUES (:nom, :mot_de_passe, :logo, :argent)");

        // Liaison des paramètres
        $stmt->bindParam(':nom', $nom, PDO::PARAM_STR);
        $stmt->bindParam(':mot_de_passe', $mot_de_passe_hash, PDO::PARAM_STR);
        $stmt->bindParam(':logo', $logo, PDO::PARAM_STR);
        $argentInitial = 0; // Définition de la valeur initiale pour Argent
        $stmt->bindParam(':argent', $argentInitial, PDO::PARAM_INT);

        // Exécution de la requête
        return $stmt->execute();
    } catch (PDOException $e) {
        die('Erreur lors de l\'ajout du joueur : ' . $e->getMessage());
    }
}


}
?>