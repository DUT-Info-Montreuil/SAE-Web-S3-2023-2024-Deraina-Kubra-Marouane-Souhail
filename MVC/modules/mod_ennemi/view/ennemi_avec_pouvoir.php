<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ennemis</title>
  <style>
    main {
      font-family: Arial, sans-serif;
      display: flex;
      height: 100vh;
      margin: 0;
      overflow: hidden;

    display: flex; /* Utilise Flexbox pour aligner les enfants de main */
    flex-direction: column; /* Empile les enfants de main verticalement */
    justify-content: center; /* Centre verticalement dans main */
    align-items: center; /* Centre horizontalement dans main */
    height: calc(100vh - 60px); /* Hauteur totale de la fenêtre moins la hauteur du header et du footer */
    text-align: center; /* Centre le texte à l'intérieur de main */
  
    }
  
    .container {
  flex: 1; 
  display: flex; /* Ajout de flex pour disposer les enfants côte à côte */
  flex-direction: row; /* Disposer les enfants horizontalement */
  text-align: center;
  overflow: hidden;
  position: relative; /* Pour positionner les éléments fils absolument */
  margin: 10px; /* Ajout de marge pour l'espace entre les containers */
}


    h2 {
      margin-top: 0;
    }

    .image-container img {
      position : left 100px;
  max-width: 90%; /* Fait en sorte que les images occupent 100% de la largeur du conteneur */
  max-height: 100%;
  transition: transform 0.5s, box-shadow 0.5s, opacity 0.5s;
  opacity: 0.6;
  
}
    
    .container:hover img {
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
  </style>
</head>

<body>
  <main>
    <h2>Ennemis avec pouvoirs</h2>


   
  </main>
</body>
</html>
