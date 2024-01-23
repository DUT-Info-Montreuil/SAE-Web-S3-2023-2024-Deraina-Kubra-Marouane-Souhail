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

        $sql = "INSERT INTO EffectuerMessage (idEmeteur, idDest, contenu) VALUES (?, ?, ?)";

        $stmt =  parent::$bdd->prepare($sql);
    
        if ($stmt) {
            $idEmeteur = $_SESSION['user_id']; 
            $stmt->bind_param("iis", $idEmeteur, $idDestinateur, $contenu);
            $stmt->execute();
    
            if ($stmt->affected_rows > 0) {
                echo "Le message a été envoyé avec succès.";
            } else {
                echo "Erreur lors de l'envoi du message.";
            }
    
            $stmt->close();
        } else {
            echo "Erreur de préparation de la requête.";
        }
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
}
?>