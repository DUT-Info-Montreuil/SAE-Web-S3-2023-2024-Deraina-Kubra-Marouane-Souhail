<html>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Fantasy Fortress: The Return</title>
<style>
  body, h1, h2, p {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
  }
  header {
    background-color: #333;
    color: white;
    padding: 10px 0;
    display: flex;
    justify-content: space-between;
    align-items: center;
  }
  header h1 {
    flex: 1;
    text-align: center;
  }
  header img {
    margin-left: 20px;
    flex: 1;
    height: 100px;
    object-fit: cover;
    clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
  }
  nav {
    background: #444;
    color: white;
    padding: 10px;
    text-align: center;
  }
  nav a {
    color: white;
    text-decoration: none;
    padding: 0 15px;
  }
  body {
    margin: 0;
    padding: 0;
    min-height: 100vh;
    display: flex;
    flex-direction: column; 
  }
  main {
    flex:1;
    display: flex;
    flex-direction: column; 
    align-items:center;
    margin-top: auto;
    justify-content: center;  
    height: calc(100vh - 60px); 
    text-align: center; 
    padding:20px;
  }

  footer {
    background-color: #333;
    color: white;
    text-align: center;
    padding: 10px 0;
    width: 100%;
  }
  .content-container {
    display: flex;
    align-items: center; 
    justify-content: center; 
    flex-wrap: wrap; 
  }

  .welcome-image {
    margin-right: 20px; 
    height: auto;
    max-width: 100%; 
  }


  .welcome-text {
    max-width: 600px; 
    margin: 0 auto;
  }

  #welcome {
    padding: 20px;
  }

  .footer-column {
    display: inline-block;
    vertical-align: top;
    margin-right: 20px;
    margin-left: 20px;
  }

  .footer-column a{
    color: white;
    text-decoration: none;
  }

.column-separator {
  width: 2px;
  background-color: #ccc;
  height: 100px;
  display: inline-block;
  margin:5px;
}

@media screen and (max-width: 768px) {
    body {
        margin: 5px; 
    }

    header, footer {
        padding: 5px;
        height: auto;
        width:100%;
    }

    main {
        margin: 10px;
    }
}

@media screen and (max-height: 650px) {
  body {
        margin: 2px; 
    }

    header {
        padding: 5px;
    }

    header h1 {
        font-size: 1.5em; 
    }

    header img {
        height: 60px; 
        margin-left: 10px;
    }

    .footer-column {
        margin-right: 8px;
        margin-left: 8px;
    }

    .footer-column h3 {
        font-size: 8px;
    }

    .footer-column ul {
        font-size: 10px; 
    }

    footer {
      height: auto;
     
    }
    footer p {
        font-size: 10px;
    }
    #footer_texte {
        font-size: 10px;
    }

    main {
        margin: 5px;
    }

    nav {
        padding: 2px;
        font-size: 1em;  
    }

    nav a {
        font-size: 1em; 
    }
    nav img {
        max-height: 30px; 
        max-width: 100%; 
    }

    .image-menu {
      padding: 0 9px;
    }
}
  .download-button {
      background-color: #FFD700; /* Couleur jaune */
      color: #333; 
      padding: 10px 20px; 
      text-decoration: none; 
      border-radius: 5px; 
      font-weight: bold; 
      transition: background-color 0.3s; /* Transition de couleur au survol */
    }

    .download-button:hover {
      background-color: #FFA500; /* Nouvelle couleur au survol */
    }
    
  </style>
</head>
<body>

    <?php echo $menu->getAffichage() ?>

    <header>
        <img src="Images/imageTitre.png" onclick = "redirectToHome()" alt="Image à effet de coupe" style="float: right;">
        <h1>Fantasy Fortress: The Return</h1>
    </header>

    <script>
    function redirectToHome() {
        window.location.href = "index.php";
    }
    </script>

<main>
<?=$module_html?>
</main>

<footer><?php echo $footer->getAffichage();?></footer>


</body>
