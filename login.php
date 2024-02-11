<?php

include("../config.php");

//session_destroy();
session_start();


if (isset($_SESSION['admin_authenticated'])) {
    header("Location: ../ADMIN/dashboard.php");
    exit();
}


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    $servername = "localhost";
    $db_username = "root";
    $db_password = "";
    $dbname = "iai_togo_db";

    
    $conn = new mysqli($servername, $db_username, $db_password, $dbname);

    // Vérification de la connexion
    if ($conn->connect_error) {
        die("La connexion à la base de données a échoué : " . $conn->connect_error);
    }

    $username = $_POST['admin_username'];
    $password = $_POST['admin_password'];

    // Vérifier les informations d'authentification dans la base de données
    $query = "SELECT * FROM administrateurs WHERE nom_utilisateur = ?";
    $stmt = $conn->prepare($query);
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();

    if ($result->num_rows > 0) {
        $admin = $result->fetch_assoc();

                // Vérifier le mot de passe en utilisant password_verify
        if (password_verify($password, $admin['mot_de_passe'])) {
            // Authentification réussie, enregistrer les informations dans la session
            $_SESSION['admin_authenticated'] = true;
            $_SESSION['admin_id'] = $admin['id'];

            header("Location: ADMIN/dashboard.php?message=success");
            exit();
        } else {
            $error_message = "Mot de passe incorrect";
        }
    }

    $stmt->close();

    $conn->close();
}

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style>
        
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap');

        * {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            background-image: url("../img/galerie23.jpg");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            background-attachment: fixed;
            margin: 0;
        }

  
  #header {
            background-color: transparent;
            border-bottom: 2px solid #ccc;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            width: 100%;
            box-sizing: border-box;
        }

    
        #logo {
            width: 80px;
        }

    
        #title {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 40px;
        }

        
        #links {
            display: flex;
        }


        #links a {
            color: #007bff;
            text-decoration: none;
            margin-right: 15px;
            transition: color 0.3s ease;
            font-size: 20px;
            font-weight: bold;
        }

        
        #links a:hover {
            color: #0056b3;
            text-decoration: underline;
        }

        h1 {
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            font-size: 30px;
            text-align: center;
            margin-top: 20px;
        }
         .box {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
        }

        .container {
            width: 350px;
            display: flex;
            flex-direction: column;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.5);
            background: rgba(173, 216, 230, 0.9);
        }

        header {
            color: #000;
            font-size: 20px;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 10px 0;
        }

        .input-field {
            display: flex;
            flex-direction: column;
            margin-top: 20px;
            position: relative; 
        }

        .input-field .input {
            height: 45px;
            width: 100%;
            border: none;
            outline: none;
            border-radius: 30px;
            color: #000;
            padding: 0 15px 0 42px; 
            background: rgba(255, 255, 255, 0.8);
            margin-bottom: 20px;
        }

        .input-field i {
            position: absolute; 
            top: 50%;
            left: 15px;
            transform: translateY(-50%);
            color: #000;
        }

        ::-webkit-input-placeholder {
            color: #000;
        }

        .submit {
            border: none;
            border-radius: 30px;
            font-size: 18px; 
            height: 50px; 
            outline: none;
            width: 100%;
            background: #007bff;
            color: #fff;
            cursor: pointer;
            transition: .3s;
            margin-top: 20px;
        }

        .submit:hover {
            background: #0056b3;
            box-shadow: 1px 5px 10px rgba(0, 0, 0, 0.3);
        }


        .bottom {
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            font-size: small;
            color: #000;
            margin-top: 15px;
        }

        .left {
            display: flex;
        }

        label a {
            color: #000;
            text-decoration: none;
        }

    </style>
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <title> Connexion Administrateur</title>
</head>
<body>
    <div id="header">
        <img src="../img/lo.jpg" alt="IAI-TOGO Logo" id="logo">
        <h1 id="title">Bienvenue sur l'espace Administrations</h1>
        <div id="links">
            <a href="about.php">A propos</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>
    <h1>Veuillez entrez votre nom d'utilisateur et votre mot de passe.</h1>

    <div class="box">
        <div class="container">
            <div class="top-header">
                <header>Connexion Administrateur</header>
            </div>

            <?php
            // Afficher les messages d'erreur
            if (isset($error_message)) {
                echo "<p style='color: red;'>Erreur : $error_message</p>";
            }
            ?>

             <form method="post" action="../ADMIN/login.php">
                <div class="input-field">
                    <input type="text" name="admin_username" class="input" placeholder="Nom d'utilisateur" required>
                    <i class="bx bx-user"></i>
                </div>
                <div class="input-field">
                    <input type="password" name="admin_password" class="input" placeholder="Mot de passe" required>
                    <i class="bx bx-lock-alt"></i>
                </div>
                <div class="input-field">
                    <input type="submit" class="submit" value="Se connecter">
            </form>
        </div>
    </div>
</body>
</html>
