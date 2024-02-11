<?php
include 'config.php';
include 'utils.php';

// Vérifier la connexion à la base de données
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Vérifier si le formulaire de modification a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['submit'])) {
    // Récupération des données du formulaire
    $candidat_id = $conn->real_escape_string($_POST['candidat_id']);
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    // Ajoutez d'autres champs du formulaire ici

    // Vérifier la confirmation
    if (!isset($_POST['confirmation'])) {
        // Afficher un message d'erreur si la confirmation n'est pas cochée
        echo '<script>alert("Veuillez confirmer les modifications."); history.back();</script>';
        exit();
    }

    // Utiliser une requête préparée pour éviter les injections SQL
    $query = $conn->prepare("UPDATE candidats 
                             SET nom = ?, prenom = ? 
                             WHERE id = ?");
    $query->bind_param("ssi", $nom, $prenom, $candidat_id);

    if ($query->execute()) {
        // Afficher un message de succès en utilisant une boîte de dialogue JavaScript
        echo '<script>alert("Modification effectuée avec succès."); window.location.href = "consulter_candidature.php";</script>';
        exit();
    } else {
        // Gérer les erreurs de mise à jour dans la base de données
        echo '<script>alert("Une erreur est survenue lors de la modification. Veuillez réessayer."); history.back();</script>';
        exit();
    }

    // Fermer la requête préparée
    $query->close();
}

// Fermer la connexion à la base de données
$conn->close();
?>
