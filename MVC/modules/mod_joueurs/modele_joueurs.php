<?php

class ModeleJoueurs extends Connexion{
	
	public function get_liste () {
		$req = "SELECT * FROM joueur";
		$pdo_req = self::$bdd->query($req);
		return $pdo_req->fetchAll();
	}
	
	public function get_details ($id) {
		$req = "SELECT * FROM joueur WHERE id=:id";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->bindParam("id", $id, PDO::PARAM_INT);
		$pdo_req->execute();
		return $pdo_req->fetch();
	}
	
	public function ajout ($nom, $bio) {
		$req = "INSERT INTO joueur (nom, biographie) VALUES (:nom, :bio)";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->bindParam("nom", $nom);
		$pdo_req->bindParam("bio", $bio);
		$pdo_req->execute();
		if ($pdo_req->rowCount() == 0)
			return false;
		else 
			return true;
	}
	
	
}




