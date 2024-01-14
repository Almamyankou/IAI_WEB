<?php
session_start();

// Vérifier si les champs du formulaire sont soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Vérifier les informations d'identification (ici, elles sont statiques, mais dans une application réelle, vous les vérifieriez dans une base de données)
    $username = "utilisateur"; // Remplacez par le nom d'utilisateur réel
    $password = "mot_de_passe"; // Remplacez par le mot de passe réel

    // Vérification des informations saisies
    if ($_POST['utilisateur'] == $username && $_POST['mot_de_passe'] == $password) {
        // Authentification réussie
        $_SESSION['utilisateur'] = $username;

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
        .jaune{
            background-color:#FFDB58 ;

        }
    .center-box {
      display: flex;
      justify-content: center;
      align-items: center;
      height: 15cm;
      align-content: center;
    }
    .background-section {
          width: 100%;
          height: 10cm;
          background-image: url('galerie12.jpg');
          background-size: cover; /* Ajuste la taille de l'image pour couvrir tout le conteneur */
          background-position: center; /* Centre l'image horizontalement et verticalement */
          background-repeat: no-repeat; /* Évite la répétition de l'image */
          color:green;
          text-decoration-style:double;
        }
  </style>
</head>
    <body class="background-section">
        <div class="container center-box mt-5"  >
            <div  class="card">
                <div class="jaune" class="card-body">
                    <h5 class="card-title text-center">Connexion</h5>
                    <form  class="container" action="traitementc.php" method="post">
                        <label for="nom_utilisateur" class="form-label">Username</label>     
                        <input type="text" class="form-control"  id="nom_utilisateur" name="nom_utilisateur" required > <br>
                        <label for="mot_de_passe" class="form-label">Password</label>      
                        <input type="password" class="form-control"  id="mot_de_passe" name="mot_de_passe" required ><br>
                        <button type= "submit" class="btn btn-primary" value="Se connecter">Se connecter</button>
                    </form>
                </div>
            </div>
        </div>
        
    </body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>

</html>    

