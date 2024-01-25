<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Defense</title>
<style>
     body {
    font-family: Arial, sans-serif; /* Police de caractères par défaut */
    margin: 0; /* Aucune marge extérieure */
    padding: 0; /* Aucun espacement intérieur */
    color: #333; /* Couleur de texte par défaut */
    background: url('././Images/fond.avif') no-repeat center center fixed; 
    background-size: cover;
    }

     
     a {
        text-decoration: none; /* Enlève le soulignement */
    }


    .container {
        display: flex;
        justify-content: center;
        gap: 60px; /* Espacement plus grand entre les éléments */
    }

    .defense-item {
        width: 400px; /* Légèrement plus large */
        cursor: pointer; /* Indique que l'élément est cliquable */
        overflow: hidden; /* Empêche les débordements */
        border-radius: 10px; /* Coins arrondis plus prononcés */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); /* Ombre portée subtile */
        background: white; /* Fond blanc pour contraster avec l'arrière-plan */
        transition: transform 0.3s ease, box-shadow 0.3s ease; /* Transition douce pour hover */
    }

    .defense-item:hover {
        transform: translateY(-5px); /* Effet de lévitation au survol */
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); /* Ombre plus prononcée au survol */
    }
    .defense-item h2 {
        font-size: 1.5rem; /* Taille de police plus grande */
        color: white; /* Texte blanc pour contraste */
        background-color: #007bff; /* Bleu flat design */
        margin: 0; /* Aucune marge */
        padding: 20px; /* Espacement autour du texte */
        width: 100%; /* Pleine largeur */
        display: flex; /* Utiliser Flexbox */
        justify-content: center; /* Centrer horizontalement */
        align-items: center; /* Centrer verticalement */
        height: 60px; /* Hauteur fixe pour mieux contrôler le centrage vertical */
        box-sizing: border-box; /* S'assurer que padding et border sont inclus dans la largeur/hauteur */
    }

    .defense-item img {
        width: 120%; /* Augmentation de la largeur de l'image */
        height: auto;
        display: block;
        transition: transform 0.3s ease;
        margin-left: -10%; /* Centrer l'image agrandie dans son conteneur */
    }

    .defense-item img:hover {
        transform: scale(1.05); /* Légère augmentation de l'échelle de l'image au survol */
    }
</style>
</head>
<body>

<div class="container">
    <!-- Section Pièges -->
    <a href="index.php?module=defense&action=piege" class="defense-item">
        <h2>PIÈGES</h2>
        <img src="./Images/piege1.png" alt="Pièges">
    </a>

    <!-- Section Tourelles -->
    <a href="index.php?module=defense&action=tourelle" class="defense-item">
        <h2>TOURELLES</h2>
        <img src="./Images/tourelle1.png" alt="Tourelles">
    </a>

</div>

</body>
</html>
