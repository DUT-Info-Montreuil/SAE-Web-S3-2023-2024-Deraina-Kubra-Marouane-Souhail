<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ennemis de Base</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background: url('././Images/fond.avif') no-repeat center center fixed; 
            background-size: cover;
        }


        .back-button {
            position: absolute; 
            top: 200px; 
            right: 20px; 
        }

        .button {
            padding: 10px 15px;
            background-color: #007bff;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s;
        }   

        .button:hover {
            background-color: #0056b3;
        }


        .ennemi-container {
            position: relative;
            display: flex;
            f
            justify-content: center;
            margin-top: 20px;
        }

        .ennemi-item {
            flex: 0 0 calc(33.33% - 20px);
            margin: 10px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            padding: 15px;
            text-align: center;
            transition: transform 0.2s ease-in-out;
        }

        .ennemi-item:hover {
            transform: scale(1.1);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .ennemi-item img {
            width: 350px; /* Largeur fixe pour l'image */
            height: 350px; /* Hauteur fixe pour l'image */
            width: 100%; /* Largeur fixe pour l'image */
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .description {
            margin-top: 10px;
        }

        p {
            margin: 10px 0;
        }

@media screen and (max-height: 600px) {
    body {
        font-size: 14px;
    }

    .ennemi-item {
        flex: 0 0 calc(50% - 20px);
        margin: 10px;
    }

    .description p {
        font-size: 14px;
    }

    h1 {
        font-size: 18px;
    }
}

    </style>
</head>
<body>
    <div class="back-button">
         <a href="index.php?module=ennemi" class="button">Retour à la page Ennemis</a>
    </div>
    <h1>Assaillants Communs</h1>
    <div class="ennemi-container">
        <?php foreach ($detailsEnnemiB as $ennemi) : ?>
            <div class="ennemi-item">
                <img src="modules/mod_ennemi/logos/<?php echo htmlspecialchars($ennemi['Image']); ?>" alt="Image ennemi">
                <div class="description">
                    <p><strong>Pv de Base:  <?php echo htmlspecialchars($ennemi['PvBase']); ?></p>
                    <p><strong>Degats:</strong> <?php echo htmlspecialchars($ennemi['Degats']); ?></p>
                    <p><strong>Description:</strong> <?php echo htmlspecialchars($ennemi['Description']); ?></p>
                    <p><strong>Ressource Donnees:</strong> <?php echo htmlspecialchars($ennemi['RessourceDonnee']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
