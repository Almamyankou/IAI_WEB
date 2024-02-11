<?php
include ('config.php');
include("utils.php");


if (isset($_GET['id'])) {
    $candidat_id = $_GET['id'];

    // Requête préparée pour éviter les injections SQL
    $query = "SELECT * FROM candidats WHERE id = ?";
    
    $stmt = $conn->prepare($query);
    $stmt->bind_param("i", $candidat_id);

    if ($stmt->execute()) {
        $result = $stmt->get_result();
        $candidat = $result->fetch_assoc();
        
        // Vérifier si le candidat existe
        if (!$candidat) {
            die("Candidat non trouvé");
        }
    } else {
        // Gérer l'erreur de requête
        die("Erreur de requête : " . $stmt->error);
    }
    
    // Fermer la déclaration préparée
    $stmt->close();
} else {
    // Rediriger vers la page principale si l'ID n'est pas spécifié
    header("Location:dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultation de la Candidature</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Styles CSS personnalisés -->
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: darkgray;
            padding: 20px;
        }

        /* En-tête avec le logo, le titre et les liens */
        #header {
            background-color: transparent;
            border-bottom: 2px solid #ccc;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        #candidature-container {
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        #photo-container {
            text-align: center;
        }

        #photo {
            max-width: 200px;
            height: auto;
            border-radius: 5px;
            margin-top: 10px;
        }

        .form-group {
            margin-bottom: 20px;
        }

        .btn {
            border-radius: 15px;
        }

        table {
            width: 100%;
        }

        th,
        td {
            padding: 10px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
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
        <h2 class="text-center mb-4">Consultation de la Candidature</h2>
        <div id="candidature-container">
            <table>
                <tr>
                    <th>Nom complet</th>
                    <td><?php echo $candidat['nom'] . ' ' . $candidat['prenom']; ?></td>
                </tr>
                <tr>
                    <th>Date de Naissance</th>
                    <td><?php echo $candidat['date_naissance']; ?></td>
                </tr>
                <tr>
                    <th>Sexe</th>
                    <td><?php echo ($candidat['sexe'] == 'M') ? 'Masculin' : 'Féminin'; ?></td>
                </tr>
                <tr>
                    <th>Nationalité</th>
                    <td><?php echo $candidat['nationalite']; ?></td>
                </tr>
                <tr>
                    <th>Année d'obtention du BAC II</th>
                    <td><?php echo $candidat['annee_bac']; ?></td>
                </tr>
                <tr>
                    <th>Série BAC</th>
                    <td><?php echo $candidat['serie_bac']; ?></td>
                </tr>
            </table>

            <div class="text-center">
                <a href="modifier_candidature.php?id=<?php echo $candidat['id']; ?>" class="btn btn-primary">Modifier candidature</a>
                <button class="btn btn-danger" data-toggle="modal" data-target="#confirmationModal">Supprimer candidature</button>
            </div>
        </div>
    </div>

    <div class="modal fade" id="confirmationModal" tabindex="-1" role="dialog" aria-labelledby="confirmationModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="confirmationModalLabel">Confirmation de suppression</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    Êtes-vous sûr de vouloir supprimer cette candidature ?
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Annuler</button>
                    <a href="supprimer_candidature.php?id=<?php echo $candidat['id']; ?>" class="btn btn-danger">Supprimer</a>
                </div>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
