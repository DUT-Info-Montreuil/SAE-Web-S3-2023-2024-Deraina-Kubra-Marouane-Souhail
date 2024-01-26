<!DOCTYPE html>
<style>

  /* Styles CSS */
  @import url('https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@400&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');
  

  main{
    align-items:stretch;
  }

  body::before {
            content: '';
            position: fixed; /* Fixe le pseudo-élément par rapport à la fenêtre du navigateur */
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1; /* Placez le pseudo-élément en arrière-plan */
            background: url('././Images/fond.avif') no-repeat center center fixed; 
            background-size: cover;
        }

  /* Styles des boutons */
  .custom-button {
    background-color: #6F6B47;
    color: black;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-family: 'Julius Sans One', sans-serif;
    margin-bottom: 10px; 
  }

/* Conteneur principal */
.container {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  justify-content: flex-start;
  height: 100vh; 
  padding: 20px; 
}

.button-groups {
  display: flex;
  justify-content: space-between;
  width: 100%;
  gap: 10px;
}

.left-buttons,
.right-buttons {
  flex: 1;
  display: flex;
  gap: 10px;
  flex-direction: column;
}

.bottom-left {
  margin-top: 100px;
  display:flex;
  align-items: center; 
}
/*
.info-blocks {
    display: flex;
    justify-content: space-between;
   */ /* Ajoutez d'autres styles si nécessaire }*/
.tournament-info {
  display:flex;
  font-size: 25px;
  color: #000000;
  font-family: 'Julius Sans One', sans-serif;
}

.text-score {
 /*display: flex;*/
  right:10%;
  top:20%;
  flex-direction: column;
  align-items: flex-end;
  font-size: 25px;
  color: #000000;
  font-family: 'Julius Sans One', sans-serif;
}

.text-tournoi {
  display: flex;
  flex-direction: column;
  align-items: center; /* Pour centrer horizontalement */
  justify-content: flex-end; /* Pour aligner en bas de la page */
  margin-top: 50px; /* Remplacez cette valeur par la marge souhaitée */
  text-align: center;
  font-size: 25px;
  color: #000000;
  font-family: 'Julius Sans One', sans-serif;
}


.score-info {
  color: #000000;
  font-family: 'Julius Sans One', sans-serif;
}

.communaute{
    font-family: 'Inknut Antiqua', sans-serif;
    font-weight: bold;
    font-size: 25px;
    text-align: left;
    margin-left: 20;
  }

.blue-squares-container {
  margin-left: 20px;
  display: flex;
  gap: 15px;
  justify-content: flex-start;
  margin-bottom: 20px;
}


.blue-square {
    position: relative;
    width: 100px;
    height: 100px;
    background-color: #ADD8E6;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    font-weight: bold;
    color: #006ED3;
    border-radius: 10px;
    margin-right: 20px;
}


.blue-square:last-child {
    margin-right: 0; 
}

.vertical-rectangle {
      width: 5px;
      height: 40px;
      background-color: #006ED3;
      margin-right: 10px;
    }
.text-above {
    position: absolute;
    top: 12px;
    font-size: 12px;
    color: white;
    font-family: 'Manrope', sans-serif;
}

.bottom-blue-square {
    position: relative;
    justify-content: center;
    align-items: center;
}

.bottom-blue-square .number {
    position: relative; /* Change la position à relative */
    z-index: 1;
    text-align: center; /* Centre le texte à l'intérieur */
    margin-top: 10px; /* Ajuste la marge au besoin */
}

.bottom-blue-square::after {
    content: "";
    background: url('https://api.iconify.design/wpf/coins.svg?color=gold') no-repeat center center / contain;
    position: absolute;
    bottom: -15px; 
    left: 50%;
    transform: translateX(-50%);
    width: 50px;
    height: 50px;
    z-index: 0;
}

.rectangleReussite {
    width: 150px;
    height: 80px;
    background-color: #006ED3;
    color: white;
    text-align: center;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    font-size: 20px;
    border-radius: 10px;
    position: relative;
    overflow: hidden;
}

.text-reu {
    font-weight: bold; 
}

.rectangleReussite::before,
.rectangleReussite::after {
    content: "";
    position: absolute;
    width: 100%;
    height: 100%;
    top: 0;
    background: linear-gradient(45deg, transparent 33.33%, rgba(255, 255, 255, 0.4) 33.33%, rgba(255, 255, 255, 0.4) 66.66%, transparent 66.66%);
}

.rectangleReussite::before {
    left: -50%;
    transform: skewX(-30deg);
}

.rectangleReussite::after {
    right: -50%;
    transform: skewX(30deg);
}

.custom-font {
  font-family: 'Julius Sans One', sans-serif;
}

.profile-container {
  display: flex;
  justify-content: flex-end; /* Alignez les éléments à droite */
  align-items: center; /* Centre les éléments verticalement */
  flex-wrap: wrap; /* Permet aux éléments de passer à la ligne sur les petits écrans */
}

.image_circulaire {
  width: 5vw;
  height: 5vw;
  border-radius: 50%;
  overflow: hidden;
  margin-right: 20px; /* Ajoute un espace à droite de l'image de profil */
}

.image_circulaire img {
  width: 5vw;
  height: 5vw;
  object-fit: cover;
}

.pseudo {
  font-family: 'Poppins', sans-serif;
  font-weight: bold;
    font-size: 25px;
    text-align: left;
    margin-left: 20;
  font-size: 17px;
  margin-right: 20px; /* Ajoute un espace à droite du pseudo */

}

.icon {
display: block; 
width: 100%; 
text-align: right; 
font-family: 'Poppins', sans-serif;
font-size: 25px;
font-weight: bold;
text-align: left;
margin-left: 20;
}


.icon svg {
  fill: gray;
  width: 40px;
  height: 40px;
  margin-top: 10px; /* Espace entre l'image de profil et l'icône */
  margin-right: 45px; /* Décaler légèrement l'icône vers la gauche */
}


/* Styles for the modal */
.modal {
  display: none;
  position: fixed;
  z-index: 1;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  overflow: auto;
  background-color: rgba(0,0,0,0.4);
}

.modal p {
  font-family: 'Pridi', sans-serif;
  color: #4E4848;
}

.haut-pop-M {
  background-color: #223B34;
  padding: 20px;
  border-top-left-radius: 15px;
  border-top-right-radius: 15px;
  margin: 0 auto;
  max-width: 50%;
  margin-top : 100px;
}

.modal-content {
  background-color: #fefefe;
  padding: 20px;
  border: 1px solid #888;
  width: 50%;
  height: 60vh;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
  margin: 0 auto;
}

.messagerie {
  width: 80%; 
}


.close {
  color: #aaa;
  float: right;
  font-size: 28px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: black;
  text-decoration: none;
  cursor: pointer;
}

.bas-droite-popM {
 s position: relative;
}

#contenu {
  width: 40%; 
  height: 80%; 
  box-sizing: border-box; 
}

.messagesPopupModal {
    display: none;
    position: absolute; /* Utilisez position absolute */
    right: 0;
    top: 60%; /* Position verticale souhaitée */
    transform: translateY(-50%);
    width: 400px; /* Largeur de la popup */
    height: auto;
    z-index: 2;
    border-radius: 10px 0 0 10px;
}


/* Styles pour le contenu du pop-up des messages reçus */
.messagesContent {
    background-color: rgba(242, 242, 242, 0.8); /* Fond légèrement transparent */
    padding: 20px; /* Espacement intérieur */
    border-radius: 10px; /* Coins arrondis */
    max-height: 500px; /* Hauteur maximale de la boîte des messages */
    overflow-y: auto; /* Ajoute une barre de défilement vertical si nécessaire */
}

.messagesContent h2 {
    margin-top: 0; /* Supprimer la marge supérieure du titre h2 */
}

.messagesContent ul {
    list-style-type: none; /* Supprimer les puces de la liste */
    padding: 0; /* Supprimer le padding de la liste */
}

.messagesContent li {
    margin-bottom: 10px; /* Espacement entre les messages */
    padding: 10px; /* Espacement intérieur du message */
    border-radius: 10px; /* Coins arrondis pour le message */
    background-color: #fff; /* Couleur de fond du message */
    border: 1px solid #ccc; /* Bordure autour du message */
}

.messagesContent li:last-child {
    margin-bottom: 0; /* Supprimer l'espacement en bas du dernier message */
}

.messagesContent strong {
    color: #007BFF; /* Couleur du nom de l'expéditeur */
    display: block; /* Afficher le nom de l'expéditeur sur une nouvelle ligne */
    margin-bottom: 5px; /* Espacement entre le nom et le contenu */
}

/* Ligne de séparation entre les messages */
.messagesContent li + li {
    border-top: 1px solid #ccc;
}

.tournoi-modal {
    display: none; /* Caché par défaut */
    position: fixed; /* Positionnement fixe */
    top: 0;
    left: 0;
    right: 0; /* Ajouté pour centrer horizontalement */
    bottom: 0; /* Ajouté pour centrer verticalement */
    width: 100%; /* Largeur complète */
    height: 100%; /* Hauteur complète */
    background: rgba(0, 0, 0, 0.6); /* Fond semi-transparent noir */
    z-index: 100; /* S'assure qu'il est au-dessus des autres éléments */
    align-items: center; /* Centre verticalement (pourrait ne pas être nécessaire sans flex) */
    justify-content: center; /* Centre horizontalement (pourrait ne pas être nécessaire sans flex) */
    text-align: center; /* Centrer le texte pour le contenu */
  
}

.tournoi-modal-content {
    background-color: #fff; /* Fond blanc pour le contenu */
    padding: 30px;
    border-radius: 10px; /* Coins arrondis */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); /* Ombre pour un effet de profondeur */
    width: 60%; /* Largeur du modal */
    max-width: 700px; /* Largeur maximale pour éviter qu'il soit trop large */
    margin: auto; /* Centrage horizontal */
    position: relative; /* Positionnement relatif */
    top: 50%; /* Déplacer de 50% de la hauteur du parent */
    transform: translateY(-50%); /* Déplacer vers le haut de la moitié de sa propre hauteur pour centrer */
    display: inline-block; /* Pour permettre le centrage horizontal avec text-align */
}


.tournoi-modal-content button{
background-color: #4CAF50; /* Vert */
color: white;
padding: 10px 20px;
border: none;
border-radius: 5px; /* Coins arrondis */
cursor: pointer;
font-size: 18px; /* Taille du texte */
}
 
.tournoi-modal-content button:hover {
background-color: #45a049; /* Vert foncé */
}

.tournoi-modal-content-rejoindreTournoi {
    max-height: 500px;
    overflow-y: auto;
    padding: 20px;
    background-color: #f8f8f8;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #fff; /* Fond blanc pour le contenu */
    padding: 30px;
    border-radius: 10px; /* Coins arrondis */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); /* Ombre pour un effet de profondeur */
    width: 60%; /* Largeur du modal */
    max-width: 700px; /* Largeur maximale pour éviter qu'il soit trop large */
    margin: auto; /* Centrage horizontal */
    position: relative; /* Positionnement relatif */
    top: 50%; /* Déplacer de 50% de la hauteur du parent */
    transform: translateY(-50%); /* Déplacer vers le haut de la moitié de sa propre hauteur pour centrer */
    display: inline-block; /* Pour permettre le centrage horizontal avec text-align */
}


/* Style pour le bouton de fermeture */
.tournoi-close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 30px;
    color: #333;
    cursor: pointer;
}

.tournoi-close:hover {
    color: #666;
}

/* Styles pour les champs du formulaire */
input[type=text], input[type=date], input[type=number], textarea {
    width: 80%; /* Largeur des champs */
    padding: 10px;
    margin: 10px 0; /* Espacement */
    border: 1px solid #ddd; /* Bordure subtile */
    border-radius: 5px; /* Coins arrondis */
}


/* Styles pour les étiquettes (labels) */
label {
    display: block; /* Chaque label sur une nouvelle ligne */
    margin-bottom: 5px; /* Espacement en dessous du label */
    font-weight: bold; /* Texte en gras */
}

.tournoi-close {
    float: right;
    cursor: pointer;
    font-size: 1.4em;
    color: #666;
}

.tournoi-list-container {
    overflow-y: auto;
    max-height: 400px;
    flex: 1;
    margin-bottom: 20px; /* Ajoutez une marge en bas de la liste */
}

.tournoi-item {
    display: block;
    padding: 10px;
    margin: 5px 0;
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.tournoi-item:hover {
    background-color: #e9e9e9;
}


.tournoi-item label {
    display: block;
    padding: 10px;
    margin: 5px 0;
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.tournoi-item label:hover {
    background-color: #e9e9e9;
}

.tournoi-item input[type="radio"] {
    margin-right: 10px;
}

.tournoi-item input[type="radio"]:checked + .tournoi-nom {
    color: #FF7F50; /* Coral */
}


.join-tournoi-btn {
    background-color: #4CAF50; /* Vert */
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 18px;
    position: fixed; /* Fixe la position du bouton */
    bottom: 0; /* Place le bouton en bas de la page */
    left: 0; /* Place le bouton à gauche de la page */
    width: 100%; /* Occupe toute la largeur de la page */
    z-index: 999; /* Assurez-vous qu'il est au-dessus de tous les autres éléments */
    transition: background-color 0.3s ease;
    
}

.join-tournoi-btn:hover {
    background-color: #45a049; /* Vert plus foncé */
}

/* Style pour le bouton Quitter le Tournoi */
.quit-tournament-btn {
    background-color: #d9534f; /* Rouge */
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 18px;
    position: fixed; /* Fixe la position du bouton */
    bottom: 0; /* Place le bouton en bas de la page */
    right: 0; /* Place le bouton à droite de la page */
    width: 100%; /* Occupe toute la largeur de la page */
    z-index: 999; /* Assurez-vous qu'il est au-dessus de tous les autres éléments */
    transition: background-color 0.3s ease;
}

.quit-tournament-btn:hover {
    background-color: #c9302c; /* Rouge plus foncé */
}

.tournoi-actuel {
    background-color: #ff0000; /* Fond rouge */
    color: #ffffff; /* Texte blanc pour contraster */
    border: 2px solid #ff0000; /* Bordure rouge */
    box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Légère ombre rouge */
    transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease; /* Animation de transition */
}

/* Style pour les autres tournois */
.tournoi-item {
    background-color: #f2f2f2; /* Fond gris clair pour les autres tournois */
    color: #333333; /* Texte noir */
    border: 1px solid #ddd; /* Bordure subtile grise */
    transition: background-color 0.3s ease; /* Animation de transition */
}

/* Lorsque le curseur survole un tournoi actuel */
.tournoi-actuel:hover {
    background-color: #ff3333; /* Fond rouge légèrement plus foncé */
    border-color: #ff3333; /* Bordure rouge légèrement plus foncée */
    box-shadow: 0 0 10px rgba(255, 0, 0, 0.8); /* Ombre rouge plus prononcée */
}

/* Styles pour la pop-up d'envoi d'argent */
.modal-envoi-argent {
    display: none; /* Caché par défaut */
    position: fixed; /* Positionnement fixe */
    top: 0;
    left: 0;
    width: 100%; /* Largeur complète */
    height: 100%; /* Hauteur complète */
    background: rgba(0, 0, 0, 0.6); /* Fond semi-transparent noir */
    z-index: 100; /* S'assure qu'il est au-dessus des autres éléments */
    align-items: center; /* Centre verticalement (pourrait ne pas être nécessaire sans flex) */
    justify-content: center; /* Centre horizontalement (pourrait ne pas être nécessaire sans flex) */
    text-align: center; /* Centrer le texte pour le contenu */
}

/* Styles pour le contenu de la pop-up d'envoi d'argent */
.modal-envoi-argent-contenu {
    background-color: #fff; /* Fond blanc pour le contenu */
    padding: 30px;
    border-radius: 10px; /* Coins arrondis */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); /* Ombre pour un effet de profondeur */
    width: 60%; /* Largeur du modal */
    max-width: 700px; /* Largeur maximale pour éviter qu'il soit trop large */
    margin: auto; /* Centrage horizontal */
    position: relative; /* Positionnement relatif */
    top: 50%; /* Déplacer de 50% de la hauteur du parent */
    transform: translateY(-50%); /* Déplacer vers le haut de la moitié de sa propre hauteur pour centrer */
    display: inline-block; /* Pour permettre le centrage horizontal avec text-align */
}

/* Style pour le bouton de fermeture */
.fermer-modal-envoi-argent {
    position: absolute;
    top: 10px;
    right: 10px;
    font-size: 24px;
    color: #333;
    cursor: pointer;
    transition: color 0.3s ease;
}

.fermer-modal-envoi-argent:hover {
    color: #666;
}

/* Styles pour les champs du formulaire */
.modal-envoi-argent-contenu input[type="number"] {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
}

/* Style pour le bouton d'envoi */
.modal-envoi-argent-contenu button[type="submit"] {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
    font-size: 18px;
    transition: background-color 0.3s ease;
}

.modal-envoi-argent-contenu button[type="submit"]:hover {
    background-color: #45a049;
}

/* Styles pour les titres */
.modal-envoi-argent-contenu h2 {
    font-size: 24px;
    margin-bottom: 20px;
}

/* Style pour la sélection du destinataire (prénom) */
#selectionDestinataire {
    width: 100%;
    padding: 10px;
    margin: 10px 0;
    border: 1px solid #ccc;
    border-radius: 5px;
    appearance: none; /* Masque la flèche de sélection par défaut */
    background-color: #fff; /* Couleur de fond */
    background-image: url('icone_fleche.png'); /* Ajoutez une icône de flèche personnalisée si nécessaire */
    background-position: right center;
    background-repeat: no-repeat;
    cursor: pointer;
}

/* Style pour le texte sélectionné dans la liste déroulante */
#selectionDestinataire option {
    padding: 10px;
    background-color: #fff;
    color: #333;
}

/* Style pour le texte sélectionné dans la liste déroulante au survol */
#selectionDestinataire option:hover {
    background-color: #45a049; /* Couleur de survol */
    color: #fff; /* Couleur du texte au survol */
}

.mission-modal {
    display: none; /* Caché par défaut */
    position: fixed; /* Positionnement fixe */
    top: 0;
    left: 0;
    width: 100%; /* Largeur complète */
    height: 100%; /* Hauteur complète */
    background: rgba(0, 0, 0, 0.6); /* Fond semi-transparent noir */
    z-index: 100; /* S'assure qu'il est au-dessus des autres éléments */
    align-items: center; /* Centre verticalement (pourrait ne pas être nécessaire sans flex) */
    justify-content: center; /* Centre horizontalement (pourrait ne pas être nécessaire sans flex) */
    text-align: center; /* Centrer le texte pour le contenu */
  
}


.mission-modal-content-rejoindreMission {
    max-height: 500px;
    overflow-y: auto;
    padding: 20px;
    background-color: #f8f8f8;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0,0,0,0.1);
    font-family: 'Arial', sans-serif;
    color: #333;
    background-color: #fff; /* Fond blanc pour le contenu */
    padding: 30px;
    border-radius: 10px; /* Coins arrondis */
    box-shadow: 0 10px 25px rgba(0, 0, 0, 0.5); /* Ombre pour un effet de profondeur */
    width: 60%; /* Largeur du modal */
    max-width: 700px; /* Largeur maximale pour éviter qu'il soit trop large */
    margin: auto; /* Centrage horizontal */
    position: relative; /* Positionnement relatif */
    top: 50%; /* Déplacer de 50% de la hauteur du parent */
    transform: translateY(-50%); /* Déplacer vers le haut de la moitié de sa propre hauteur pour centrer */
    display: inline-block; /* Pour permettre le centrage horizontal avec text-align */
}

.mission-close {
    position: absolute;
    top: 10px;
    right: 15px;
    font-size: 30px;
    color: #333;
    cursor: pointer;
}

.mission-close:hover {
    color: #666;
}

input[type=text], input[type=date], input[type=number], textarea {
    width: 80%; /* Largeur des champs */
    padding: 10px;
    margin: 10px 0; /* Espacement */
    border: 1px solid #ddd; /* Bordure subtile */
    border-radius: 5px; /* Coins arrondis */
}

label {
    display: block; /* Chaque label sur une nouvelle ligne */
    margin-bottom: 5px; /* Espacement en dessous du label */
    font-weight: bold; /* Texte en gras */
}

#classementImage {
    width: 40px; /* Ajustez la largeur selon vos besoins */
    height: auto; /* Conservez le ratio hauteur/largeur */
    margin-left: 5px; /* Espace à gauche de l'image */
    vertical-align: middle; /* Alignement vertical au milieu */
    cursor: pointer; /* Curseur indiquant que l'image est cliquable */
    opacity: 0.8; /* Opacité par défaut */
    transition: opacity 0.3s ease; /* Transition pour l'opacité */
}

#classementImage:hover {
    opacity: 1; /* Opacité au survol */
}


 /* Style du conteneur global */
.classement-global-container {
    display: none; /* Masquer le classement par défaut */
    position: fixed; /* Positionnement fixe */
    top: 0;
    left: 0;
    right: 0; /* Ajouté pour centrer horizontalement */
    bottom: 0; /* Ajouté pour centrer verticalement */
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.7); /* Fond semi-transparent */
    z-index: 999; /* Position au-dessus du reste du contenu */
}

/* Style du contenu du classement */
.classement-global-content {
    background-color: #fff;
    margin: 15% auto; /* Centrer verticalement et horizontalement */
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
    width: 70%; /* Largeur réduite */
    max-width: 750px; /* Largeur maximale */
    max-height: 500px; /* Hauteur maximale */
    overflow-y: auto; /* Ajouter une barre de défilement vertical si nécessaire */
}


/* Style du bouton de fermeture */
.classement-global-close {
    float: right;
    cursor: pointer;
    font-size: 1.4em;
    color: #666;
}

.mission-list-container {
    overflow-y: auto;
    max-height: 400px;
    flex: 1;
    margin-bottom: 20px; /* Ajoutez une marge en bas de la liste */
}

.mission-item {
    display: block;
    padding: 10px;
    margin: 5px 0;
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.mission-item:hover {
    background-color: #e9e9e9;
}


.mission-item label {
    display: block;
    padding: 10px;
    margin: 5px 0;
    background-color: #f2f2f2;
    border: 1px solid #ddd;
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.mission-item label:hover {
    background-color: #e9e9e9;
}

.mission-item input[type="radio"] {
    margin-right: 10px;
}

.mission-item input[type="radio"]:checked + .mission-nom {
    color: #FF7F50;
}

.take-mission-btn {
    background-color: #4CAF50; /* Vert */
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 18px;
    position: fixed; /* Fixe la position du bouton */
    bottom: 0; /* Place le bouton en bas de la page */
    left: 0; /* Place le bouton à gauche de la page */
    width: 100%; /* Occupe toute la largeur de la page */
    z-index: 999; /* Assurez-vous qu'il est au-dessus de tous les autres éléments */
    transition: background-color 0.3s ease;
    
}

.take-mission-btn:hover {
    background-color: #45a049;
}

.quit-mission-btn {
    background-color: #d9534f; /* Rouge */
    color: white;
    padding: 10px 20px;
    border: none;
    cursor: pointer;
    font-size: 18px;
    position: fixed; /* Fixe la position du bouton */
    bottom: 0; /* Place le bouton en bas de la page */
    right: 0; /* Place le bouton à droite de la page */
    width: 100%; /* Occupe toute la largeur de la page */
    z-index: 999; /* Assurez-vous qu'il est au-dessus de tous les autres éléments */
    transition: background-color 0.3s ease;
}

.quit-mission-btn:hover {
    background-color: #c9302c; /* Rouge plus foncé */
}

.mission-actuel {
    background-color: #ff0000; /* Fond rouge */
    color: #ffffff; /* Texte blanc pour contraster */
    border: 2px solid #ff0000; /* Bordure rouge */
    box-shadow: 0 0 10px rgba(255, 0, 0, 0.5); /* Légère ombre rouge */
    transition: background-color 0.3s ease, border-color 0.3s ease, box-shadow 0.3s ease; /* Animation de transition */
}

.mission-item {
    background-color: #f2f2f2; /* Fond gris clair pour les autres tournois */
    color: #333333; /* Texte noir */
    border: 1px solid #ddd; /* Bordure subtile grise */
    transition: background-color 0.3s ease; /* Animation de transition */
}

.mission-actuel:hover {
    background-color: #ff3333; /* Fond rouge légèrement plus foncé */
    border-color: #ff3333; /* Bordure rouge légèrement plus foncée */
    box-shadow: 0 0 10px rgba(255, 0, 0, 0.8); /* Ombre rouge plus prononcée */
}
    

/* Style de l'en-tête */
.classement-global-content h2 {
    text-align: center;
    font-size: 24px;
    margin-bottom: 20px;
}

/* Style du tableau */
#classementGlobalTable {
    width: 100%;
    border-collapse: collapse;
}

/* Style des en-têtes de colonne */
#classementGlobalTable th {
    background-color: #f2f2f2;
    text-align: left;
    padding: 8px;
}

/* Style des lignes impaires */
#classementGlobalTable tr:nth-child(odd) {
    background-color: #f5f5f5;
}

/* Style des lignes paires */
#classementGlobalTable tr:nth-child(even) {
    background-color: #e5e5e5;
}

/* Style des cellules */
#classementGlobalTable td {
    padding: 8px;
}
.content-3element {
  display: flex;
  align-items: center;
}

@media screen and (max-width: 768px){
  .blue-squares-container {
    flex-wrap: wrap;
    justify-content: space-between;
  }
 .content-3element {
    flex-direction: column;
    align-items: flex-start;
  }
  .blue-square {
    margin-right: 0;
    margin-bottom: 20px;
  }

  .rectangleReussite,
  .text-score {
    margin-top: 10px;
  }
  .photo_profil {
    margin-right: 10px; 
  }

  .image_circulaire {
    width: 10vw; 
    height: 10vw;
  } 

  .pseudo {
    font-size: 15px; 
  }
  .photo_profil {
    margin-top: 0; 
  }

  .pseudo {
    font-size: 15px;
  }

  .icon {
    position: static;
    width: auto;
    height: auto;
    margin-left: auto;
    margin-right: auto; 
    margin-top: 10px; 
  }

  .text-score {
    right: auto;
    top: auto;
    align-items: center;
    text-align: center;
    margin-top: 20px;
  }
  .communaute {
    font-size:10px;
  }

  .text-tournoi {
    margin-top: 20px;
  }

}
@media screen and (max-height: 600px) {
    .blue-square {
    margin-right: 0;
    margin-top: 300px;
  }
  .rectangleReussite,
  .text-score {
    margin-top: 300px;
  }

  .communaute {
    font-size:10px;
  }

  .button-groups {
    flex-direction: row; 
    align-items: center;
  }

  .left-buttons,
  .right-buttons {
    flex: none; 
    width: 50%; 
  }

  .bottom-left {
    margin-top: 10px; 
    width: 5100%; 
  }
  .image_circulaire {
    width: 40px;
    height: 40px; 
  }

  .pseudo {
    font-size: 12px;
  }

  .icon {
    margin-top: 5px;
  }
  .image_circulaire img {
    width: 30px; 
    height: 30px; 
  }
}

</style>

    <script>
document.addEventListener('DOMContentLoaded', function() {
    <?php if (isset($_SESSION['popup_message'])): ?>
        var listeTournoisDiv = document.getElementById('listeTournois');
        listeTournoisDiv.innerHTML = `<div class="message-alerte">${"<?php echo $_SESSION['popup_message']; ?>"}</div>`;

        <?php unset($_SESSION['popup_message']); ?>
        <?php unset($_SESSION['popup_type']); ?>
    <?php endif; ?>
});
</script>

<!DOCTYPE html>
<?php require_once "modules/mod_profil/modele_profil.php";?>
<html>
<body>  

<div class="profile-container">

    <div class="content-3element">
    <div class="pseudo">
      <p><span class="pseudo-font"><?php echo ModeleProfil::pseudo(); ?></span></p>
    </div>

    <div class="photo_profil">
    <?php
        $cheminImage = ModeleProfil::photoDeProfil();
        if (is_string($cheminImage) && !empty($cheminImage)) {
            echo '<div class="image_circulaire"><img src="' . $cheminImage . '" alt="Photo de profil"></div>';
        } else {
            echo 'Pas de photo de profil';
        }
        ?>
    </div>

    <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 12 12">
                    <path fill="gray" d="M2 5.248V7.5A1.5 1.5 0 0 0 3.5 9h5A1.5 1.5 0 0 0 10 7.5V5.248L6.205 6.956a.5.5 0 0 1-.41 0zm.037-1.08L6 5.952l3.963-1.784A1.5 1.5 0 0 0 8.5 3h-5a1.5 1.5 0 0 0-1.463 1.168"/>
                </svg>
    </div>
</div>
    </div>

    <div class="blue-squares-container">
        <div class="blue-square">
            <div class="vertical-rectangle"></div>
            <div class="text-above">Partie Gagnée</div>
            <?php
            echo ModeleProfil::NbPartieGagnee(); ?>
        </div>

        <div class="blue-square">
            <div class="vertical-rectangle"></div>
            <div class="text-above">Partie Jouées</div>
            <?php
            echo ModeleProfil::NbPartieJouee(); ?>
        </div>

        <div class="blue-square">
            <div class="vertical-rectangle"></div>
            <div class="text-above">Partie Perdues</div>
            <?php
            echo ModeleProfil::NbPartiePerdu(); ?>
        </div>

        <div class="blue-square bottom-blue-square">
        <div class="vertical-rectangle"></div>
            <div class="text-above">Argent</div>
            <?php
            echo ModeleProfil::NbArgent(); ?>
        </div>

        <div class="rectangleReussite">
          <div class="text-reu">Réussite</div>
          <?php
            echo ModeleProfil::reussite();?>%
        </div>

      <div class="text-score">
     <p class="score-info">Classement : 
        <span class="custom-font clickable" id="openClassementPopup">
            <?php echo ModeleProfil::getPositionClassement() . "/" . ModeleProfil::getTotalJoueurs(); ?>
       
        <img src="././Images/classement.png" id="classementImage" alt="Classement Image" class="clickable"> 
    </span>
    </p>  
      <p class="score-info">Score : <span class="custom-font"><?php echo ModeleProfil::calculerScore(); ?></span></p> </div>

    </div>
    </div>

        <!-- Pop-up pour le classement -->
<div id="classementGlobalPopup" class="classement-global-container">
    <div class="classement-global-content">
        <span class="classement-global-close" id="closeClassementGlobalPopup">&times;</span>
        <h2>Classement mondial des joueurs</h2>
        <table id="classementGlobalTable">
            <tr>
                <th>Rang</th>
                <th>Nom du Joueur</th>
                <th>Score Global</th>
            </tr>
            <?php
            // Obtenir les scores de tous les joueurs
            $classementScores = ModeleProfil::getAllPlayersScores();

            // Trier les scores en ordre décroissant
            arsort($classementScores);

            // Initialiser un rang
            $rang = 1;

            // Parcourir le classement et afficher les données pour chaque joueur
            foreach ($classementScores as $idJoueur => $score) {
                $nom = ModeleProfil::getNomJoueur($idJoueur); // Utilisez la fonction pour obtenir le nom du joueur

                // Afficher les données du joueur avec le rang
                echo "<tr><td>$rang</td><td>$nom</td><td>$score</td></tr>";

                // Augmenter le rang pour le joueur suivant
                $rang++;
            }
            ?>
        </table>
    </div>
</div>


    <p class="communaute">COMMUNAUTÉ :</p>

    <div class="container">
      <div class="button-groups">
        <div class="left-buttons">
          
        <button class="custom-button" id="openModal" >Envoyer un message</button>


    <div class="modal" id="myModal">
    <form action="index.php?module=profil&action=EnvoyerMessage" method="post">
        <input type="hidden" name="token" value="<?= $token ?>">
        <div class="haut-pop-M">
            <span class="close" id="closeModal">&times;</span>
            <p>Envoyer un message à :</p>
            <input class="form-group" type="text" value="" name = "destinataire_message" id="search-user" placeholder="Rechercher un utilisateur">
        </div>


        <div class="modal-content">
        
        Résultat de la recherche : <br>
        
          <div id="result-search"></div>
        
            <p>Contenu :</p>
            <textarea name="contenu" id="contenu">Bonjour, ....</textarea>
        </div>
        <div class="bas-droite-popM">
            <button type="submit" id="envoyerMessageBtn" class="bouton-envoyer">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24">
                    <defs>
                        <path id="letsIconsSendDuotone0" fill="currentColor" d="m7.692 11.897l1.41.47c.932.31 1.397.466 1.731.8c.334.334.49.8.8 1.73l.47 1.41c.784 2.354 1.176 3.53 1.897 3.53c.72 0 1.113-1.176 1.897-3.53l2.838-8.512c.552-1.656.828-2.484.391-2.921c-.437-.437-1.265-.161-2.92.39l-8.515 2.84C5.34 8.887 4.162 9.279 4.162 10c0 .72 1.177 1.113 3.53 1.897"/>
                    </defs>
                    <use href="#letsIconsSendDuotone0" fill-opacity=".25"/>
                    <use href="#letsIconsSendDuotone0" fill-opacity=".25"/>
                    <path fill="currentColor" d="m9.526 13.842l-2.062-.687a1 1 0 0 0-.87.116l-1.09.726a.8.8 0 0 0 .25 1.442l1.955.488a.5.5 0 0 1 .364.364l.488 1.955a.8.8 0 0 0 1.442.25l.726-1.09a1 1 0 0 0 .116-.87l-.687-2.062a1 1 0 0 0-.632-.632"/>
                </svg>
            </button>
        </div>
    </form>
    </div>

        
        <button class="custom-button" id="openMoneyModal">Envoyer de l'argent</button>
        </div>
        <div class="right-buttons">
        <button class="custom-button" id="openTournoi">Créer un tournoi</button>
        <button class="custom-button" id="joinTournamentButton">Rejoindre un tournoi</button>
        </div>
      </div>
      <div class="bottom-left">
         <button class="custom-button" id="takeMissionButton">Prendre une mission</button>
      </div>

<!-- Pop-up pour prendre une mission -->
<?php
$missions = ModeleProfil::getMissions();
?>
<?php
$estDejaEnMission = ModeleProfil::estDejaEnMission($_SESSION['user_id']);
?>

<form action="index.php?module=profil&action=exec" method="post">
    <div class="mission-modal" id="takeMissionModal">
        <div class="mission-modal-content-rejoindreMission">
            <span class="mission-close" id="closeTakeMissionModal">&times;</span>
            <h1>Prendre une mission</h1>
            <div class="mission-list-container">
                <div id="listeMissions">
                </div>
            </div>
            <!-- Boutons intégrés dans la pop-up -->
            <?php if ($estDejaEnMission): ?>
                <button type="submit" name="submitQuitterMission" id="quit-mission-btn" class="quit-mission-btn">Abandonner la mission actuelle</button>
            <?php else: ?>
                <button type="submit" name="submitPrendreMission" id="take-mission-btn" class="take-mission-btn">Prendre la mission</button>
            <?php endif; ?>
        </div>
    </div>
</form>

      <div class="text-tournoi">
        <p class="tournament-info">A participé à</p>
        <p><span class="custom-font"><?php echo ModeleProfil::participeTournoi(); ?></span></p>
        <p class="tournament-info">tournois</p>
        <p class="tournament-info">A créé</p>
        <p><span class="custom-font"><?php echo ModeleProfil::creerTournoi(); ?></span></p>
        <p class="tournament-info">tournois</p>

        </div>
    

</body>
</html>
<!-- Pop-up pour les messages reçus -->
<div id="messagesPopup" class="messagesPopupModal">
<div class="modal-content messagerie messagesContent">
    <span class="close">&times;</span>
    <h2>Messages reçus</h2>
    <ul>
      <?php
      // Récupérez les contenus des messages
      $messages = ModeleProfil::getReceivedMessagesWithSenderName();
      
      foreach ($messages as $message) {
          echo '<li><strong>' . htmlspecialchars($message['nomExpediteur']) . ':</strong> ' .
               htmlspecialchars($message['contenuMessage']) . '</li>';
      }
      ?>
    </ul>
  </div>
</div>

<!-- Pop-up pour la création tournoi  -->
<div class="tournoi-modal" id="tournamentModal">
    <div class="tournoi-modal-content">
        <span class="tournoi-close" id="closeTournoiModal">&times;</span>
        <h1>Créer un tournoi</h1>
        <form action="index.php?module=profil&action=exec" method="post">
            <input type="hidden" name="token" value="<?= $token ?>">
            <input type="text" name="nom" placeholder="Nom du tournoi" required>
            <textarea name="regle" placeholder="Règles du tournoi" required></textarea>
            <input type="date" name="dateDebut" placeholder="Date de début" required>
            <input type="date" name="dateFin" placeholder="Date de fin" required>
            <input type="number" name="capacite" placeholder="Capacité" required>
            <input type="number" name="recompense" placeholder="Récompense" required>
            <button type="submit" name="submitTournoi">Créer le tournoi</button>
        </form>
    </div>
</div>

<!-- La pop-up pour envoyer de l'argent -->
<div class="modal-envoi-argent" id="modalEnvoiArgent">
    <div class="modal-envoi-argent-contenu">
        <span class="fermer-modal-envoi-argent" id="fermerModalEnvoiArgent">&times;</span>
        <h2>Envoyer de l'argent</h2>
        <form action="index.php?module=profil&action=exec" method="post">
        <input type="hidden" name="token" value="<?= $token ?>">
            <label for="selectionDestinataire">Destinataire:</label>
            <select id="selectionDestinataire" name="recipient" required>
                <option value="" disabled selected>Veuillez sélectionner le destinataire</option>
                <?php
                foreach(ModeleProfil::getAllUsernames() as $user) {
                    echo "<option value='{$user['idJoueur']}'>{$user['Nom']}</option>";
                }
                ?>
            </select>
            <label for="montant">Montant:</label>
            <input type="number" id="montant" name="amount" placeholder="Entrez le montant à envoyer" required>
            <button type="submit" name="submitEnvoiArgent">Envoyer</button></form>
    </div>
</div>




<!-- Pop-up pour rejoindre un tournoi -->
<?php
$tournois = ModeleProfil::getTournois();
?>

<?php
$estDejaInscrit = ModeleProfil::estDejaInscrit($_SESSION['user_id']);
?>

<form action="index.php?module=profil&action=exec" method="post">
    <div class="tournoi-modal" id="joinTournamentModal">
        <div class="tournoi-modal-content-rejoindreTournoi">
            <span class="tournoi-close" id="closeJoinTournoiModal">&times;</span>
            <h1>Rejoindre un tournoi</h1>
            <div class="tournoi-list-container">
                <div id="listeTournois">              
                </div>
               
        </div>
        <?php if ($estDejaInscrit): ?>
                  <button type="submit" name="submitQuitTournoi" id="join-tournament-btn" class="quit-tournament-btn">Quitter le Tournoi Actuelle</button>
                <?php else: ?>
                    <button type="submit" name="submitJoinTournoi" id="join-tournament-btn" class="join-tournoi-btn">Rejoindre le Tournoi</button>
                <?php endif; ?>
    </div>
</form>




<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="modules/mod_profil/view/script.js"></script>
<script src="modules/mod_profil/view/boiteMessage.js"></script>
<script src="modules/mod_profil/view/script.js"></script>
<script src="modules/mod_profil/view/créerTournoi.js"></script>
<script src="modules/mod_profil/view/rejoindreTournoi.js"></script>
<script src="modules/mod_profil/view/envoieArgent.js"></script>
<script src="modules/mod_profil/view/mission.js"></script>
<script src="modules/mod_profil/view/classement.js"></script>
<script src="modules/mod_profil/view/recherche.js"></script>
  


</body>
</html>
