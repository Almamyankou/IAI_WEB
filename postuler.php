<?php
$mysqli = new mysqli('localhost', 'root', '', 'iai-web');

if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST["nom"];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    $sexe = $_POST['sexe'];
    $nationalite = $_POST['nationalite'];
    $annee_bac = $_POST['annee_bac'];
    $serie = $_POST['serie'];

    $photo = file_get_contents($_FILES['photo']['tmp_name']);
    $document_naissance = file_get_contents($_FILES['document_naissance']['tmp_name']);
    $document_nationalite = file_get_contents($_FILES['document_nationalite']['tmp_name']);
    $document_bac = file_get_contents($_FILES['document_bac']['tmp_name']);

    $stmt = $mysqli->prepare("INSERT INTO candidats (nom, prenom, photo, date_naissance, sexe, nationalite, annee_bac, serie, document_naissance, document_nationalite, document_bac) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param('ssbssissssb', $nom, $prenom, $photo, $date_naissance, $sexe, $nationalite, $annee_bac, $serie, $document_naissance, $document_nationalite, $document_bac);

    if ($stmt->execute()) {
        echo 'Votre candidature a été prise en compte.';
    } else {
        echo 'Erreur lors de l\'inscription : ' . $mysqli->error;
    }

    $stmt->close();
}

$mysqli->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Formulaire d'inscription au concours</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .jaune{
            background-color: #FFDB58;

        }
    .center-box {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 25cm;
      align-content: center;
    }
    .background-section {
          width: 100%;
          height: 10cm;
          background-image: url('galerie23.jpg');
          background-size: cover; /* Ajuste la taille de l'image pour couvrir tout le conteneur */
          background-position: center; /* Centre l'image horizontalement et verticalement */
          background-repeat: no-repeat; /* Évite la répétition de l'image */
          color:green;
          text-decoration: solid;
        }
  </style>
</head>
<body class="background-section" >

<div class="container mt-5">
    <div class="jaune" class="card">
        <div class="card-body">
            <h5 class="card-title text-center">Formulaire demande de candidature</h5>
            <form  action="postuler.php" method="POST" enctype="multipart/form-data">
                <label for="NOM">NOM*</label>
                <div class="mb-3">
                    <input type="text" class="form-control" name="nom" placeholder="Nom" required>
                </div>
                <label for="Prenom">Prenom(s)*</label>
                <div class="mb-3">
                    <input type="text" class="form-control" name="prenom" placeholder="Prénom" required>
                </div>
                <label for="Photo">Photo Passport*</label>
                <div class="mb-3">
                    <input type="file" class="form-control" name="photo" required placeholder="PHOTO">
                </div>
                <label for="date_naissance">Date de naissance*</label>
                <div class="mb-3">
                    <input type="date" class="form-control" name="date_naissance" required>
                </div>
                <label for="SEXE">Sexe*</label>
                <div class="mb-3">
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sexe" value="M" required>
                        <label class="form-check-label">Masculin</label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input type="radio" class="form-check-input" name="sexe" value="F" required>
                        <label class="form-check-label">Féminin</label>
                    </div>
                </div>
                <label for="nationalite">Nationalité*</label>
                <div class="mb-3">
                    <input type="text" class="form-control" name="nationalite" placeholder="Nationalité" required>
                </div>
                <label for="nationalite">Nationalité*</label>
                <div class="mb-3">
                    <input type="number" class="form-control" name="annee_bac" placeholder="Année BAC II" required>
                </div>
                <div class="mb-3">
                    <select class="form-select" name="serie" required>
                        <option value="C">C</option>
                        <option value="D">D</option>
                        <option value="E">E</option>
                        <option value="F1">F1</option>
                        <option value="F2">F2</option>
                    </select>
                </div>
                <label for="pdf_naissance">Document naissance</label>
                <div class="mb-3">
                    <input type="file" class="form-control" name="document_naissance" required>
                </div>
                <label for="pdf_Nationalite">Document nationalite</label>
                <div class="mb-3">
                    <input type="file" class="form-control" name="document_nationalite" required>
                </div>
                <label for="pdf_Bac">Document bac</label>
                <div class="mb-3">
                    <input type="file" class="form-control" name="document_bac" required>
                </div>
                <div class="mb-3">
                    <button type="submit" class="btn btn-success">Postuler au concours</button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>


