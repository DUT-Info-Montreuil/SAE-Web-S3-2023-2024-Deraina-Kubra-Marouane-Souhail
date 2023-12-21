<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Détails de la Tourelle</title>
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

     .defense-container {
            display: flex;
            justify-content: center;
            margin-top: 20px;
        }

.defense-item {
    flex: 0 0 calc(100% / 3 - 20px); /* Ajustez pour trois éléments par ligne */
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
    width: 150px; /* Réduire la taille de l'image */
    height: 150px; /* Réduire la taille de l'image */
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
         <a href="index.php?module=defense" class="button">Retour à la Défense</a>
    </div>
    <h1>Détails des Tourelles</h1>
    <div class="defense-container">
        <?php foreach ($detailsTourelle as $tourelle) : ?>
            <div class="defense-item">
                <img src="modules/mod_defense/logos/<?php echo $tourelle['Image']; ?>" alt="Image de la tourelle">
                <h2><?php echo $tourelle['Description']; ?></h2>
                <div class="description">
                    <p><strong>Description:</strong> <?php echo $tourelle['Detail']; ?></p>
                    <p><strong>Cout:</strong> <?php echo $tourelle['Cout']; ?></p>
                    <p><strong>Degats:</strong> <?php echo $tourelle['Degats']; ?></p>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</body>
</html>
