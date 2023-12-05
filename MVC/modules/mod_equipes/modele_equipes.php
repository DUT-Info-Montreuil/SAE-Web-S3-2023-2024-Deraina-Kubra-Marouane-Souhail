<?php

class ModeleEquipes extends Connexion{
	
	public function get_liste () {
		$req = "SELECT * FROM equipe";
		$pdo_req = self::$bdd->query($req);
		return $pdo_req->fetchAll();
	}
	
	public function get_details ($id) {
		$req = "SELECT equipe.nom as nom, equipe.annee_creation as annee, equipe.logo as logo, pays.nom as nom_pays, equipe.description as description FROM equipe INNER JOIN pays ON pays.id=equipe.pays WHERE equipe.id=:id";
		$pdo_req = self::$bdd->prepare($req);
		$pdo_req->bindParam("id", $id, PDO::PARAM_INT);
		$pdo_req->execute();
		return $pdo_req->fetch();
	}
	
	
	
	
}
