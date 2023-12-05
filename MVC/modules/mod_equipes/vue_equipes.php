<?php

class VueEquipes {
	public function liste ($tab_equipes) {
		?><ul><?php
		foreach ($tab_equipes as $equipe) {
			?><li><a href="index.php?module=equipes&action=details&id=<?=$equipe["id"]?>"><?=$equipe["nom"]?></a></li><?php
		}
		?></ul><?php
	}
	
	public function details ($donnees) {
		?>
		<h1><?=$donnees["nom"]?></h1>
		<!--Ajouter ici l'affichage de l'année, du pays etc-->
		<?=$donnees["description"]?>
		<?php
	}


	public function menu () {
		//Menu global
?>
<ul>
 <li><a href="index.php?module=joueurs">Liste des joueurs</a></li>
 </li><a href="index.php?module=equipes">Liste des équipes</a></li>
</ul>
<?php

		//Menu spécifique au module
	}

}
