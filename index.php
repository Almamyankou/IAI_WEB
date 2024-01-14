<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ACCEUIL</title>
    <link rel="shortcut icon" href="logoiai.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
      espace{
        padding-left: 5cm;
      }
        .background-section {
          width: 100%;
          height: 10cm;
          background-image: url('galerie23.jpg');
          background-size: cover; /* Ajuste la taille de l'image pour couvrir tout le conteneur */
          background-position: center; /* Centre l'image horizontalement et verticalement */
          background-repeat: no-repeat; /* Évite la répétition de l'image */
          color:green;
        }
        .background-section2 {
          width: 100%;
          height: 10cm;
          background-image: url('galerie12.jpg');
          background-size: cover; /* Ajuste la taille de l'image pour couvrir tout le conteneur */
          background-position: center; /* Centre l'image horizontalement et verticalement */
          background-repeat: no-repeat; /* Évite la répétition de l'image */
          color:green;
        }
    </style>
</head>
<body>
<div class="mb-2 bg-warning text-white " >
        <nav  class="navbar navbar-expand-lg bg-body-tertiary">
         <img height="55cm" width="70cm" src="logoiai.jpeg" alt="">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link text-success" class="espace" aria-current="page" href="index.php">ACCEUIL</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-success" class="espace" aria-current="page" href="concours.php">Concours</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-success" class="espace" aria-current="page" href="consultation.php">Admission</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-success" class="espace" aria-current="page" href="#">Formations</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-success" href="#">Administration</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-success" href="Activite.php">Activites</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-success" href="information.php">A propos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link text-success" href="#">Contact</a>
            </li>
            
         </ul>

         <div class="d-flex flex-row-reverse">
          
              <?php
              session_start();
              if (isset($_SESSION['username'])) {
                  $username = $_SESSION['username'];
              ?>
                 <?php echo $username; ?>
                  <div class="red" class="p-2"><a  href="deconnexion.html" class="btn btn-danger">Se deconnecter</a></div> 

              <?php
              } else {
              ?>
                
                 <div class="desc" class="p-2"><a href="connexion.php" class="btn btn-success">Se connecter</a></div> 
                 <div class="cote" class="p-2"><a href="creation_de_compte.php" class="btn btn-primary">Créer un compte</a></div>
              <?php
              }
              ?>
          </div> 
        </nav>
    </div>
    <main class="contenair" >
      
      <div >
        <h1 align="center" >BIENVENUE SUR LA PAGE DE IAI-TOGO</h1>
      
      </div>
      <br>
      
    </main>
</body>
<script>
  // Tableau contenant les chemins des images de fond
  var backgroundImages = ["galerie23.jpg", "galerie18.jpg", "galerie12.jpg","galerie01.JPG","galerie02.JPG"];
   var currentIndex = 0;

  // Fonction pour changer l'image de fond
  function changeBackgroundImage() {
   document.body.style.backgroundImage = "url('" + backgroundImages[currentIndex] + "')";
   currentIndex = (currentIndex + 1) % backgroundImages.length;
  }

  // Appeler la fonction pour changer l'image de fond toutes les 2 secondes
  setInterval(changeBackgroundImage, 5000);
</script>

</html>
