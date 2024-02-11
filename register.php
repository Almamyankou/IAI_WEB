<?php
include 'config.php';
include 'process_registration_util.php';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription au Concours IAI-TOGO</title>
    <link rel="stylesheet" href="style.css">
    <style>
        body {
            background-image: url("img/galerie18.jpg");
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
            min-height: 100vh;
        }

        /* En-tête avec le logo, le titre et les liens */
        #header {
            background-color: transparent;
            border-bottom: 2px solid #ccc;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

        /* Logo de l'école */
        #logo {
            width: 80px;
        }

        /* Titre de la page */
        #title {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 40px;
        }

        /* Liens vers d'autres pages */
        #links {
            display: flex;
        }

        /* Styles des liens */
        #links a {
            color: #007bff;
            text-decoration: none;
            margin-right: 15px;
            transition: color 0.3s ease;
            font-size: 20px;
            font-weight: bold;
        }

        /* Styles des liens au survol */
        #links a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        .container {
            width: 350px;
            background-color: rgba(255, 255, 255, 0.7);
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-top: 20px; /* Ajout de marge au-dessus du formulaire */
            
        }

        h2 {
            text-align: center;
            font-size: 30px;
            margin-bottom: 20px;
        }

        .input-field {
            position: relative;
            margin-bottom: 20px;
        }

        .input-field input {
            height: 45px;
            width: calc(100% - 40px);
            border: none;
            outline: none;
            border-radius: 30px;
            color: #000;
            padding: 0 20px;
            background: rgba(255, 255, 255, 0.7);
            box-sizing: border-box;
        }

        .input-field i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 20px;
            color: #000;
        }

        .submit {
            border: none;
            border-radius: 30px;
            font-size: 15px;
            height: 45px;
            width: 100%;
            outline: none;
            background: #007bff;
            color: #fff;
            cursor: pointer;
            transition: .3s;
        }

        .submit:hover {
            background: #0056b3;
        }

        /* Ajout de styles pour la boîte de message */
        #messageContainer {
            margin-top: 20px;
            text-align: center;
        }

        .success-message {
            color: #4CAF50;
        }

        .error-message {
            color: red;
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

    <div class="container">
        <h2>Création du compte</h2>
        <!-- Formulaire avec action pointant vers le script de traitement PHP -->
        <form action="process_registration_util.php" method="post" onsubmit="return validateForm()">
            <!-- Champ pour le nom d'utilisateur -->
            <div class="input-field">
                <input type="text" id="username" name="username" placeholder="Nom d'utilisateur" required>
                <i class="bx bx-user"></i>
            </div>

            <!-- Champ pour le mot de passe -->
            <div class="input-field">
                <input type="password" id="password" name="password" placeholder="Mot de passe" minlength="8" required>
                <i class="bx bx-lock-alt"></i>
            </div>

            <!-- Champ pour la confirmation du mot de passe -->
            <div class="input-field">
                <input type="password" id="confirmPassword" name="confirmPassword" placeholder="Confirmer le mot de passe" minlength="8" required>
                <i class="bx bx-lock-alt"></i>
            </div>

            <!-- Bouton de soumission du formulaire -->
            <input type="submit" class="submit" value="S'inscrire">
        </form>

        <!-- Ajout de la div pour afficher le message -->
        <div id="messageContainer"></div>
    </div>

    <script>
        // Validation côté client
        function validateForm() {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirmPassword").value;

            if (password !== confirmPassword) {
                alert("Les mots de passe ne correspondent pas.");
                return false;
            }
            return true;
        }

        // Sélectionnez le formulaire par son ID
        var form = document.querySelector('form');

        // Ajoutez un écouteur d'événements pour le formulaire
        form.addEventListener('submit', function (event) {
            // Empêchez la soumission du formulaire par défaut
            event.preventDefault();

            // Envoie des données vers le serveur
            var formData = new FormData(form);

            // Utilisez Fetch API pour envoyer les données au serveur
            fetch('process_registration_util.php', {
                method: 'POST',
                body: formData
            })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Network response was not ok');
                }
                return response.json();
            })
            .then(data => {
                console.log(data);

                // Affichez le message dans la boîte de dialogue
                var messageContainer = document.getElementById('messageContainer');
                if (data.success) {
                    // Succès
                    messageContainer.innerHTML = '<div class="success-message">' + data.message + '</div>';
                    window.location.href = 'login.php';

                } else {
                    // Échec
                    messageContainer.innerHTML = '<div class="error-message">' + data.message + '</div>';
                }
            })
            .catch(error => {
                console.error('Erreur lors de l\'envoi des données au serveur:', error);
                // Gérez l'erreur ici, par exemple, affichez une alerte à l'utilisateur
                alert('Une erreur s\'est produite lors de l\'envoi des données au serveur. Veuillez réessayer.');
            });
        });
    </script>
</body>
</html>