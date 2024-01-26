<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Carte des Images</title>
    <style>
      
       body, html {
            height: 100%;
            margin: 0;
            padding: 0;
            font-family: Arial, sans-serif;
            
        }


        body::before {
            content: '';
            position: fixed; 
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            z-index: -1;
            background: url('././Images/fond.avif') no-repeat center center fixed; 
            background-size: cover;
            filter: blur(5px);
        }

        .header {
            position: relative;
            color: #ffffff;
            text-align: left; 
            padding: 20px; 
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
            width: 30%;* Largeur du conteneur de l'image */
            margin: 2%; 
        }

        .image-container img {
            max-width: 50%; 
            max-height: 70%;
            height: auto;
            transition: filter 0.3s ease; /* Effet de transition pour le flou */
        }

        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: rgba(0, 0, 0, 0.5);
            color: white;
            font-size: 20px;
            display: flex;
            align-items: center;
            justify-content: center;
            opacity: 0;
            transition: opacity 0.3s ease;
            flex-direction: column; /* Pour afficher les détails verticalement */
            padding: 20px; 
            text-align: center; 
        }



.overlay h3 {
    margin: 0;
    font-size: 1.5vw;
    color: #ff9900;
}

.overlay p {
    margin: 8px 0;
    font-size: 1vw; 
    color: #ffffff;
}



        .image-container:hover img {
            filter: blur(8px); 
        }

        .image-container:hover .overlay {
            opacity: 1;
        }
        
    .page-text {
        text-align: center;
        margin-top: 10px;
        background-color: rgba(0, 0, 0, 0.7); 
        color: #ffffff;
        padding: 8px;
        border-radius: 10px;
    }

    .page-text h3 {
        font-size: 24px; 
    }

    .page-text p {
        font-size: 18px;
    }

@media screen and (max-height: 650px) {
  .image-container {
    flex: 0 0 100%;
  }
  .overlay h3{
    font-size:10em;
  }
  .overlay p{
    margin: 3px 0;
    font-size: 0.5vw; 
  }
  .page-text{
    padding:3px;
    margin-top: 20px;
    width: 100%;
    box-sizing: border-box;
  }
  .overlay h3 {
        font-size: 1em;
    }

    .overlay p {
        margin: 3px 0;
        font-size: 0.5em;
    }

.header {
  font-size: 5px; 
}
.overlay{
    max-width:50%;
}

}


@media screen and (max-width: 768px) {
    .image-container {
        flex: 0 0 calc(45% - 20px);
    }

    .overlay h3 {
        font-size: 1.2em;
    }

    .overlay p {
        margin: 3px 0;
        font-size: 1em;
    }

}

@media screen and (max-width: 500px) {
    .image-container {
        flex: 0 0 calc(100% - 20px);
    }
    .overlay h3 {
        font-size: 1em;
    }

    .overlay p {
        margin: 3px 0;
        font-size: 0.8em;
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
 
}


@media (max-width: 900px) {
    .overlay h3 {
        font-size: 1vw; /* Taille de police réduite pour les titres à une largeur d'écran de 1024px ou moins */
    }

    .overlay p {
        font-size: 0.5vw; /* Taille de police réduite pour le texte à une largeur d'écran de 1024px ou moins */
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
}

    </style>
</head>
<body>

<div class="header">
    <div class="header-text">
        LES DIFFÉRENTES MAP DU JEU
    </div>
</div>

<div class="images-wrapper">
    <?php foreach ($cartes as $index => $carte): ?>
        <div class="image-container" style="transform: translate(<?php echo $index * 100; ?>px, 0);">
            <img src="modules/mod_carte/imageCarte/<?php echo htmlspecialchars($carte['Image']); ?>" alt="Image de la carte">
            <div class="overlay">
                <h3>Description</h3>
                <p><?php echo htmlspecialchars($carte['Description']); ?></p>
                <h3>Dimension</h3>
                <p><?php echo htmlspecialchars($carte['Dimension']); ?></p>
                <h3>Vie de Départ</h3>
                <p><?php echo htmlspecialchars($carte['VieDebut']); ?></p>
                <h3>Ressource de Départ</h3>
                <p><?php echo htmlspecialchars($carte['RessourceDebut']); ?></p>
            </div>
        </div>
    <?php endforeach; ?>
</div>

<div class="page-text">
    <h3>Fonctionnement des cartes:</h3>
    <p>Il existe une entrée à gauche pour les ennemis et une sortie à droite qui mène tout droit vers votre base.</p>
</div>

</body>
</html>
