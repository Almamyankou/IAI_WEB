<?php
// Connexion à la base de données
$mysqli = new mysqli('localhost', 'root', '', 'iai-web.compte');

// Vérification de la connexion
if ($mysqli->connect_error) {
    die('Erreur de connexion à la base de données : ' . $mysqli->connect_error);
}

// Récupération des données du formulaire
$nom_utilisateur = $_POST['nom_utilisateur'];
$mot_de_passe = $_POST['mot_de_passe'];
$confirmation_mot_de_passe = $_POST['confirmation_mot_de_passe'];

// Vérification si les mots de passe correspondent
if ($mot_de_passe !== $confirmation_mot_de_passe) {
    echo "Les mots de passe ne correspondent pas.";
} else {
    // Hash du mot de passe avant l'insertion dans la base de données (utilisez plutôt les fonctions de hachage modernes comme password_hash())
    $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

    // Requête d'insertion dans la base de données
    $sql = "INSERT INTO compte (nom_utilisateur, mot_de_passe) VALUES ('$nom_utilisateur', '$mot_de_passe_hash')";

    if ($mysqli->query($sql) === true) {
        echo 'creation de compte réussie.';
        header("Location: index2.php");
        exit;

    } else {
        echo 'Erreur lors de creation du compte : ' . $mysqli->error;
    }
}

// Fermeture de la connexion
$mysqli->close();
?>
