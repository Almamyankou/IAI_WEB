<?php
session_start();

// Vérifier si les champs du formulaire sont soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier les informations d'identification (ici, elles sont statiques, mais dans une application réelle, vous les vérifieriez dans une base de données)
    $username = "nom_utilisateur"; // Remplacez par le nom d'utilisateur réel
    $password = "mot_de_passe"; // Remplacez par le mot de passe réel

    // Vérification des informations saisies
    if ($_POST['nom_utilisateur'] == $username && $_POST['mot_de_passe'] == $password) {
        // Authentification réussie
        $_SESSION['nom_utilisateur'] = $username;

        // Redirection vers la page d'accueil après connexion réussie
        header("Location: index2.php");
        exit;
    } else {
        // En cas d'informations incorrectes, afficher un message d'erreur
        echo "Nom d'utilisateur ou mot de passe incorrect.";
    }
}
?>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
    <style>
    .center-box {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 25cm;
      align-content: center;
      background-color:green;
    }
  </style>
</head>
    <body>
        <div class="container center-box"  >
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">connexion</h5>
                    <form  class="container" action="traitementadmin.php" method="post">
                        <label for="nom_utilisateur_">Username</label>     
                        <input type="text" id="nom_utilisateur" name="nom_utilisateur" required > <br>
                        <label for="mot_de_passe">Password</label>      
                        <input type="password" id="mot_de_passe" name="mot_de_passe" required ><br>
                        <button type= "submit" class="btn btn-primary" value="Se connecter">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
</html>    