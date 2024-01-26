<?php
require_once("../../connexion.php");

class BarreDeRecherche extends Connexion{

    public function rechercherUtilisateur(){
        if (isset($_GET['user'])) {
            $user = trim($_GET['user']);
            $user = $user . '%'; // Ajout du % pour la recherche LIKE

            $query = "SELECT Nom FROM Joueur WHERE Nom LIKE :nom LIMIT 10";
            $req = Connexion::getBdd()->prepare($query);

            $req->bindParam(":nom", $user, PDO::PARAM_STR);
            $req->execute();
            $result = $req->fetchAll(PDO::FETCH_ASSOC);
        }
            
        return $result;
    }
}

$barre = new BarreDeRecherche();
$resultatRecherche = $barre->rechercherUtilisateur();

// Retourner les résultats au format JSON
header('Content-Type: application/json');
echo json_encode($resultatRecherche);

?>
