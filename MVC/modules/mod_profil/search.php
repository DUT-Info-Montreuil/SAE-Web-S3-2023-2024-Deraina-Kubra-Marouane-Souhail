<?php
require_once("../../connexion.php");

class BarreDeRecherche extends Connexion{

    public function rechercherUtilisateur(){
        if (isset($_GET['user'])) {
            $user = trim($_GET['user']);
            $user = $user . '%'; // Ajout du % pour la recherche LIKE

            // Utilisation de requête préparée pour éviter les attaques SQL
            $query = "SELECT Nom FROM Joueur WHERE Nom LIKE :nom LIMIT 10";
            $req = Connexion::getBdd()->prepare($query);

            $req->bindParam(":nom", $user, PDO::PARAM_STR);
            $req->execute();
            $result = $req->fetchAll();
            return $result;
        }   
    }
    
    public function afficherRecherche($result){

        foreach ($result as $index => $r) {
            echo htmlspecialchars($r['Nom']);
            if ($index < count($result) - 1) {
                echo " / ";
            }
        }

    }
}

$barre = new BarreDeRecherche();
$resultatRecherche = $barre->rechercherUtilisateur();
$barre->afficherRecherche($result);
?>
