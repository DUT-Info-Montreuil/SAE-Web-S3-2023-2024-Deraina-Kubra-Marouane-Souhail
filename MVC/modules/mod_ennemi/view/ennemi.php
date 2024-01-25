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
  background: url('././Images/fond.avif') no-repeat center center fixed; 
  background-size: cover;
  height: 100vh;
}

.header {
  position: relative; 
  color: #ffffff;
  text-align: center; 
  padding: 20px; 
  font-size: 15px;
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
  width: 30%;
  margin: 2%; 
}

.image-container img {
  width: 400px; /* Largeur fixe pour l'image */
  height: 430px; /* Hauteur fixe pour l'image */
  max-width: 60%; 
  max-height: 70%;
  transition: transform 0.5s, box-shadow 0.5s, opacity 0.5s;
  opacity: 0.6;
  
}
    
.image-container:hover img {
  transform: scale(1.1);
  box-shadow: 0 0 20px rgba(255, 255, 255, 0.8);
  opacity: 1; /* Opacité au survol */
}

body{
  display:flex;
  min-height: 100vh;
  flex-direction: column;
}

@keyframes fadeIn {
  from {
    opacity: 0;
  }
  to {
    opacity: 1;
  }
}
footer {
  background-color: #333;
  color: white;
  text-align: center;
  padding: 3px 0;
  width: 100%;
}

.page-text {
  border-radius: 10px;
  text-align: center;
  margin-top: 20px;
  background-color: rgba(0, 0, 0, 0.7);
  color: #ffffff; 
  padding: 10px; 
}

.page-text h3 {
  font-size: 24px; 
}

.page-text p {
  font-size: 18px; 
}

@media screen and (max-height: 500px) {
  .image-container {
    flex: 0 0 100%;
  }

  .page-text{
    padding:3px;
    margin-top: 20px;
    width: 100%;
    box-sizing: border-box;
  }
  .page-text h3 {
    font-size: 8px; 
  }

  .page-text p {
  font-size: 5px; 
}

.header {
  font-size: 5px; 
}
}

</style>
</head>
<body>

    <div class="page-text">
    <h3>Ennemis</h3>
    <p>Il y a plusieurs types d'ennemis qui veulent votre mal.</p>
    </div>


<div class="images-wrapper">
        <div class="image-container"> 
        <a href = "index.php?module=ennemi&action=ennemiB">
        <img src="./Images/ennemiWithout.png" alt="Regular Enemies Image">
        </a>
        <div class="header">
          <p>Les Assaillants Communs</p>
        </div>
        </div>
        
        <div class="image-container">
        <a href = "index.php?module=ennemi&action=ennemiP">
          <img src="./Images/ennemiWithPower.png" alt="Powerful Enemies Image" >
        </a>
        <div class="header">
          <p>Les Forces Surnaturelles</p>
        </div>
        </div>

</div>


</body>
</html>
