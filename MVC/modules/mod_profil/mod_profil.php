<?php
require_once '/home/etudiants/info/dandriambala/local_html/SAE dev web/MVC/connexion.php';

class ModeleProfil extends Connexion {

    public static function NbPartieJouee(){
    
        $userID = $_SESSION['user_id'];
            
        $query = "SELECT count(*) FROM Partie WHERE idJoueur = :userID";
        $statement = parent::$bdd->prepare($query);
        
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        
        $statement->execute(); 
        $result = $statement->fetchColumn();
    
        return $result !== null ? $result : 0; 
    
    }

    public static function NbPartieGagnee(){
    
        $userID = $_SESSION['user_id'];
            
        $query = "SELECT count(*) FROM Partie WHERE idJoueur = :userID and Etat_Partie='Gagnée'";
        $statement = parent::$bdd->prepare($query);
        
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        
        $statement->execute(); 
        $result = $statement->fetchColumn();
    
        return $result !== null ? $result : 0; 
    
    }

    public static function NbPartiePerdu(){
    
        $userID = $_SESSION['user_id'];
            
        $query = "SELECT count(*) FROM Partie WHERE idJoueur = :userID and Etat_Partie='Perdue'";
        $statement = parent::$bdd->prepare($query);
        
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        
        $statement->execute(); 
        $result = $statement->fetchColumn();
    
        return $result !== null ? $result : 0; 
    
    }

    public static function NbArgent(){
    
        $userID = $_SESSION['user_id'];
            
        $query = "SELECT Argent FROM Joueur WHERE idJoueur = :userID";
        $statement = parent::$bdd->prepare($query);
        
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        
        $statement->execute(); 
        $result = $statement->fetchColumn();
    
        return $result !== null ? $result : 0; 
    
    }

    public static function photoDeProfil(){
        $userID = $_SESSION['user_id'];
    
        $query = "SELECT Logo FROM Joueur WHERE idJoueur = :userID";
        $statement = parent::$bdd->prepare($query);
    
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
    
        $result = $statement->fetch(PDO::FETCH_ASSOC);
    
        if (isset($result['Logo'])) {
            return $result['Logo'];
        } else {
            return null;
        }
    }
    

    public static function pseudo(){
        $userID = $_SESSION['user_id'];
            
        $query = "SELECT Nom from Joueur where idJoueur = :userID";
        $statement = parent::$bdd->prepare($query);
        
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        
        $statement->execute(); 
        $result = $statement->fetchColumn();
    
        return $result;
    }

    public static function getNomJoueur($userID) {
        $query = "SELECT Nom FROM Joueur WHERE idJoueur = :userID";
        $statement = parent::$bdd->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute(); 
        $result = $statement->fetchColumn();
        return $result;
    }
    

    public static function creerTournoi(){
        $userID = $_SESSION['user_id'];
            
        $query = "SELECT count(*) from Tournoi where id_Createur = :userID";
        $statement = parent::$bdd->prepare($query);
        
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        
        $statement->execute(); 
        $result = $statement->fetchColumn();
    
        return $result !== null ? $result : 0; 
    }

    public static function participeTournoi(){
        $userID = $_SESSION['user_id'];
            
        $query = "SELECT count(*) from Participe where idJoueur = :userID";
        $statement = parent::$bdd->prepare($query);
        
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        
        $statement->execute(); 
        $result = $statement->fetchColumn();
    
        return $result !== null ? $result : 0; 
    }


    public static function reussite(){
        $userID = $_SESSION['user_id'];
            
        $query = "SELECT (SUM(CASE WHEN Etat_Partie = 'Gagnée' THEN 1 ELSE 0 END) / COUNT(*)) * 100 FROM Partie WHERE idJoueur = :userID";
        $statement = parent::$bdd->prepare($query);
        
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        
        $statement->execute(); 
        $result = $statement->fetchColumn();
    
        return $result !== null ? $result : 0; 
    }

    public function envoyerMessageBd($idDestinateur, $contenu){

        $sql = "INSERT INTO EffectuerMessage (idEmeteur, idDest, contenu) VALUES (:emetteur, :destinataire, :contenu)";

        $stmt =  parent::$bdd->prepare($sql);
    
        $idEmeteur = $_SESSION['user_id']; 
            
        $stmt->bindParam(":emetteur", $idEmeteur, PDO::PARAM_INT);
        $stmt->bindParam(":destinataire",$idDestinateur, PDO::PARAM_INT);
        $stmt->bindParam(":contenu",$contenu, PDO::PARAM_STR);
        $stmt->execute();

    }

    function getIdUtilisateurParNom($nomUtilisateur) {
        $requete = "SELECT idJoueur FROM Joueur WHERE Nom = :nom";

        $statement = parent::$bdd->prepare($requete);
        $statement->bindParam(":nom", $nomUtilisateur, PDO::PARAM_STR);

        $idUtilisateur = null;

        if($statement->execute()){
            $idUtilisateur = $statement->fetch(PDO::FETCH_ASSOC);
        }
    
        return $idUtilisateur['idJoueur'];
    }

    public function rechercherUtilisateur($searchTerm) {
        $results = array();
    
        $query = "SELECT * FROM Joueur WHERE Nom LIKE :searchTerm";
        $stmt = parent::$bdd->query($query);
        $stmt->bindValue(':searchTerm', "%$searchTerm%", PDO::PARAM_STR);
        $stmt->execute();
    
        while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
            $results[] = $row;
        }
    
        return $results;
    }

    public static function getReceivedMessagesWithSenderName(){
        $userID = $_SESSION['user_id'];
    
        // Requête SQL pour récupérer le nom de l'expéditeur et le contenu des messages
        $query = "SELECT j.nom AS nomExpediteur, m.contenu AS contenuMessage
                  FROM EffectuerMessage m
                  JOIN Joueur j ON m.idEmeteur = j.idJoueur
                  WHERE m.idDest = :userID";
    
        $statement = parent::$bdd->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->execute();
    
        // Récupérez les données des messages sous forme de tableau associatif
        $messages = $statement->fetchAll(PDO::FETCH_ASSOC);
    
        return $messages;
    }

    // Ajouter un nouveau tournoi
    public function creationTournoi($idCreateur, $nom, $regle, $dateDebut, $dateFin, $capacite, $recompense) {
        $query = "INSERT INTO Tournoi (id_Createur, Nom, Regle, DateDebut, DateFin, Capacite, Recompense) VALUES (:idCreateur, :nom, :regle, :dateDebut, :dateFin, :capacite, :recompense)";
        
        $statement = parent::$bdd->prepare($query);
        
        $statement->bindParam(':idCreateur', $idCreateur, PDO::PARAM_INT);
        $statement->bindParam(':nom', $nom, PDO::PARAM_STR);
        $statement->bindParam(':regle', $regle, PDO::PARAM_STR);
        $statement->bindParam(':dateDebut', $dateDebut);
        $statement->bindParam(':dateFin', $dateFin);
        $statement->bindParam(':capacite', $capacite, PDO::PARAM_INT);
        $statement->bindParam(':recompense', $recompense, PDO::PARAM_INT);
        
        $statement->execute(); 
    }

    public static function getTournois() {
        $query = "SELECT * FROM Tournoi";
        $statement = parent::$bdd->prepare($query);
        $statement->execute();
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    public static function getAllUsernames() {
        $query = "SELECT idJoueur, Nom FROM Joueur";
        $statement = parent::$bdd->prepare($query);
        $statement->execute(); 
        return $statement->fetchAll(PDO::FETCH_ASSOC);
    }
    
     // Méthode pour envoyer de l'argent à un destinataire
     public static function envoyerArgent($destinataireID, $montant) {
        $expediteurID = $_SESSION['user_id'];
        
        // Vérifier si l'expéditeur a suffisamment d'argent
        $queryVerifSolde = "SELECT Argent FROM Joueur WHERE idJoueur = :expediteurID";
        $statementVerifSolde = parent::$bdd->prepare($queryVerifSolde);
        $statementVerifSolde->bindParam(':expediteurID', $expediteurID, PDO::PARAM_INT);
        $statementVerifSolde->execute();
        
        // Récupérer le solde de l'expéditeur
        $expediteurSolde = $statementVerifSolde->fetchColumn();
        
        if ($expediteurSolde >= $montant) {
            // L'expéditeur a suffisamment d'argent, procéder à la transaction
            $queryDebiter = "UPDATE Joueur SET Argent = Argent - :montant WHERE idJoueur = :expediteurID";
            $statementDebiter = parent::$bdd->prepare($queryDebiter);
            $statementDebiter->bindParam(':montant', $montant, PDO::PARAM_INT);
            $statementDebiter->bindParam(':expediteurID', $expediteurID, PDO::PARAM_INT);
            
            // Ajouter le montant au destinataire
            $queryCrediter = "UPDATE Joueur SET Argent = Argent + :montant WHERE idJoueur = :destinataireID";
            $statementCrediter = parent::$bdd->prepare($queryCrediter);
            $statementCrediter->bindParam(':montant', $montant, PDO::PARAM_INT);
            $statementCrediter->bindParam(':destinataireID', $destinataireID, PDO::PARAM_INT);
            
            // Exécution des requêtes
            $debitSuccess = $statementDebiter->execute();
            $creditSuccess = $statementCrediter->execute();
            
            if ($debitSuccess && $creditSuccess) {
                return true; // La transaction a réussi
            } else {
                return false; // La transaction a échoué
            }
        } else {
            return false; // L'expéditeur n'a pas suffisamment d'argent
        }
    }
    
    
    

public static function estDejaInscrit($userID) {
    $query = "SELECT count(*) FROM Participe WHERE idJoueur = :userID";
    $statement = parent::$bdd->prepare($query);
    $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetchColumn() > 0;
}
 


 // Rejoindre un tournoi
 public static function rejoindreTournoi($userID, $tournoiID) {
    if (!self::estDejaInscrit($userID)) {
        $query = "INSERT INTO Participe (idJoueur, Id_Tournoi) VALUES (:userID, :Id_Tournoi)";
        $statement = parent::$bdd->prepare($query);
        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        $statement->bindParam(':Id_Tournoi', $tournoiID, PDO::PARAM_INT);
        $statement->execute();
        return true; // Rejoint avec succès
    } else {
        // L'utilisateur est déjà inscrit à un autre tournoi
        return false;
    }
}
// Méthode pour permettre à l'utilisateur de quitter un tournoi
public static function quitterTournoi($userID) {
    $query = "DELETE FROM Participe WHERE idJoueur = :userID";
    $statement = parent::$bdd->prepare($query);
    $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
    $statement->execute();

    // Vous pouvez vérifier si la suppression a été effectuée avec succès
    // et retourner un booléen ou un message en conséquence
    return $statement->rowCount() > 0;
}

public static function getTournoiActuel($userID) {
    $query = "SELECT Id_Tournoi FROM Participe WHERE idJoueur = :userID";
    $statement = parent::$bdd->prepare($query);
    $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
    $statement->execute();
    return $statement->fetchColumn();
}

public static function calculerScore(){
    $userID = $_SESSION['user_id'];

    // Requête pour obtenir le nombre total de parties jouées
    $queryTotalParties = "SELECT count(*) FROM Partie WHERE idJoueur = :userID";
    $statementTotalParties = parent::$bdd->prepare($queryTotalParties);
    $statementTotalParties->bindParam(':userID', $userID, PDO::PARAM_INT);
    $statementTotalParties->execute(); 
    $totalParties = $statementTotalParties->fetchColumn();

    // Requête pour obtenir le nombre de parties gagnées
    $queryPartiesGagnees = "SELECT count(*) FROM Partie WHERE idJoueur = :userID and Etat_Partie='Gagnée'";
    $statementPartiesGagnees = parent::$bdd->prepare($queryPartiesGagnees);
    $statementPartiesGagnees->bindParam(':userID', $userID, PDO::PARAM_INT);
    $statementPartiesGagnees->execute(); 
    $partiesGagnees = $statementPartiesGagnees->fetchColumn();
    
    // Calcul du score
    $score = $partiesGagnees * $totalParties * 12;

    return $score;
}

public static function getAllPlayersScores() {
    $query = "SELECT idJoueur FROM Joueur";
    $statement = parent::$bdd->prepare($query);
    $statement->execute();
    $joueurs = $statement->fetchAll(PDO::FETCH_COLUMN);

    $scores = [];
    foreach ($joueurs as $idJoueur) {
        // Calculer le score pour chaque joueur
        $scores[$idJoueur] = self::calculerScorePourJoueur($idJoueur);
    }

    return $scores;
}

public static function getPositionClassement() {
    $userID = $_SESSION['user_id'];
    $scores = self::getAllPlayersScores();

    // Trier les scores en ordre décroissant
    arsort($scores);

    // Trouver la position du joueur actuel
    $position = array_search($userID, array_keys($scores)) + 1;

    return $position;
}


public static function calculerScorePourJoueur($userID) {
    // Requête pour obtenir le nombre total de parties jouées par le joueur spécifié
    $queryTotalParties = "SELECT count(*) FROM Partie WHERE idJoueur = :userID";
    $statementTotalParties = parent::$bdd->prepare($queryTotalParties);
    $statementTotalParties->bindParam(':userID', $userID, PDO::PARAM_INT);
    $statementTotalParties->execute(); 
    $totalParties = $statementTotalParties->fetchColumn();

    // Requête pour obtenir le nombre de parties gagnées par le joueur spécifié
    $queryPartiesGagnees = "SELECT count(*) FROM Partie WHERE idJoueur = :userID and Etat_Partie='Gagnée'";
    $statementPartiesGagnees = parent::$bdd->prepare($queryPartiesGagnees);
    $statementPartiesGagnees->bindParam(':userID', $userID, PDO::PARAM_INT);
    $statementPartiesGagnees->execute(); 
    $partiesGagnees = $statementPartiesGagnees->fetchColumn();
    
    // Calcul du score
    $score = $partiesGagnees * $totalParties * 12;

    return $score;
}


public static function getTotalJoueurs(){
    $query = "SELECT COUNT(*) FROM Joueur";
    $statement = parent::$bdd->prepare($query);
    $statement->execute(); 
    return $statement->fetchColumn();
}


}
?>