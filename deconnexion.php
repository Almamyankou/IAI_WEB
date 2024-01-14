<?php
session_start();
?>
<?php
session_unset();
session_destroy();

// Rediriger vers la page d'accueil
header("Location: index.php");
exit;
?>
