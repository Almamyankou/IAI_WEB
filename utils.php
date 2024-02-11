<?php
// Fonction pour obtenir le nom de l'utilisateur à partir de la session
function getUserName() {
    // Vérifier si la session n'est pas déjà démarrée
    if (session_status() == PHP_SESSION_NONE) {
        // Démarrer la session
        session_start();
    }

    // Vérifier si l'index 'nom_utilisateur' est défini dans la session
    if (isset($_SESSION['nom_utilisateur'])) {
        // Retourner le nom d'utilisateur
        return $_SESSION['nom_utilisateur'];
    } else {
        // Retourner une valeur par défaut ou gérer l'absence du nom d'utilisateur
        return "Utilisateur inconnu";
    }
}

// Fonction pour établir une connexion à la base de données
function connecterBaseDeDonnees() {
    // Remplacez ces informations par les vôtres
    $serveur = "localhost";
    $utilisateur = "root";
    $motDePasse = "";
    $nomBaseDeDonnees = "iai_togo_db";

    $connexion = new mysqli($serveur, $utilisateur, $motDePasse, $nomBaseDeDonnees);

    // Vérifier la connexion
    if ($connexion->connect_error) {
        die("Échec de la connexion à la base de données : " . $connexion->connect_error);
    }

    return $connexion;
}

// Fonction pour obtenir l'ID du candidat à partir du nom d'utilisateur
function obtenirIdCandidat($nomUtilisateur) {
    $connexion = connecterBaseDeDonnees();

    $requete = "SELECT id FROM utilisateurs WHERE nom_utilisateur = ?";
    $stmt = $connexion->prepare($requete);
    $stmt->bind_param("s", $nomUtilisateur);
    $stmt->execute();
    $stmt->bind_result($id);
    $stmt->fetch();
    $stmt->close();

    return $id;
}

// Fonction pour vérifier si le candidat a déjà postulé
function candidatAdejaPostule($idCandidat) {
    $connexion = connecterBaseDeDonnees();

    $requete = "SELECT COUNT(*) AS total FROM candidats WHERE id = ?";
    $stmt = $connexion->prepare($requete);
    $stmt->bind_param("i", $idCandidat);
    $stmt->execute();
    $stmt->bind_result($total);
    $stmt->fetch();
    $stmt->close();

    return ($total > 0);
}
?>
