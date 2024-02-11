<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAI-TOGO</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <style>
    body {
            margin: 0;
            padding: 0;
            font-family: 'Arial', sans-serif;
            overflow: hidden;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            transition: background-image 1s ease-in-out;
            min-height: 100vh; 
        }

        #header {
            background-color: transparent;
            border-bottom: 2px solid #ccc;
            padding: 5px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
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

        #info {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
            color: #fff;
        }

        #info span {
            color: #007bff; 
            font-weight: bold; 
        }

        .btn-container {
            position: absolute;
            bottom: 60px; 
            left: 50%;
            transform: translateX(-50%);
            text-align: center;
        }

        .btn {
            margin: 0 10px;
            border-radius: 15px;
            transition: background-color 0.3s ease, color 0.3s ease; 
        }

        .btn:hover {
            background-color: #0056b3;
            color: #fff;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>

<body>
<div id="header">
       
        <img src="img/lo.jpg" alt="IAI-TOGO Logo" id="logo">
        <h1 id="title">IAI-TOGO Concours</h1>
        <div id="links">
            <a href="about.php">A propos</a>
            <a href="contact.php">Contact</a>
        </div>
    </div>

    <div id="info">
        <h2>Bienvenue au concours <span>IAI-TOGO!</span> Nous sommes ravis de vous accueillir dans cette compétition exceptionnelle. Découvrez vos opportunités, défiez-vous et faites partie de l'excellence. Bonne chance!</h2>
    </div>

    <div class="btn-container">
        <a href="register.php" class="btn btn-primary">Créer un compte</a>
        <a href="login.php" class="btn btn-success">Se connecter</a>
</div>



    <footer class="relative z-10 bg-[#fbef8b] pt-20 pb-10 lg:pt-[120px] lg:pb-4 border-t-8 border-[#b09d72]">
        <div class="container mx-auto">
            <div class="-mx-0 flex flex-wrap px-4 lg:px-0">
                <div class="w-full px-4 lg:w-3/12 flex flex-col items-center">
                    <div class="mb-10 w-full flex flex-col items-center">
                        <a href="/" class="mb-6 inline-flex justify-center md:inline-block max-w-[160px]">
                            <img
                                src="https://www.iai-togo.tg/wp-content/uploads/2017/06/logo.jpeg"
                                alt="logo"
                                class="w-full"
                            />
                        </a>
                        <p class="mb-7 text-xl text-black lg:text-justify text-center">
                            L'Institut Africain d'Informatique (IAI) et son réseau sont des centres de référence en matière de formation
                        </p>
                    </div>
                </div>
                <div class="w-full px-4 lg:w-9/12 lg:flex lg:justify-end">
                    <div class="flex flex-wrap justify-center w-full lg:justify-end lg:w-auto">
                        <div class="mb-10 lg:mb-0">
                            <h4 class="text-lg font-bold text-black mb-4">Liens Utiles</h4>
                            <ul class="list-none">
                                <li class="mb-2">
                                    <a href="https://www.iai-togo.tg/" class="text-black">Accueil</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://www.iai-togo.tg/formations/" class="text-black">Formations</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://www.iai-togo.tg/evenements/" class="text-black">Événements</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://www.iai-togo.tg/actualites/" class="text-black">Actualités</a>
                                </li>
                                <li class="mb-2">
                                    <a href="https://www.iai-togo.tg/contact/" class="text-black">Contact</a>
                                </li>
                            </ul>
                        </div>
                        <div class="mb-10 lg:mb-0">
                            <h4 class="text-lg font-bold text-black mb-4">Contact</h4>
                            <p class="text-black">Adresse: Lomé, Togo</p>
                            <p class="text-black">Email: info@iai-togo.tg</p>
                            <p class="text-black">Téléphone: +228 12345678</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
