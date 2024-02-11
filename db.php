<?php
// Vos paramètres de connexion à la base de données
$servername = "";  
$usernameDB = "root";
$passwordDB = "";
$dbname = "iai_togo_db";

// Connexion à la base de données
$conn = new mysqli($servername, $usernameDB, $passwordDB, $dbname);

// Vérifier la connexion
if ($conn->connect_error) {
    die("La connexion à la base de données a échoué : " . $conn->connect_error);
}
?>
