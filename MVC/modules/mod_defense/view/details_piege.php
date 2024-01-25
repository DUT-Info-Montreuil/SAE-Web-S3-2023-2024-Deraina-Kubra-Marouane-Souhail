<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails du Piège</title>
    <style>
        body {
            font-family: Arial, sans-serif;
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


        .defense-container {
            position: relative;
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            margin-top: 20px;
        }

        .defense-item {
            flex: 0 0 calc(33.33% - 20px);
            margin: 10px;
            background-color: #fff;
            box-shadow: 0 0 5px rgba(0, 0, 0, 0.2);
            padding: 15px;
            text-align: center;
            transition: transform 0.2s ease-in-out;
        }

        .defense-item:hover {
            transform: scale(1.1);
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
        }

        .defense-item img {
            width: 400px; /* Largeur fixe pour l'image */
            height: 450px; /* Hauteur fixe pour l'image */
            object-fit: cover;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .description {
            margin-top: 10px;
        }

        p {
            margin: 10  px 0;
        }
    </style>
</head>
<body>
    <div class="back-button">
         <a href="index.php?module=defense" class="button">Retour à la Défense</a>
    </div>
    <h1>Détails des Pièges</h1>
    <div class="defense-container">
        <?php foreach ($detailsPiege as $piege) : ?>
            <div class="defense-item">
                <img src="modules/mod_defense/logos/<?php echo htmlspecialchars($piege['Image']); ?>" alt="Image du piège">
                <h2><?php echo htmlspecialchars($piege['Description']); ?></h2>
                <div class="description">
                    <p><strong>Description:  <?php echo htmlspecialchars($piege['Detail']); ?></p>
                    <p><strong>Cout:</strong> <?php echo htmlspecialchars($piege['Cout']); ?></p>
                    <p><strong>Degats:</strong> <?php echo htmlspecialchars($piege['Degats']); ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
