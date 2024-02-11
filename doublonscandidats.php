<?php
include 'includes/config.php';
include 'includes/concours_functions.php';
session_start();

// Récupération des informations sur le concours depuis la base de données
$sql = "SELECT * FROM infos_concours ORDER BY id DESC LIMIT 1";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    $row = $result->fetch_assoc();
    $dateConcours = $row['date_concours'];
    $dateLimiteDepot = $row['date_limite_depot'];
} else {
    // En cas d'erreur ou si aucune information n'est disponible
    $dateConcours = "Non défini";
    $dateLimiteDepot = "Non défini";
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

// Vérifie si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupère les nouvelles dates depuis le formulaire
    $newApplicationDeadline = $_POST["application_deadline"];
    $newCompetitionDate = $_POST["competition_date"];

    // Met à jour les dates dans la base de données
    if (updateConcoursDates($conn, $newApplicationDeadline, $newCompetitionDate)) {
        // Succès : Met à jour les variables affichées
        $currentApplicationDeadline = $newApplicationDeadline;
        $currentCompetitionDate = $newCompetitionDate;
    } else {
        // Échec de la mise à jour
        echo "Erreur lors de la mise à jour des dates dans la base de données.";
    }
}

// Récupération des totaux des candidats par nationalité
$totalCandidatesByNationality = array();
$sql = "SELECT nationalite, COUNT(*) as total FROM candidats GROUP BY nationalite";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalCandidatesByNationality[$row['nationalite']] = $row['total'];
    }
}

// Calcul de la somme totale des candidats par nationalité
$totalCandidatesByNationalitySum = array_sum($totalCandidatesByNationality);

// Récupération des totaux des candidats par série
$totalCandidatesBySeries = array();
$sql = "SELECT serie_bac, COUNT(*) as total FROM candidats GROUP BY serie_bac";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $totalCandidatesBySeries[$row['serie_bac']] = $row['total'];
    }
}

// Calcul de la somme totale des candidats par série
$totalCandidatesBySeriesSum = array_sum($totalCandidatesBySeries);

// Récupération des totaux des candidats par sexe
$totalCandidatesBySex = array();
$sqlSex = "SELECT sexe, COUNT(*) as total FROM candidats GROUP BY sexe";
$resultSex = $conn->query($sqlSex);

if ($resultSex->num_rows > 0) {
    while ($row = $resultSex->fetch_assoc()) {
        $totalCandidatesBySex[$row['sexe']] = $row['total'];
    }
}

// Calcul de la somme totale des candidats par sexe
$totalCandidatesBySexSum = array_sum($totalCandidatesBySex);


//$conn->close();
?>



<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord</title>
    <link rel="stylesheet" href="../ADMIN/style.css">
    <link rel="stylesheet" href="../ADMIN/responsive.css">
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->
   

</head>
<style>
       body {
    background-color:darkgrey;
}

.container {
            background-color: #ffffff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 20px;
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

.btn-primary,
.btn-secondary {
    width: 100%;
}

/* Styles pour le tableau des candidats */
.container {
    margin-top: 20px;
    background-color: #ffffff;
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
}

.container h2 {
    margin-bottom: 20px;
}

.table {
    width: 100%;
    border-collapse: collapse;
}

.table th,
.table td {
    padding: 10px;
    border: 1px solid #ddd;
    text-align: left;
}

.table th {
    background-color: #f2f2f2;
    font-weight: bold;
}

.table td {
    font-size: 14px;
}

.table tbody tr:nth-child(even) {
    background-color: #f9f9f9;
}

.table tbody tr:hover {
    background-color: #f2f2f2;
}


/* Styles pour les champs de saisie (input) */
input {
    width: 100%;
    padding: 10px;
    margin-bottom: 10px;
    border: 1px solid #ccc;
    border-radius: 5px;
    box-sizing: border-box;
}

/* Styles spécifiques pour les boutons */
.btn-primary,
.btn-secondary {
    width: 100%;
    padding: 10px;
    color: #ffffff;
    background-color: #3498db; /* Couleur du fond du bouton primaire */
    border: 1px solid #2980b9; /* Bordure du bouton primaire */
    border-radius: 5px;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.btn-secondary {
    background-color: #95a5a6; /* Couleur du fond du bouton secondaire */
    border: 1px solid #7f8c8d; /* Bordure du bouton secondaire */
}

/* Ajout d'un style de survol pour les boutons */
.btn-primary:hover,
.btn-secondary:hover {
    background-color: #2c3e50; /* Nouvelle couleur du fond au survol */
}


    </style>

<body>

    <header>

        <div class="logosec">
            <div class="logo">IAI-TOGO</div>
            <img src="../img/icone.png" class="icn menuicn" id="menuicn" alt="menu-icon">
        </div>

        <div class="searchbar">
            <input type="text" placeholder="Rechercher">
            <div class="searchbtn">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn srchicn" alt="search-icon">
            </div>
        </div>

        <div class="message">
            <div class="circle"></div>
            <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn" alt="">
            <div class="dp">
                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180014/profile-removebg-preview.png" class="dpicn" alt="dp">
            </div>
        </div>

        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    </header>

    <div class="main-container">
                <div class="navcontainer">
                    <nav class="nav"> 
                        <div class="nav-upper-options"> 
                            <div class="nav-option option1"> 
                                <a href="../ADMIN/dashboard.php">
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210182148/Untitled-design-(29).png"
                                    class="nav-img"
                                    alt="dashboard"> 
                                    <h2 class="title-box">Dashboard</h2> 
                                </a>
                                
                            </div> 

                            <div class="option2 nav-option"> 
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183322/9.png"
                                    class="nav-img"
                                    alt="articles"> 
                                <h3>Candidats Inscrits</h3> 
                            </div> 

                            <div class="nav-option option3">
                                <a href="../ADMIN/candidatparsexe.php">
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/5.png"
                                    class="nav-img"
                                    alt="report"> 
                                <h3>Candidats par sexes</h3>
                                </a> 
                                
                            </div> 

                            <div class="nav-option option4"> 
                                <a href="../ADMIN/candidatparnationalite.php">
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/6.png"
                                    class="nav-img"
                                    alt="institution"> 
                                <h3>Candidats par nationnalité</h3> 
                                </a>
                                
                            </div> 

                            <div class="nav-option option5"> 
                                <a href="../ADMIN/doublonscandidats.php">
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183323/10.png"
                                    class="nav-img"
                                    alt="blog"> 
                                <h3>doublons des Candidats </h3>
                                </a>
                                
                            </div> 

                            <div class="nav-option option6"> 
                                <a href="../ADMIN/docnontelecharg.php">
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183320/4.png"
                                    class="nav-img"
                                    alt="settings"> 
                                <h3>Docs non téléchargés</h3> 
                                </a>
                               
                            </div> 

                            <div class="nav-option logout"> 
                                <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210183321/7.png"
                                    class="nav-img"
                                    alt="logout"> 
                                    <a href="../ADMIN/logout.php"><h3>Logout</h3> </a>
 
                            </div> 
                        </div> 
                    </nav>   
                        
            </div>
        

        <div class="main">
            <!-- <div class="searchbar2">
                <input type="text" name="" id="" placeholder="Rechercher">
                <div class="searchbtn">
                    <img src="https://media.geeksforgeeks.org/wp-content/uploads/20221210180758/Untitled-design-(28).png" class="icn srchicn" alt="search-button">
                </div>
            </div> -->

                <div class="box-container">
                    <div class="box box1">
                        <div class="text">
                            <h2 class="topic-heading">
                                <?php
                                $totalCandidates = getTotalCandidates($conn);
                                echo $totalCandidates;
                                ?>
                            </h2>
                            <h2 class="topic">Candidats Inscrits</h2>
                        </div>
                    </div>

                <div class="box box2">
                <div class="text">
                    <h2 class="topic-heading"><?php echo $totalCandidatesByNationalitySum; ?></h2>
                    <h2 class="topic">Candidats inscrits par nationalité</h2>
                    <ul>
                        <?php foreach ($totalCandidatesByNationality as $nationalite => $total) : ?>
                            <li><?php echo $nationalite . ': ' . $total; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>

                <div class="box box3">
                    <div class="text">
                        <h2 class="topic-heading"><?php echo $totalCandidatesBySeriesSum; ?></h2>
                        <h2 class="topic">Candidats inscrits par série</h2>
                        <ul>
                            <?php foreach ($totalCandidatesBySeries as $serie => $total) : ?>
                                <li><?php echo $serie . ': ' . $total; ?></li>
                            <?php endforeach; ?>
                        </ul>
                </div>
</div>

            <div class="box box4">
                <div class="text">
                    <?php
                    $candidatesBySexe = getCandidatesBySexe($conn);
                    foreach ($candidatesBySexe as $sexe => $total) {
                        echo "<h2 class='topic-heading'>$total</h2>";
                        echo "<h2 class='topic'>Candidats inscrits $sexe</h2>";
                    }
                    ?>
                </div>
            </div>


            </div>

        
            <div class="container">
                <h2>Doublons des candidats</h2>
                <div class="table-container">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Prénom</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            // Assurez-vous que les données des doublons de candidats sont correctement récupérées
                            $sqlDoublons = "SELECT nom, prenom, COUNT(*) as count FROM candidats GROUP BY nom, prenom HAVING count > 1";
                            $resultDoublons = $conn->query($sqlDoublons);

                            if ($resultDoublons->num_rows > 0) {
                                while ($rowDoublon = $resultDoublons->fetch_assoc()) {
                                    echo "<tr>";
                                    echo "<td>" . $rowDoublon['nom'] . "</td>";
                                    echo "<td>" . $rowDoublon['prenom'] . "</td>";
                                    echo "</tr>";
                                }
                            } else {
                                echo "<tr><td colspan='2'>Aucun doublon de candidat trouvé.</td></tr>";
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>


<script>
        <?php
                    // Vérifie si le formulaire a été soumis
            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                // Récupère les nouvelles dates depuis le formulaire
                $newApplicationDeadline = $_POST["application_deadline"];
                $newCompetitionDate = $_POST["competition_date"];

                // Met à jour les dates dans la base de données
                $updateMessage = updateConcoursDates($conn, $newApplicationDeadline, $newCompetitionDate);

                // Affiche le message de confirmation en JavaScript
                echo "
                    <script>
                        window.onload = function() {
                            alert('" . $updateMessage . "');
                        }
                    </script>
                ";
            }

        ?>
</script>


            </div>
        </div>

        <script src="./index.js"></script>
  </body>

</html>
