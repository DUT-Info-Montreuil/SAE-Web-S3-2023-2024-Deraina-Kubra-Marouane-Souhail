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
    z-index: -1; 
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
    display: flex;
    max-width: 100%;
    flex-direction: column;
    height: 100%;
}

.content-container {
    position: absolute;
    top: calc(50% - 1.5em);
    left: 50%;
    transform: translate(-50%, -50%);
    text-align: center;
    color: white;
    text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
}

.title {
    font-size: 2.2vw;
    max-width: 100%;
    animation: fadeIn 2s;
}

.description {
    font-size: 1.5vw;
    font-family: 'Pacifico', cursive; 
    animation: fadeIn 2s;
    animation-delay: 1s;
    line-height: 1.5;
}


@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@media screen and (max-width: 768px) {
            .title {
                font-size: 3vw;
            }

            .description {
                font-size: 2vw;
            }
}

@media screen and (max-height: 500px) {
            .title,
            .description {
                font-size: 1.5vw;
            }
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
