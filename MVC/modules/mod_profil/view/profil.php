<style>
  /* Styles CSS */
  @import url('https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@400&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;700&display=swap');

  main{
    align-items:stretch;
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
  margin-top: auto; /* Le maintien vers le bas de la page */
  text-align: center;
  font-size: 25px;
  color: #000000;
  font-family: 'Julius Sans One', sans-serif;
}


.score-info {
  color: #000000;
  font-family: 'Julius Sans One', sans-serif;
}

p {
    font-family: 'Inknut Antiqua', sans-serif;
    font-weight: bold;
    font-size: 25px;
    text-align: left;
    margin-left: 20;
  }

.blue-squares-container {
  margin-left: 20px;
  margin-top: 20px;
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
  justify-content: flex-end; 
  align-items: center;
}

.photo_profil {
  margin-right: 20px; /* Espacement entre la photo et le pseudo */
}

.image_circulaire {
  width: 100px;
  height: 100px;
  border-radius: 50%;
  overflow: hidden;
}

.image_circulaire img {
  width: 100%;
  height: 100%;
  object-fit: cover;
}

.pseudo {
  font-family: 'Poppins', sans-serif;
  font-size: 17px;
}

.icon {
    display:flex;
    margin-right:20px;
    justify-content: flex-end;
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
  max-width: 80%;
}

.modal-content {
  background-color: #fefefe;
  padding: 20px;
  border: 1px solid #888;
  width: 80%;
  height: 60vh;
  border-bottom-left-radius: 15px;
  border-bottom-right-radius: 15px;
  margin: 0 auto;
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
  position: fixed; /* Position fixe sur la page */
  right: 0; /* Aligner à droite */
  top: 65%; /* Positionner verticalement au milieu */
  transform: translateY(-50%); /* Centrer verticalement */
  width: 300px; /* Largeur du pop-up */
  height: auto; /* Hauteur automatique */
  z-index: 2; /* Assurez-vous qu'il soit au-dessus des autres éléments */
  background-color: #fefefe; /* Couleur de fond */
  box-shadow: -5px 0px 15px rgba(0, 0, 0, 0.2); /* Ombre pour un effet de profondeur */
  border-radius: 10px 0 0 10px; /* Arrondir les coins à gauche */
}



</style>

<?php require_once realpath($_SERVER["DOCUMENT_ROOT"] . "/SAE_DevWeb/MVC/modules/mod_profil/mod_profil.php");
?>

<body>  

<div class="profile-container">
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
    </div>

    <div class="icon">
                <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 12 12">
                    <path fill="gray" d="M2 5.248V7.5A1.5 1.5 0 0 0 3.5 9h5A1.5 1.5 0 0 0 10 7.5V5.248L6.205 6.956a.5.5 0 0 1-.41 0zm.037-1.08L6 5.952l3.963-1.784A1.5 1.5 0 0 0 8.5 3h-5a1.5 1.5 0 0 0-1.463 1.168"/>
                </svg>
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
          <p class="score-info">Classement :</p><br></br>
          <p class="score-info">Score :</p>
      </div>

    </div>

    <p>COMMUNAUTÉ :</p>

    <div class="container">
      <div class="button-groups">
        <div class="left-buttons">
          
        <button class="custom-button" id="openModal">Envoyer un message</button>

        <div class="modal" id="myModal">
          <div class="haut-pop-M">
          <span class="close" id="closeModal">&times;</span>  
          <p>Envoyer un message à :</p>
          </div>
          <div class="modal-content">
              <p>Contenu :</p>
              <textarea id="contenu">Bonjour, ....</textarea>
          </div>
          <div class="bas-droite-popM">
          <button id="envoyerMessageBtn" class="bouton-envoyer">
          <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 24 24"><defs><path id="letsIconsSendDuotone0" fill="currentColor" d="m7.692 11.897l1.41.47c.932.31 1.397.466 1.731.8c.334.334.49.8.8 1.73l.47 1.41c.784 2.354 1.176 3.53 1.897 3.53c.72 0 1.113-1.176 1.897-3.53l2.838-8.512c.552-1.656.828-2.484.391-2.921c-.437-.437-1.265-.161-2.92.39l-8.515 2.84C5.34 8.887 4.162 9.279 4.162 10c0 .72 1.177 1.113 3.53 1.897"/></defs><use href="#letsIconsSendDuotone0" fill-opacity=".25"/><use href="#letsIconsSendDuotone0" fill-opacity=".25"/><path fill="currentColor" d="m9.526 13.842l-2.062-.687a1 1 0 0 0-.87.116l-1.09.726a.8.8 0 0 0 .25 1.442l1.955.488a.5.5 0 0 1 .364.364l.488 1.955a.8.8 0 0 0 1.442.25l.726-1.09a1 1 0 0 0 .116-.87l-.687-2.062a1 1 0 0 0-.632-.632"/></svg>
          </button>
          </div>
        </div>
        
        <button class="custom-button">Envoyer de l'argent</button>
        </div>
        <div class="right-buttons">
        <button class="custom-button">Créer un tournoi</button>
        <button class="custom-button">Rejoindre un tournoi</button>
        </div>
      </div>
      <div class="bottom-left">
        <button class="custom-button">Prendre une mission</button>
      </div>


      <div class="text-tournoi">
        <p class="tournament-info">A participé à</p>
        <p><span class="custom-font"><?php echo ModeleProfil::participeTournoi(); ?></span></p>
        <p class="tournament-info">tournois</p>
        <p class="tournament-info">A créé</p>
        <p><span class="custom-font"><?php echo ModeleProfil::creerTournoi(); ?></span></p>
        <p class="tournament-info">tournois</p>

        </div>
    </div>

<!-- Pop-up pour les messages reçus -->
<div id="messagesPopup" class="messagesPopupModal">
  <div class="modal-content">
    <span class="close">&times;</span>
    <h2>Messages reçus</h2>
    <!-- Contenu du pop-up ici -->
  </div>
</div>





    <script src="/SAE_DevWeb/MVC/modules/mod_profil/view/script.js"></script>

</body>
