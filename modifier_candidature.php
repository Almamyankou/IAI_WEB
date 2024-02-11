<?php
include("config.php");
include("utils.php");

// Vérifier si l'ID du candidat est passé en paramètre
if (isset($_GET['id'])) {
    $candidat_id = $_GET['id'];

    // Récupérer les informations du candidat depuis la base de données
    $query = "SELECT * FROM candidats WHERE id = $candidat_id";
    $result = mysqli_query($conn, $query);

    if ($result) {
        $candidat = mysqli_fetch_assoc($result);
    } else {
        // Gérer l'erreur de requête
        die("Erreur de requête : " . mysqli_error($conn));
    }
} else {
    // Rediriger vers la page principale si l'ID n'est pas spécifié
    header("Location: postuler_concours.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier la Candidature</title>
    <!-- Inclure le fichier CSS Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    <style>
        /* styles communs */
        body {
            font-family: Arial, sans-serif;
            background-color: darkgray;
            margin: 0;
            padding: 0;
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
            width: 50%;
            margin: auto;
            background: white;
            padding: 20px;
            margin-top: 50px;
            box-shadow: 0px 0px 20px 0px #000000;
        }

        h2 {
            text-align: center;
        }

        /* styles du formulaire */
        form {
            display: flex;
            flex-direction: column;
        }

        label {
            margin-top: 10px;
        }

        input,
        select,
        button {
            margin-bottom: 15px;
            padding: 10px;
            width: 100%;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 15px 20px;
            text-align: center;
            text-decoration: none;
            display: inline-block;
            font-size: 16px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        /* styles pour la zone de confirmation */
        .confirmation {
            color: green;
            text-align: center;
            margin-top: 20px;
        }

        /* styles pour la page d'erreur */
        .error {
            color: red;
            text-align: center;
            margin-top: 20px;
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
        <h2 class="text-center mb-4">Modifier la Candidature</h2>

        <!-- Formulaire de modification -->
        <form action="traitement_modification.php" method="post" enctype="multipart/form-data">
            <label for="nom">Nom :</label>
            <input type="text" name="nom" value="<?php echo isset($candidat['nom']) ? $candidat['nom'] : ''; ?>" required>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" value="<?php echo isset($candidat['prenom']) ? $candidat['prenom'] : ''; ?>" required>

            <label for="photo">Photo :</label>
            <input type="file" name="photo" accept=".jpg, .jpeg, .png">

            <label for="date_naissance">Date de Naissance :</label>
            <input type="date" name="date_naissance" value="<?php echo isset($candidat['date_naissance']) ? $candidat['date_naissance'] : ''; ?>" required>

            <label for="sexe">Sexe :</label>
            <select name="sexe" required>
                <option value="M" <?php echo (isset($candidat['sexe']) && $candidat['sexe'] == 'M') ? 'selected' : ''; ?>>Masculin</option>
                <option value="F" <?php echo (isset($candidat['sexe']) && $candidat['sexe'] == 'F') ? 'selected' : ''; ?>>Féminin</option>
            </select>

            <label for="nationalite">Nationalité :</label>
            <input type="text" name="nationalite" value="<?php echo isset($candidat['nationalite']) ? $candidat['nationalite'] : ''; ?>" required>

            <label for="annee_bac">Année d'obtention du BAC II :</label>
            <input type="text" name="annee_bac" value="<?php echo isset($candidat['annee_bac']) ? $candidat['annee_bac'] : ''; ?>" required>

            <label for="serie_bac">Série BAC :</label>
            <select name="serie_bac" required>
                <option value="C" <?php echo (isset($candidat['serie_bac']) && $candidat['serie_bac'] == 'C') ? 'selected' : ''; ?>>C</option>
                <option value="D" <?php echo (isset($candidat['serie_bac']) && $candidat['serie_bac'] == 'D') ? 'selected' : ''; ?>>D</option>
                <option value="E" <?php echo (isset($candidat['serie_bac']) && $candidat['serie_bac'] == 'E') ? 'selected' : ''; ?>>E</option>
                <option value="F1" <?php echo (isset($candidat['serie_bac']) && $candidat['serie_bac'] == 'F1') ? 'selected' : ''; ?>>F1</option>
                <option value="F2" <?php echo (isset($candidat['serie_bac']) && $candidat['serie_bac'] == 'F2') ? 'selected' : ''; ?>>F2</option>
            </select>

            <!-- Ajoutez les champs pour l'upload des documents -->
            <label for="copie_naissance">Copie de naissance (PDF) :</label>
            <input type="file" name="copie_naissance" accept=".pdf">

            <label for="copie_nationalite">Copie de nationalité (PDF) :</label>
            <input type="file" name="copie_nationalite" accept=".pdf">

            <label for="attestation_bac">Attestation du BAC II (PDF) :</label>
            <input type="file" name="attestation_bac" accept=".pdf">

            <!-- Zone de confirmation -->
            <label for="confirmation">Confirmez toutes les informations :</label>
            <input type="checkbox" name="confirmation">

            <!-- Bouton de soumission -->
            <button type="submit" name="submit">Enregistrer les modifications</button>
        </form>
    </div>
</body>

</html>
