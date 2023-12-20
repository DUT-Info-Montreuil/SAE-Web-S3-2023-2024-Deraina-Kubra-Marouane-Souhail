<?php
require_once "connexion.php"; 

class ModeleProfil extends Connexion {

    public function  __construct(){
	}

    public static function NbPartieJouee(){
        $userID = $_SESSION['user_id'];
        $query = "SELECT count(*) FROM Partie where idJoueur:=userID";
        
        $statement = $pdo->prepare($query);

        $statement->bindParam(':userID', $userID, PDO::PARAM_INT);
        
        $statement->execute();
        $result = $statement->fetchColumn();
        echo $result;
        return $result;
    }




}



?>