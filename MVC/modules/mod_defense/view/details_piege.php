<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails du Piège</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f2f2f2;
            margin: 0;
            padding: 0;
        }

        h1 {
            text-align: center;
            margin-top: 20px;
            color: #333;
        }

        .defense-container {
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
    <h1>Détails des Pièges</h1>
    <div class="defense-container">
        <?php foreach ($detailsPiege as $piege) : ?>
            <div class="defense-item">
                <img src="modules/mod_defense/logos/<?php echo $piege['Image']; ?>" alt="Image du piège">
                <h2><?php echo $piege['Description']; ?></h2>
                <div class="description">
                    <p><strong>Description:  <?php echo $piege['Detail']; ?></p>
                    <p><strong>Cout:</strong> <?php echo $piege['Cout']; ?></p>
                    <p><strong>Degats:</strong> <?php echo $piege['Degats']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
