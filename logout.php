<?php
session_start();

// Détruire toutes les données de session
session_destroy();

// Rediriger vers la page de connexion ou une autre page
header("Location: login.php"); // Remplacez "login.php" par l'URL de votre choix
exit;
?>
