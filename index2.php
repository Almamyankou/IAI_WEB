<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ACCEUIL</title>
    <link rel="shortcut icon" href="/wp-content/uploads/2017/06/logo.jpeg" type="image/x-icon">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        .background-section {
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
<div class="mb-2 bg-dark text-white " >
<nav  class="navbar navbar-expand-lg bg-body-tertiary">
         <img src="logoiai.jpeg" alt="">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link text-success" aria-current="page" href="index.php">ACCEUIL</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="concours.php">Concours</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="consultation.php">Admission</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Formations</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="connexionadmin.php">Administration</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="Activite.php">Activites</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="information.php">A propos</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
            
         </ul>
         <div class="d-flex flex-row-reverse">
          
              <?php
              session_start();
              if (isset($_SESSION['username'])==true) {
                  $username = $_SESSION['username'];
                  echo $username;   
              } else {
              ?>
                <div class="red" class="p-2"><a  href="deconnexion.php" class="btn btn-danger">Se deconnecter</a></div> 
                <div><a href="postuler.php" class="btn btn-warning">POSTULER AU CONCOURS</a>
                </div>
              <?php  
              }
              ?>
          </div> 
        </nav>
    </div>
    <main class="container">
      
      <div class="background-section" >
        
        <h1 align="center" >BIENVENU SUR LA PAGE DE IAI-TOGO</h1>
        <h1 align="center" >Informations sur le concours</h1>
        <h1 align="center">Description détaillée du concours</h1>
              
      </div>
     
    </main>
</body>
</html>