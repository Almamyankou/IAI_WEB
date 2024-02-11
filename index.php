<?php
include 'config.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Concours IAI-TOGO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: background-image 1s ease-in-out;
            min-height: 100vh; 
        }

        #header {
            background-color: transparent;
            border-bottom: 2px solid #ccc;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        #logo {
            width: 80px; 
        }

       
        #title {
            color: #fff; 
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 40px; 
        }

        #links {
            display: flex;
        }

        #links a {
            color: yellow;
            text-decoration: none;
            margin-right: 15px; 
            transition: color 0.3s ease; 
            font-size: 20px; 
            font-weight: bold; 
        }

        #links a:hover {
            color: #0056b3; 
            text-decoration: underline;
        }

        #info {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: #fff;
        }

        #info span {
            color: #007bff; 
            font-weight: bold; 
        }

        .btn-container {
            position: absolute;
            bottom: 60px; 
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .btn {
            margin: 0 10px;
            border-radius: 15px;
            transition: background-color 0.3s ease, color 0.3s ease; 
        }

        .btn:hover {
            background-color: #0056b3;
            color: #fff;
        }

        #footer {
            background-color: #333;
            color: white;
            padding: 1px;
            text-align: center;
            position: absolute;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>
    <div id="header">
       
        <img src="img/lo.jpg" alt="IAI-TOGO Logo" id="logo">
        <h1 id="title">IAI-TOGO Concours</h1>
        <div id="links">
            <a href="about.php">A propos</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>

    <div id="info">
        <h2>Bienvenue au concours <span>IAI-TOGO!</span> Nous sommes ravis de vous accueillir dans cette compétition exceptionnelle. Découvrez vos opportunités, défiez-vous et faites partie de l'excellence. Bonne chance!</h2>
    </div>

    <div class="btn-container">
        <a href="register.php" class="btn btn-primary">Créer un compte</a>
        <a href="login.php" class="btn btn-success">Se connecter</a>
    </div>

    <div id="footer">
        <p>&copy; 2024 IAI-TOGO. Tous droits réservés.</p>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <script>
        // Tableau contenant les chemins des images de fond
        var backgroundImages = ["img/l1.JPG", "img/l2.JPG", "img/l3.JPG"];
        var currentIndex = 0;

        // Fonction pour changer l'image de fond
        function changeBackgroundImage() {
            document.body.style.backgroundImage = "url('" + backgroundImages[currentIndex] + "')";
            currentIndex = (currentIndex + 1) % backgroundImages.length;
        }

        // Appeler la fonction pour changer l'image de fond toutes les 2 secondes
        setInterval(changeBackgroundImage, 2000);
    </script>
</body>
</html>
