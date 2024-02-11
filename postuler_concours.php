<?php
include 'config.php';
include 'process_registration_candi.php';
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - IAI-TOGO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <style>
        body {
            background-image: url("img/galerie02.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
            padding: 20px; /* Ajout d'espace autour du body */
            font-family: Arial, sans-serif;
            color: #333; /* Couleur du texte assombrie pour une meilleure lisibilité */
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            min-height: 100vh;
        }


           /* En-tête avec le logo, le titre et les liens */
           #header {
            background-color: transparent; /* Couleur de fond transparente */
            border-bottom: 2px solid #ccc; /* Bordure en bas */
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        /* Logo de l'école */
        #logo {
            width: 80px; /* Ajustez la taille du logo selon vos besoins */
        }

        /* Titre de la page */
        #title {
            color: #fff; /* Couleur du texte pour le titre dans la bande */
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5); 
            font-size: 40px; 
        }

        /* Liens vers d'autres pages */
        #links {
            display: flex;
        }

        /* Styles des liens */
        #links a {
            color: #007bff; /* Couleur des boutons */
            text-decoration: none;
            margin-right: 15px; /* Espace entre les liens */
            transition: color 0.3s ease; /* Transition de couleur pour le survol */
            font-size: 20px; /* Taille du texte */
            font-weight: bold; /* Texte en gras */
        }

        /* Styles des liens au survol */
        #links a:hover {
            color: #0056b3; /* Couleur plus foncée au survol */
            text-decoration: underline;
        }
        .container {
            background-color: rgba(255, 255, 255, 0.8);
            padding: 30px;
            border: 2px solid #ddd;
            border-radius: 5px;
            max-width: 500px; /* Légèrement plus large */
            width: 100%;
            margin-bottom: 20px; /* Ajout d'espace en bas du formulaire */
        }

        h2 {
            text-align: center;
            color: #4CAF50;
        }

        form {
            margin: 0 auto;
        }

        label {
            margin-top: 10px;
            color: #4CAF50;
        }

        input,
        select,
        button {
            margin-bottom: 15px;
            padding: 10px;
            width: 100%;
            border: 1px solid #4CAF50;
            border-radius: 5px;
            background-color: #333;
            color: #fff;
        }

        input[type="file"] {
            border: none;
            padding: 10px 0;
            color: #333;
            background-color: #4CAF50;
            cursor: pointer;
        }

        button {
            background-color: #45a049;
            color: white;
            border: none;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
            border-radius: 5px;
        }

        button:hover {
            background-color: #4CAF50;
        }

        .confirmation {
            color: #4CAF50;
            text-align: center;
            margin-top: 20px;
        }

        .error {
            color: red;
            text-align: center;
            margin-top: 20px;
        }

        /* Ajout d'une bande en haut et en bas */
        header, footer {
            background-color: #333;
            color: #fff;
            padding: 10px;
            text-align: center;
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
        <h2>Formulaire d'inscription</h2>

        <!-- Le formulaire d'inscription -->
        <form id="inscriptionForm" action="process_registration_candi.php" method="post" enctype="multipart/form-data">
            <!-- Ajoutez les champs nécessaires du formulaire ici -->
            <label for="nom">Nom :</label>
            <input type="text" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" required>

            <!-- Ajoutez d'autres champs du formulaire ici -->

            <label for="photo">Photo :</label>
            <input type="file" name="photo" accept=".jpg, .jpeg, .png" required>

            <label for="date_naissance">Date de Naissance :</label>
            <input type="date" name="date_naissance" max="2006-01-01" required>

            <label for="sexe">Sexe :</label>
            <select name="sexe" required>
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
            </select>

            <!-- Ajoutez d'autres champs du formulaire ici -->

            <label for="nationalite">Nationalité :</label>
            <input type="text" name="nationalite" required>

            <label for="annee_bac">Année d'obtention du BAC II :</label>
            <input type="number" name="annee_bac" min="1980" max="2023" required>

            <label for="serie_bac">Série BAC :</label>
            <select name="serie_bac" required>
                <option value="C">C</option>
                <option value="D">D</option>
                <option value="E">E</option>
                <option value="F1">F1</option>
                <option value="F2">F2</option>
            </select>

            <!-- Ajoutez les champs pour l'upload des documents -->
            <label for="copie_naissance">Copie de naissance (PDF) :</label>
            <input type="file" name="copie_naissance" accept=".pdf" required>

            <label for="copie_nationalite">Copie de nationalité (PDF) :</label>
            <input type="file" name="copie_nationalite" accept=".pdf" required>

            <label for="attestation_bac">Attestation du BAC II (PDF) :</label>
            <input type="file" name="attestation_bac" accept=".pdf" required>
            <label for="confirmation">Confirmez toutes les informations :</label>
            <input type="checkbox" name="confirmation" required>

            <!-- Bouton de soumission -->
            <button type="submit" name="submit">Soumettre</button>
        </form>

    </div>

    
    <script>
    // Sélectionnez le formulaire par son ID
    var form = document.getElementById('inscriptionForm');

    // Ajoutez un écouteur d'événements pour le formulaire
    form.addEventListener('submit', function (event) {
        // Empêchez la soumission du formulaire par défaut
        event.preventDefault();

        // Envoie des données vers le serveur
        var formData = new FormData(form);

        // Utilisez Fetch API pour envoyer les données au serveur
        fetch('process_registration_candi.php', {
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

    // Vérifiez la réponse du serveur
    if (data.success) {
        // Affichez un message de succès
        alert('Inscription réussie!');
        // Redirigez vers la page de consultation de la candidature
        window.location.href = 'consulter_candidature.php?id=' + data.candidat_id;
    } else {
        // Affichez une alerte en cas d'échec
        alert('L\'inscription a échoué. Veuillez réessayer.');
    }
})
        .catch(error => {
            console.error('Erreur lors de l\'envoi des données au serveur:', error);
            // Gérez l'erreur ici, par exemple, affichez une alerte à l'utilisateur
            alert('Une erreur s\'est produite lors de l\'envoi des données au serveur. Veuillez réessayer.');
        });
    });
    console.log
</script>

</body>
</html>
