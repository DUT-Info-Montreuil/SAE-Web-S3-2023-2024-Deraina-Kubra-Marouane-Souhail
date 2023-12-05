<?php 
class Connexion {
	protected static $bdd;
	
	public function init_connexion() {
		$dsn = "mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw201699";
		$user = "dutinfopw201699";
		$password = "juhugege";
		self::$bdd = new PDO ($dsn, $user, $password);
	}

	


}
