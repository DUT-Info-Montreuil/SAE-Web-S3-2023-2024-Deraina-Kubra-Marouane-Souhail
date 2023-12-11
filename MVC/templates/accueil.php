<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fantasy Fortress: The Return</title>
<style>
  body, h1, h2, p {
    margin: 0;
    padding: 0;
  }
  header {
    background-color: #333;
    color: white;
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  header h1 {
    flex: 1;
    text-align: center;
  }
  header img {
    margin-left: 20px;
    flex: 1;
    height: 100px;
    object-fit: cover;
    clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
  }
  nav {
    background: #444;
    color: white;
    padding: 10px;
    text-align: center;
  }
  nav a {
    color: white;
    text-decoration: none;
    padding: 0 15px;
  }
  body {
    margin: 0;
    padding: 0;
    min-height: 100vh; /* Assure que la hauteur minimum est l'écran entier */
    display: flex;
    flex-direction: column; /* Organise le contenu en colonne */
  }
  main {
    display: flex; /* Utilise Flexbox pour aligner les enfants de main */
    flex-direction: column; /* Empile les enfants de main verticalement */
    justify-content: center; /* Centre verticalement dans main */
    align-items: center; /* Centre horizontalement dans main */
    height: calc(100vh - 60px); /* Hauteur totale de la fenêtre moins la hauteur du header et du footer */
    text-align: center; /* Centre le texte à l'intérieur de main */
  }
  footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    width: 100%;
  }
  .content-container {
    display: flex;
    align-items: center; /* Aligner les éléments au centre */
    justify-content: center; /* Centrer les éléments horizontalement */
    flex-wrap: wrap; /* Permet aux éléments de passer à la ligne si nécessaire */
  }

  .welcome-image {
    margin-right: 20px; /* Espace entre l'image et le texte */
    height: 200px; /* Hauteur de l'image, ajustez selon vos besoins */
    width: auto; /* Assure que l'aspect ratio de l'image est maintenu */
  }


  .welcome-text {
    max-width: 600px; /* Largeur maximale du texte pour une meilleure lisibilité */
  }

  #welcome {
    padding: 20px;
  }
</style>
</head>
<body>
<nav>
  <a href="index.php">Home</a>
  <a href="defense.php">Defense</a>
  <a href="enemies.php">Enemies</a>
  <a href="profile.php">Profil</a>
  <a href="map.php">Carte</a>
  <a href="login.php">Connexion</a>
  <a href="signup.php">S'inscrire</a>
</nav>
<header>
  <img src="imageTitre.png" alt="Image à effet de coupe" style="float: right;">
  <h1>Fantasy Fortress: The Return</h1>
</header>
<main>
<section id="welcome" class="content-container">
    <img class="welcome-image" src="map.png" alt="Image à gauche de la description"> <!-- Remplacez par le chemin de votre image -->
    <div class="welcome-text">
    <h2>Description</h2>
    <p>Bienvenue dans l’univers de “Fantasy Fortress: The Return”, un tower defense haut en couleur. 

Votre mission est de défendre votre base contre les vagues d’ennemis qui cherchent à s’y infiltrer, et cela pendant plusieurs vagues. 

Mais attention, dans ce jeu, les ennemis ne suivent pas un chemin prédéfini. Au contraire, le parcours de ces intrus est déterminé au fur et à mesure que vous posez vos tourelles. Plongez-vous dans un monde cartoon, avec des tourelles coloré et des ennemis tout aussi extravagants. </p>
  </section>
</main>
<footer>
  <p>Copyright - Novembre 2023 - Kubra, Deraina, Marouane, Souhail</p>
</footer>
</body>
</html>
