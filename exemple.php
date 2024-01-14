<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styler.css">
    <title>Document</title>
</head>
<body>
<body>
    <div class="container">
        <h2>Inscription au Concours IAI-TOGO</h2>

        <!-- Le formulaire d'inscription -->
        <form action="process_registration.php" method="post" enctype="multipart/form-data">
            <!-- Ajoutez les champs nécessaires du formulaire ici -->
            <label for="nom">Nom :</label>
            <input type="text" name="nom" required>

            <label for="prenom">Prénom :</label>
            <input type="text" name="prenom" required>

            <!-- Ajoutez d'autres champs du formulaire ici -->

            <label for="photo">Photo :</label>
            <input type="file" name="photo" accept=".jpg, .jpeg, .png" required>

            <label for="date_naissance">Date de Naissance :</label>
            <input type="date" name="date_naissance" required>

            <label for="sexe">Sexe :</label>
            <select name="sexe" required>
                <option value="M">Masculin</option>
                <option value="F">Féminin</option>
            </select>

            <!-- Ajoutez d'autres champs du formulaire ici -->

            <label for="nationalite">Nationalité :</label>
            <input type="text" name="nationalite" required>

            <label for="annee_bac">Année d'obtention du BAC II :</label>
            <input type="text" name="annee_bac" required>

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

            <!-- Zone de confirmation -->
            <label for="confirmation">Confirmez toutes les informations :</label>
            <input type="checkbox" name="confirmation" required>

            <!-- Bouton de soumission -->
            <button type="submit" name="submit">Soumettre</button>
        </form>
    </div>
</body>
</html>