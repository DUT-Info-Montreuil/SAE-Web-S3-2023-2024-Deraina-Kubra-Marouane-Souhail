<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Acceuil</title>
<style>
body::before {
    content: "";
    position: fixed;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background: inherit; /* Copie l'arrière-plan du body */
    filter: blur(5px); /* Ajoute le flou */
    z-index: -1; /* Place le pseudo-élément en arrière-plan */
}


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

.main-container {
    position: relative;
    width: 100%;
    height: 100%;
}

.content-container {
    position: absolute;
    top: 40%;
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); /* Ajoute une ombre au texte */
}

.title {
    font-size: 4em;
    animation: fadeIn 2s;
}

.description {
    font-size: 1.5em;
    font-family: 'Pacifico', cursive; /* Utilisez 'Pacifico' comme nom de police */
    animation: fadeIn 2s;
    animation-delay: 1s;
    line-height: 1.5;
}


@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

</style>

<body>
    <div class="main-container">

        <div class="content-container">
            <h1 class="title">Fantasy Fortress: The Return</h1>
            <div class="description">
               
            </div>
        </div>
    </div>
    <script src="modules/mod_accueil/view/script.js"></script>
</body>
</html>
