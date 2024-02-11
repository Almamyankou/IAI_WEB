<?php
include 'config.php';
include("utils.php");


// Vérifier si l'ID du candidat à supprimer est fourni
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $candidat_id = $_GET['id'];

    // Requête préparée pour supprimer le candidat
    $sql = "DELETE FROM candidats WHERE id = ?";
    
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $candidat_id);
    
    if ($stmt->execute()) {
        echo "Candidature supprimée avec succès";
    } else {
        echo "Erreur lors de la suppression de la candidature : " . $stmt->error;
    }

    // Fermer la déclaration préparée
    $stmt->close();
} else {
    echo "ID de candidat non valide";
}

// Fermer la connexion à la base de données
$conn->close();
?>
