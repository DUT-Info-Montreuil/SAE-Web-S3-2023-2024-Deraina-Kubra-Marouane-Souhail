<?php

class Site {
    private $module_name;
    private $module;
           
    public function __construct() {
		$this->module_name = isset($_GET['module']) ? $_GET['module'] : "accueil";

		switch ($this->module_name) {
			case "defense" :
			case "ennemi" :
            case "profil" :
            case "map" :
            case "connexion" :
            case "inscription" :
            case "accueil" :
				require_once "modules/mod_".$this->module_name."/modele_".$this->module_name.".php";
				break;
			default :
				die ("Module inexistant");
		}
	}
	
	public function exec_module() {
		$module_class = "Mod".$this->module_name;
		$this->module = new $module_class();
		$this->module->exec();
        
	}

	public function get_module() {
		return $this->module;
	}
}
?>
