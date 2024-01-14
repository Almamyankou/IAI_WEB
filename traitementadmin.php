<?php
session_start();
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', '', 'iai-web.compteadmin');

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
}

// Récupération des données du formulaire
$nom_utilisateur = $_POST['nom_utilisateur'];
$mot_de_passe = $_POST['mot_de_passe'];

// Requête pour récupérer le mot de passe associé à l'utilisateur
$sql = "SELECT id, mot_de_passe FROM compte WHERE nom_utilisateur = '$nom_utilisateur'";
$resultat = $mysqli->query($sql);

if ($resultat->num_rows == 1) {
    $row = $resultat->fetch_assoc();
    if (password_verify($mot_de_passe, $row['mot_de_passe'])) {
        echo 'Connexion réussie.';
        header("Location: index2.php");
        exit();

        // Vous pouvez stocker les informations de l'utilisateur dans la session
        // $_SESSION['id_utilisateur'] = $row['id'];
    } else {
        echo 'Mot de passe incorrect.';
    }
} else {
    echo 'Utilisateur non trouvé.';
}

// Fermeture de la connexion
$mysqli->close();
?>