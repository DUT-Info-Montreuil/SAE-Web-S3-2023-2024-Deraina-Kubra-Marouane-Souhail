<?php

class Site {
    private $module_name;
    private $module;
           
    public function __construct() {
		$this->module_name = isset($_GET['module']) ? $_GET['module'] : "accueil"; 
        Connexion::init_connexion();

		$path = "modules/mod_".$this->module_name."/modele_".$this->module_name.".php"; 

        $fullPath = __DIR__ . "/" . $path;
        if (file_exists($fullPath)) {
            require_once $fullPath;
        } else {
            die("Le fichier '{$fullPath}' n'a pas été trouvé.");
        }
    }

    public function exec_module() {
		$module_class = "Mod" . ucfirst($this->module_name);

		if (class_exists($module_class)) {
			$this->module = new $module_class();
			$this->module->exec();
		} else {
			die("La classe du module '{$module_class}' n'existe pas.");
		}
    }
}

$site = new Site();
$site->exec_module();

?>
