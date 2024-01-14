<?php
session_start();

if (!isset($_SESSION['authenticated']) || $_SESSION['authenticated'] !== true) {
    header('Location: ../login.php');
    exit;
}
?>
<?php
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', '', 'iai-web');

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
}

// Requêtes SQL pour obtenir les données
$queryTotal = "SELECT COUNT(*) AS total FROM candidats";
$queryNationalite = "SELECT nationalite, COUNT(*) AS total FROM candidats GROUP BY nationalite";
$querySerie = "SELECT serie, COUNT(*) AS total FROM candidats GROUP BY serie";
$querySexe = "SELECT sexe, COUNT(*) AS total FROM candidats GROUP BY sexe";
$queryDoublons = "SELECT nom, prenom, COUNT(*) AS doublons FROM candidats GROUP BY nom, prenom HAVING COUNT(*) > 1";
$queryDocumentsManquants = "SELECT COUNT(*) AS total FROM candidats WHERE document_uploade IS NULL";

// Exécution des requêtes SQL
$resultTotal = $mysqli->query($queryTotal);
$resultNationalite = $mysqli->query($queryNationalite);
$resultSerie = $mysqli->query($querySerie);
$resultSexe = $mysqli->query($querySexe);
$resultDoublons = $mysqli->query($queryDoublons);
$resultDocumentsManquants = $mysqli->query($queryDocumentsManquants);

// Récupération des données dans des variables PHP
$totalInscrits = $resultTotal->fetch_assoc()['total'];
// ... Récupération des autres résultats de requêtes SQL ...
?>


<!DOCTYPE html>
<html>
<head>
    <title>Tableau de bord - Espace Administration</title>
</head>
<body>
    <h1>Tableau de bord - Espace Administration</h1>
    <p>Bienvenue dans l'espace d'administration.</p>
    <a href="stats.php">Voir les statistiques</a>
</body>
</html>