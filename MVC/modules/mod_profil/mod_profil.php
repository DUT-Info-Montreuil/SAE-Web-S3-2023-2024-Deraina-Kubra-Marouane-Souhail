<?php
require_once 'connexion.php';

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

}

?>