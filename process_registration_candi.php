<?php
include 'config.php';
include 'utils.php';

// Vérifier la connexion à la base de données
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}

// Assurez-vous que le répertoire d'upload existe, sinon créez-le
$uploadDirectory = 'uploads/';
if (!file_exists($uploadDirectory) && !is_dir($uploadDirectory)) {
    mkdir($uploadDirectory, 0755, true);
    chmod($uploadDirectory, 0755);
}

// Vérifier si le formulaire d'inscription a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $conn->real_escape_string($_POST['nom']);
    $prenom = $conn->real_escape_string($_POST['prenom']);
    $date_naissance = $conn->real_escape_string($_POST['date_naissance']);
    $sexe = $conn->real_escape_string($_POST['sexe']);
    $nationalite = $conn->real_escape_string($_POST['nationalite']);
    $annee_bac = $conn->real_escape_string($_POST['annee_bac']);
    $serie_bac = $conn->real_escape_string($_POST['serie_bac']);

    // Traitement des fichiers téléchargés
    $uploadDir = 'uploads/';  // Répertoire où les fichiers seront stockés
    $photo = $uploadDir . basename($_FILES['photo']['name']);
    $copie_naissance = $uploadDir . basename($_FILES['copie_naissance']['name']);
    $copie_nationalite = $uploadDir . basename($_FILES['copie_nationalite']['name']);
    $attestation_bac = $uploadDir . basename($_FILES['attestation_bac']['name']);

    // Utiliser une requête préparée pour éviter les injections SQL
    $query = $conn->prepare("INSERT INTO candidats (nom, prenom, photo, date_naissance, sexe, nationalite, annee_bac, serie_bac, copie_naissance, copie_nationalite, attestation_bac)
                             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");
    $query->bind_param("sssssssssss", $nom, $prenom, $photo, $date_naissance, $sexe, $nationalite, $annee_bac, $serie_bac, $copie_naissance, $copie_nationalite, $attestation_bac);

    // Déplacer les fichiers téléchargés vers le répertoire d'upload
    move_uploaded_file($_FILES['photo']['tmp_name'], $photo);
    move_uploaded_file($_FILES['copie_naissance']['tmp_name'], $copie_naissance);
    move_uploaded_file($_FILES['copie_nationalite']['tmp_name'], $copie_nationalite);
    move_uploaded_file($_FILES['attestation_bac']['tmp_name'], $attestation_bac);

    if ($query->execute()) {
        // Démarrez la session
        session_start();

        // Définissez une variable de session pour indiquer que la candidature a été soumise
        $_SESSION['candidatureSoumise'] = true;

        // Affichez un message de confirmation dans la console pour le débogage
        echo json_encode(['success' => true, 'candidat_id' => $conn->insert_id]);
        exit();
    } else {
        // Gérez les erreurs d'insertion dans la base de données
        echo json_encode(['success' => false, 'error' => $query->error]);
        exit();
    }

    // Fermer la requête préparée
    $query->close();
}

// Fermer la connexion à la base de données
$conn->close();
?>
