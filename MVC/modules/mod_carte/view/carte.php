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
            overflow: hidden; /* Empêche le défilement si le flou déborde */
        }

        /* Ajoutez un pseudo-élément pour le flou d'arrière-plan */
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
        text-align: center; /* Ajout de cette ligne pour centrer les images */
    }
        .image-container {
            display: inline-block; /* Placer les images côte à côte */
            position: relative; /* Important pour le positionnement de .overlay */
            width: 20%; /* Largeur du conteneur de l'image */
            margin: 60px; /* Espacement autour des images */
        }

        .image-container img {
            width: 100%; /* Faire en sorte que l'image remplisse le conteneur */
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
            padding: 20px; /* Ajustez l'espacement intérieur */
            text-align: center; /* Centrez le texte */
        }

        .overlay h3 {
            margin: 0;
            font-size: 24px; /* Taille de police pour les titres */
            color: #ff9900; /* Couleur du texte des titres */
        }

        .overlay p {
        margin: 10px 0;
        font-size: 18px; /* Taille de police pour le texte */
        color: #ffffff; /* Couleur du texte */
        }

        .image-container:hover img {
            filter: blur(8px); /* Ajustez si nécessaire */
        }

        .image-container:hover .overlay {
            opacity: 1;
        }
        
    .page-text {
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
        LES DIFFÉRENTES MAP DU JEU
    </div>
</div>

<div class="images-wrapper">
    <?php foreach ($cartes as $index => $carte): ?>
        <div class="image-container" style="transform: translate(<?php echo $index * 100; ?>px, 0);"> <!-- Ajustez la valeur (200px) selon vos besoins -->
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

<div class="page-text" style="text-align: center; margin-top: 20px;">
    <h3>Fonctionnement des cartes:</h3>
    <p>Il existe une entrée à gauche pour les ennemis et une sortie à droite qui mène tout droit vers votre base.</p>
</div>

</body>
</html>
