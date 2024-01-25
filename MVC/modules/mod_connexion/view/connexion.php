<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Connexion</title>
<style>
    body {
        font-family: 'Arial', sans-serif;
        background: url('././Images/photo.png') no-repeat center center fixed;
        background-size: cover;
        margin: 0;
        padding: 0;
        display: flex;
        justify-content: center;
        height: 100vh;
    }

    form {
        max-width: 300px;
        margin: 2rem auto;
        padding: 2rem;
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
        border-radius: 10px;
        margin-top: 2rem;
        transition: transform 0.3s, box-shadow 0.3s;
    }

    h2:hover {
        transform: scale(1.05);
        text-shadow: 0 3px 6px rgba(0, 0, 0, 0.6);
    }

    input[type=text],
    input[type=password] {
        width: calc(100% - 20px);
        padding: 10px;
        margin-bottom: 1em;
        border: 1px solid #ddd;
        border-radius: 4px;
        box-sizing: border-box;
    }

    input[type=submit] {
        width: 100%;
        padding: 10px;
        border: none;
        border-radius: 4px;
        background-color: #5cb85c;
        color: white;
        font-size: 1em;
        text-transform: uppercase;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    input[type=submit]:hover,
    input[type=submit]:focus {
        background-color: #4cae4c;
        outline: none;
    }
</style>
</head>
<body>

<h2>Connexion</h2>
<form method="post" action="index.php?module=connexion&action=connexion" enctype="multipart/form-data">
    <input type="hidden" name="token" value="<?= $token ?>">
    <label for="nom">Nom :</label>
    <input type="text" id="nom" name="nom" required>
    
    <label for="mot_de_passe">Mot de passe :</label>
    <input type="password" id="mot_de_passe" name="mot_de_passe" required>
    
    <input type="submit" value="Se connecter">
</form>

</body>
</html>
