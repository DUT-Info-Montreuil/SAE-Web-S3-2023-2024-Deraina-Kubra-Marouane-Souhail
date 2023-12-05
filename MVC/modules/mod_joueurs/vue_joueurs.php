<?php

class VueJoueurs {

	public function liste ($tab_joueurs) {
		?>
<h1>Liste des joueurs</h1>
<ul>
<?php
		foreach ($tab_joueurs as $joueur) {
			?><li><a href="index.php?module=joueurs&action=details&id=<?=$joueur["id"]?>"><?=$joueur["nom"]?></a></li><?php
		}
		?></ul><?php
	}
	
	public function details ($donnees) {
		?>
		<h1><?=$donnees["nom"]?></h1>
		<?=$donnees["biographie"]?>
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
?>
<ul>
 <li><a href="index.php?module=joueurs&action=liste">Liste</a></li>
 <li><a href="index.php?module=joueurs&action=form_ajout">Ajouter un joueur</a></li>
</ul>
<?php

	}

	public function form_ajout() {
?>
<form action="index.php?action=ajout" method="POST">
	Nom : <input type="text" name="nom"/><br/>
	Bio : <textarea name="bio"></textarea>
	<input type="submit"/>
</form>

<?php
	}

	public function confirmAjout() {
		echo "Joueur bien ajouté !";
	}

	public function erreurBD() {
		echo "Erreur lors de l'ajout/modification dans la BD";
	}
}
