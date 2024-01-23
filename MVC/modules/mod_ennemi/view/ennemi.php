<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ennemis</title>
    <style>
      
body, html {
  height: 100%;
  margin: 0;
  padding: 0;
  
}

.header {
  position: relative; /* S'assure que le texte de l'en-tête est au-dessus du flou */
  color: #ffffff;
  text-align: left; /* Alignement du texte à gauche */
  padding: 20px; /* Ajustez selon vos besoins */
  font-size: 32px;
  font-weight: bold;
  text-shadow: 2px 2px 4px #000000;
}

.images-wrapper {
  position: relative;
  width: 100%;
  text-align: center;
}

.image-container {
  display: inline-block;
  position: relative;
  width: 30%; /* Utilisation d'une unité relative */
  margin: 2%; /* Utilisation d'une unité relative */
}

.image-container img {
  max-width: 50%; /* Fait en sorte que les images occupent 100% de la largeur du conteneur */
  max-height: 70%;
  transition: transform 0.5s, box-shadow 0.5s, opacity 0.5s;
  opacity: 0.6;
  
}
    
.image-container:hover img {
  transform: scale(1.1);
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
  opacity: 1; /* Opacité au survol */
}



@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
        
   
    .page-text {
        border-radius: 10px;
        text-align: center;
        margin-top: 20px;
        background-color: rgba(0, 0, 0, 0.7); /* Couleur de fond semi-transparente */
        color: #ffffff; /* Couleur du texte en blanc */
        padding: 10px; /* Espacement intérieur pour le texte */
    }

    .page-text h3 {
        font-size: 24px; /* Taille de police pour le titre */
    }

    .page-text p {
        font-size: 18px; /* Taille de police pour le texte */
    }

</style>
</head>
<body>

<div class="header">
    <div class="header-text">
        LES DIFFÉRENTS ENNEMIS
    </div>
</div>

<div class="images-wrapper">
        <div class="image-container"> 
        <a href = "modules/mod_ennemi/view/ennemi_avec_pouvoir.php">
          <img src="./Images/ennemiWithPower.png" alt="Powerful Enemies Image" >
        </a>
        </div>
        
        <div class="image-container">
        <a href = "modules/mod_ennemi/view/ennemi_base.php">
          <img src="./Images/ennemiWithout.png" alt="Regular Enemies Image">
        </a>
        </div>

</div>

<div class="page-text" style="text-align: center; margin-top: 20px;">
    <h3>Ennemis</h3>
    <p>Il y a plusieurs types d'ennemis qui veulent votre mal.</p>
</div>

</body>
</html>
