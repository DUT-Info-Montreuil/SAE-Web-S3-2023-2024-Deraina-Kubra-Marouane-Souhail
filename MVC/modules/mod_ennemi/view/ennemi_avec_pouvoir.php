<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Ennemis de Base</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
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
            flex-wrap: wrap;
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
            width: 250px; /* Largeur fixe pour l'image */
            height: 250px; /* Hauteur fixe pour l'image */
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
    </style>
</head>
<body>
    <div class="back-button">
         <a href="index.php?module=ennemi" class="button">Retour à la page Ennemis</a>
    </div>
    <h1>Ennemis Avec Pouvoir</h1>
    <div class="ennemi-container">
        <?php foreach ($detailsEnnemiP as $ennemi) : ?>
            <div class="ennemi-item">
                <img src="modules/mod_ennemi/logos/<?php echo htmlspecialchars($ennemi['Image']); ?>" alt="Image ennemi">
                <div class="description">
                    <p><strong>Pv de Base:  <?php echo htmlspecialchars($ennemi['PvBase']); ?></p>
                    <p><strong>Degats:</strong> <?php echo htmlspecialchars($ennemi['Degats']); ?></p>
                    <p><strong>Description:</strong> <?php echo htmlspecialchars($ennemi['Description']); ?></p>
                    <p><strong>Pouvoir:</strong> <?php echo htmlspecialchars($ennemi['Pouvoir']); ?></p>
                    <p><strong>Ressource Donnees:</strong> <?php echo htmlspecialchars($ennemi['Degats']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
