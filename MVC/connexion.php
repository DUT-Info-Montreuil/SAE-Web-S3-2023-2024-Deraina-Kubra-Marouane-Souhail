<?php 
class Connexion {
	public static $bdd;
	
	public static function init_connexion() {
		$dsn = "mysql:host=database-etudiants.iut.univ-paris8.fr;dbname=dutinfopw20164";
		$user = "dutinfopw20164";
		$password = "rytutyta";
		self::$bdd = new PDO ($dsn, $user, $password);
	}



}
