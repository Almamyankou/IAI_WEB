<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>concours</title>
</head>
<body>
<body>
    <div class="mb-2 bg-dark text-white " >
        <nav  class="navbar navbar-expand-lg bg-body-tertiary">
         <img src="logoiai.jpeg" alt="">
         <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="concours.php">Concours</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Admission</a>
            </li>
            <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Formations</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Informations</a>
            </li>
            <li class="nav-item">
            <a class="nav-link" href="#">Contact</a>
            </li>
            
         </ul>
         <form class="d-flex" role="search">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success" type="submit">Search</button>
         </form>
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
                 <div class="cote" class="p-2"><a href="creation_de_compte.html" class="btn btn-primary">Créer un compte</a></div>
              <?php
              }
              ?>
          </div> 
        </nav>
    </div>
    <main class="container">
      
      <div>
        <h1 align="center" >Informations sur le concours</h1>
        <h1 align="center">Description détaillée du concours</h1>
      
      </div>
      <div align="center" class="p-3 mb-2 bg-success text-white" >
        <a href="postuler.php" class="btn btn-primary">POSTULER AU CONCOURS</a>
      </div>
    </main>
</body>
</html>