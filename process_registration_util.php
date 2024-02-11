<?php
include 'config.php';

// Vérifier si le formulaire d'inscription a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire (adaptez cela en fonction de votre formulaire)
    $nom_utilisateur = $conn->real_escape_string($_POST['username']);
    $mot_de_passe = $conn->real_escape_string($_POST['password']);

    try {
        // Vérifier si le nom d'utilisateur est déjà pris
        $check_query = "SELECT id FROM utilisateurs WHERE nom_utilisateur = '$nom_utilisateur'";
        $check_result = $conn->query($check_query);

        if ($check_result === false) {
            throw new Exception("Erreur lors de la vérification du nom d'utilisateur : " . $conn->error);
        }

        if ($check_result->num_rows > 0) {
            // Le nom d'utilisateur est déjà pris, renvoyer un message d'erreur
            echo json_encode(['success' => false, 'message' => 'Le nom d\'utilisateur est déjà pris. Veuillez en choisir un autre.']);
            exit();
        } else {
            // Hasher le mot de passe (assurez-vous d'utiliser des méthodes de hachage sécurisées en production)
            $mot_de_passe_hash = password_hash($mot_de_passe, PASSWORD_DEFAULT);

            // Utiliser une requête préparée pour éviter les injections SQL
            $stmt = $conn->prepare("INSERT INTO utilisateurs (nom_utilisateur, mot_de_passe) VALUES (?, ?)");
            if (!$stmt) {
                throw new Exception("Erreur de préparation de la requête : " . $conn->error);
            }

            $stmt->bind_param("ss", $nom_utilisateur, $mot_de_passe_hash);

            if ($stmt->execute()) {
                // Fermer la connexion à la base de données
                $stmt->close();

                // Démarrer la session
                session_start();
                $_SESSION['nom_utilisateur'] = $nom_utilisateur;  // Stocker le nom d'utilisateur dans la session

                // Renvoyer un message de succès
                echo json_encode(['success' => true, 'message' => 'Inscription réussie!']);
                exit();
            } else {
                // En cas d'échec, renvoyer un message d'erreur
                echo json_encode(['success' => false, 'message' => 'Erreur lors de l\'inscription. Veuillez réessayer.']);
                exit();
            }
        }
    } catch (Exception $e) {
        echo json_encode(['success' => false, 'message' => $e->getMessage()]);
        exit();
    }
}

// Fermer la connexion à la base de données
//$conn->close();
?>
