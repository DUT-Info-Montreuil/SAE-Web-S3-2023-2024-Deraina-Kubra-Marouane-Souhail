<?php
require_once '/home/etudiants/info/dandriambala/local_html/SAE dev web/MVC/connexion.php';

class BarreDeRecherche extends Connexion{
    public static function rechercherUtilisateur(){
        if (isset($_GET['user'])) {
            $user = trim($_GET['user']);
            $user = $user . '%'; // Ajout du % pour la recherche LIKE

            

            // Utilisation de requête préparée pour éviter les attaques SQL
            $query = "SELECT Nom FROM Joueur WHERE Nom LIKE :nom LIMIT 10";
            $req = Connexion::getBdd()->prepare($query);

            $req->bindParam(":nom", $user, PDO::PARAM_STR);
            $req->execute();

            $result = $req->fetchAll();
            

            foreach ($result as $r) {
                echo htmlspecialchars($r['Nom'])." ";
            }

        }   
    }   
}

$barre = new BarreDeRecherche();
$barre::rechercherUtilisateur();
?>
