<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Defense</title>
<style>
     body {
    font-family: Arial, sans-serif; 
    margin: 0; 
    padding: 0; 
    background-color: #f0f0f0; 
    color: #333; 
    }

     
     a {
        text-decoration: none; 
    }


    .container {
        display: flex;
        justify-content: center;
        gap: 40px; 
        margin-top: 50px;
        position: relative;
    }

    .defense-item {
        width: 400px; 
        cursor: pointer; 
        overflow: hidden; 
        border-radius: 10px; 
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        background: white; 
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .defense-item:hover {
        transform: translateY(-5px); 
        box-shadow: 0 6px 12px rgba(0, 0, 0, 0.2); 
    }
    .defense-item h2 {
        font-size: 1.5rem; 
        color: white; 
        background-color: #007bff; 
        margin: 0; 
        padding: 20px; 
        width: 100%;
        display: flex; 
        justify-content: center; 
        align-items: center; 
        height: 60px; 
        box-sizing: border-box; 
    }

    .defense-item img {
        width: 120%; 
        height: auto;
        display: block;
        transition: transform 0.3s ease;
        margin-left: -10%; 
    }

    .defense-item img:hover {
        transform: scale(1.05); 
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
