<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Inscription</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: url('././Images/photo.png') no-repeat center center fixed; 
        background-size: cover;
    }

    form {
        max-width: 300px;
        margin: 50px auto;
        padding: 20px;
        background: rgba(255, 255, 255, 0.9);
        border-radius: 8px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.3);
        display: flex;
        flex-direction: column;
        gap: 10px;
    }

    h2 {
        font-size: 2.5rem; 
        color: #f8f8f8; 
        text-shadow: 0 2px 4px rgba(0, 0, 0, 0.5); 
        text-align: center;
        margin-bottom: 1rem;
        padding: 0.5rem; 
        background-color: rgba(0, 0, 0, 0.4); 
        display: inline-block;
        border-radius: 10px; 
        margin-top: 2rem;
        transition: transform 0.3s, box-shadow 0.3s; 
    }

    h2:hover {
        transform: scale(1.05); 
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.6);
    }

    input[type=text],
    input[type=password],
    input[type=file] {
        width: 100%;
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 4px;
    }

    input[type=submit] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #5cb85c;
        color: white;
        font-size: 16px;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type=submit]:hover {
        background-color: #4cae4c;
    }

    /* Ajout de styles pour les étiquettes et amélioration de l'espacement */
    label {
        margin-top: 10px;
    }
</style>
</head>
<body>

<h2>Inscription</h2>
<form method="post" action="index.php?module=connexion&action=inscription" enctype="multipart/form-data">
    <input type="hidden" name="token" value="<?= $token ?>">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    
    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" id="mot_de_passe" name="mot_de_passe" required>
    
    <label for="confirmation_mot_de_passe">Confirmation du mot de passe :</label>
    <input type="password" id="confirmation_mot_de_passe" name="confirmation_mot_de_passe" required>
    
    <label for="logo">Photo de profil :</label>
    <input type="file" id="logo" name="logo" accept="image/*" required>
    
    <input type="submit" value="S'inscrire">
</form>

</body>
</html>
