<?php
session_start();

// Vérifier si les champs du formulaire sont soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier les informations d'identification (ici, elles sont statiques, mais dans une application réelle, vous les vérifieriez dans une base de données)
    $username = "utilisateur"; // Remplacez par le nom d'utilisateur réel
    $password = "motdepasse"; // Remplacez par le mot de passe réel

    // Vérification des informations saisies
    if ($_POST['username'] == $username && $_POST['password'] == $password) {
        // Authentification réussie
        $_SESSION['username'] = $username;

        // Redirection vers la page d'accueil après connexion réussie
        header("Location: index.php");
        exit;
    } else {
        // En cas d'informations incorrectes, afficher un message d'erreur
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Création de compte</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
        <h1>Créer un compte</h1>
        <form action="creationctraite.php" method="POST">
        <input type="text" name="nom_utilisateur" placeholder="Nom d'utilisateur"><br>
        <input type="password" name="mot_de_passe" placeholder="Mot de passe"><br>
        <input type="password" name="confirmation_mot_de_passe" placeholder="Confirmez le mot de passe"><br>
        <input type="submit" value="Creer un compte">
    </form>

    </body>
</html>