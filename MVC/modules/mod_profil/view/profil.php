<style>
  /* Styles CSS */
  @import url('https://fonts.googleapis.com/css2?family=Julius+Sans+One&display=swap');
  @import url('https://fonts.googleapis.com/css2?family=Inknut+Antiqua:wght@400&display=swap');

  /* Styles des boutons */
  .custom-button {
    background-color: #6F6B47;
    color: black;
    padding: 10px 20px;
    border: none;
    border-radius: 10px;
    cursor: pointer;
    font-family: 'Julius Sans One', sans-serif;
    margin-bottom: 10px; /* Espacement entre les boutons */
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

.left-buttons {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-bottom: 20px; 
}


.right-buttons {
  display: flex;
  flex-direction: column;
  align-items: flex-start;
  margin-bottom: 20px; 
}

.bottom-left {
  align-self: flex-start;
}
p {
    font-family: 'Inknut Antiqua', sans-serif;
    font-weight: bold;
    font-size: 30px;
  }
.blue-square {
    position: relative;
    width: 100px;
    height: 150px;
    background-color: #ADD8E6;
    display: flex;
    justify-content: center;
    align-items: center;
    font-size: 30px;
    font-weight: bold;
    color: #006ED3;
    border-radius: 10px;
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
    color: #696969;
    font-family: 'Manrope', sans-serif;
}

</style>

<body>
    
    <div class="blue-square">
    <div class="vertical-rectangle"></div>
    <div class="text-above">Partie Gagnée</div>
    30&nbsp;
    </div>
    
    <p>COMMUNAUTÉ</p>

    <div class="container">
        <div class="left-buttons">
        <button class="custom-button">Envoyer un message</button>
        <button class="custom-button">Envoyer de l'argent</button>
        </div>
        <div class="right-buttons">
        <button class="custom-button">Créer un tournoi</button>
        <button class="custom-button">Rejoindre un tournoi</button>
        </div>

        <div class="bottom-left">
        <button class="custom-button">Prendre une mission</button>
        </div>
    </div>
</body>
