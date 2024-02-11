<?php
session_start();

if (!isset($_SESSION['admin_username'])) {
    header("Location: ../ADMIN/login.php");
    exit;
}

require_once('../config.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Traitement du formulaire
    $applicationDeadline = $_POST['application_deadline'];
    $competitionDate = $_POST['competition_date'];

    // Assurez-vous que les dates sont au bon format
    $applicationDeadline = date('Y-m-d', strtotime($applicationDeadline));
    $competitionDate = date('Y-m-d', strtotime($competitionDate));

    // Mettez à jour les dates dans la table infos_concours
    $sql = "UPDATE infos_concours SET date_limite_depot = '$applicationDeadline', date_concours = '$competitionDate' WHERE id = 1";

    if ($conn->query($sql) === TRUE) {
        echo "Dates mises à jour avec succès.";
    } else {
        echo "Erreur lors de la mise à jour des dates : " . $conn->error;
    }
}

// Récupérer les dates actuelles depuis la table infos_concours
$sql = "SELECT date_limite_depot, date_concours FROM infos_concours WHERE id = 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $currentApplicationDeadline = $row['date_limite_depot'];
    $currentCompetitionDate = $row['date_concours'];
} else {
    $currentApplicationDeadline = "";
    $currentCompetitionDate = "";
}

$conn->close();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Configurer les dates</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    <!-- Ajout du style personnalisé -->
    <style>
        body {
            background-color: #f8f9fa;
        }

        .container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            max-width: 600px; /* Nouvelle largeur du formulaire */
            margin: auto; /* Centre le formulaire */
            margin-top: 50px; /* Ajuste la marge supérieure */
        }

        .title-box {
            background-color: #88b9ec;
            color: #ffffff;
            padding: 10px;
            border-radius: 5px;
            text-align: center;
            margin-bottom: 20px;
        }

        h1 {
            margin-top: 0;
        }

        label {
            font-weight: bold;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn-primary, .btn-secondary {
            width: 100%; /* Boutons avec la même largeur que les champs de saisie */
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="title-box">
            <h1>Configurer les dates du concours</h1>
        </div>

        <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
            <div class="form-group">
                <label for="application_deadline">Date limite de candidature :</label>
                <input type="date" class="form-control" id="application_deadline" name="application_deadline" value="<?php echo $currentApplicationDeadline; ?>" required>
            </div>
            
            <div class="form-group">
                <label for="competition_date">Date du concours :</label>
                <input type="date" class="form-control" id="competition_date" name="competition_date" value="<?php echo $currentCompetitionDate; ?>" required>
            </div>

            <button type="submit" class="btn btn-primary">Mettre à jour les dates</button>
        </form>

        <a href="ADMIN/dashboard.php" class="btn btn-secondary mt-3">Retour au tableau de bord</a>
    </div>
</body>
</html>

