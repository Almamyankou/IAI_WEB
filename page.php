<!doctype html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>IAI-TOGO-Institut Africain d'Informatique</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/flowbite@1.5.3/dist/flowbite.js"></script>
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.7.3/dist/alpine.min.js"></script>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css">
	<script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>

	<style>
		[x-cloak] {
			display: none;
		}

		[type="checkbox"] {
			box-sizing: border-box;
			padding: 0;
		}

		.form-checkbox,
		.form-radio {
			-webkit-appearance: none;
			-moz-appearance: none;
			appearance: none;
			-webkit-print-color-adjust: exact;
			color-adjust: exact;
			display: inline-block;
			vertical-align: middle;
			background-origin: border-box;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
			flex-shrink: 0;
			color: currentColor;
			background-color: #fff;
			border-color: #e2e8f0;
			border-width: 1px;
			height: 1.4em;
			width: 1.4em;
		}

		.form-checkbox {
			border-radius: 0.25rem;
		}

		.form-radio {
			border-radius: 50%;
		}

		.form-checkbox:checked {
			background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3cpath d='M5.707 7.293a1 1 0 0 0-1.414 1.414l2 2a1 1 0 0 0 1.414 0l4-4a1 1 0 0 0-1.414-1.414L7 8.586 5.707 7.293z'/%3e%3c/svg%3e");
			border-color: transparent;
			background-color: currentColor;
			background-size: 100% 100%;
			background-position: center;
			background-repeat: no-repeat;
		}

		.form-radio:checked {
			background-image: url("data:image/svg+xml,%3csvg viewBox='0 0 16 16' fill='white' xmlns='http://www.w3.org/2000/svg'%3e%3ccircle cx='8' cy='8' r='3'/%3e%3c/svg%3e");
			border-color: transparent;
			background-color: currentColor;
			background-size: 100% 100%;
			background-position: center;
			background-repeat: no-repeat;
		}
	</style>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"/>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap"/>

    <link href="/js/app.js" rel="stylesheet">

    <link href="https://www.new.iai-togo.tg/css/app.css" rel="stylesheet">
    <link rel="icon" type="image/x-icon" href="https://www.iai-togo.tg/wp-content/uploads/2017/06/logo.jpeg">

    <style>
        @keyframes  path0 {
            0% {
                transform: rotate(-10deg);
            }
            100% {
                transform: rotate(10deg);
            }
        }

        @keyframes  path1 {
            0% {
                transform: rotate(-30deg);
            }
            100% {
                transform: rotate(30deg);
            }
        }

        @keyframes  path2 {
            0% {
                transform: rotate(40deg);
            }
            100% {
                transform: rotate(-40deg);
            }
        }

        html {
            scroll-behavior: smooth;
        }

        .line-clamp-2 {
            overflow: hidden;
            text-overflow: ellipsis;
            -webkit-box-orient: vertical;
            display: block;
            display: -webkit-box;
            -webkit-line-clamp: 2;
        }

        .wrapper {
            display: grid;
            /*height:100vh;*/
            place-items: center
        }

        #btn-back-to-top {
            position: fixed;
            display: none;
        }

        [x-cloak] {
            display: none;
        }
            </style>
</head>

<!--Start of Tawk.to Script-->
<script type="text/javascript">
    var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
    (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/63bb3a0b47425128790c57f0/1gm9lli1u';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
    })();
</script>
<!--End of Tawk.to Script-->

<body class="bg-white w-full relative">

<header class="w-full sticky top-0" style="z-index: 998">
    <div class="" x-data="{ menuIsOpen: false}">
    <div class="">
        <div
            class="mx-auto w-full border-b-4 lg:border-b-0 border-[#b09d72] flex items-center justify-between lg:justify-evenly bg-green-800 py-2 md:py-4 px-4 md:px-8 duration-500">
            <div class="lg:hidden">
                <a href="#" class="">
                    <img src="https://www.iai-togo.tg/wp-content/uploads/2017/06/logo.jpeg"
                         class="h-10 w-14 md:h-14 md:w-20">
                </a>
            </div>
            <ul class="hidden lg:flex items-center justify-between gap-6 text-white text-sm font-semibold">

                                   
                                

                    <li class="hidden lg:block text-sm font-semibold hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150">
                        <a href="/img/pdf/JOUR2023.pdf"
                           title="Télecharger les resultats" class="uppercase">COURS DU JOUR 2023
                            </a>
                    </li>

                    <li class="hidden lg:block text-sm font-semibold hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150">
                        <a href="/img/pdf/SOIR2023.pdf"
                           title="Télecharger les resultats" class="uppercase">COURS DU SOIR 2023
                            </a>
                    </li>
                                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150 opacity-80">
                        <a href="/actualités" class="">Actualités</a></li>
                
                                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150 opacity-80">
                        <a href="/opportunités" class="">Opportunités</a></li>
                
            </ul>
            <ul class="flex items-center justify-between gap-6 text-white text-sm">
                <li class="hidden lg:block text-sm font-semibold hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150">
                    <a href="img/pdf/RESULTATS_2023.pdf"
                       title="Télecharger les resultats" class="uppercase">RESULTAT DU CONCOURS D'ENTREE A L'IAI-Togo
                        2023</a>
                </li>


                <li :class="menuIsOpen ? 'hidden':'block'" class="lg:hidden" @click="menuIsOpen = true">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                         stroke="#fbef8b" class="w-7 h-7 hover:cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5"/>
                    </svg>
                </li>
                <li x-cloak :class="menuIsOpen ? 'block':'hidden'" class="lg:hidden" @click="menuIsOpen = false">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                         stroke="#fbef8b" class="w-7 h-7 hover:cursor-pointer">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12"/>
                    </svg>
                </li>
            </ul>

            <ul class="hidden lg:flex items-center justify-between gap-6 text-white text-sm font-semibold">
                                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150 opacity-80">
                        <a href="/login" class="text-white">Se connecter</a></li>
                
                                    <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150 opacity-80">
                        <a href="/register" class="text-white"></a></li>
                            </ul>






        </div>
    </div>

    <div
        class="mx-auto border-b-4 lg:border-b-8 border-green-800 w-full hidden lg:flex items-center justify-evenly bg-[#fbef8b] py-2">
        <div>
            <img src="https://www.iai-togo.tg/wp-content/uploads/2017/06/logo.jpeg" class="h-20 w-36">
        </div>
        <ul class="flex items-center justify-between gap-4 lg:text-md xl:text-lg font-semibold text-[#314122]">
                            <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a
                        href="/" class="">Accueil</a></li>
            
                            <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a
                        href="/a-propos" class="">A propos</a></li>
                                        <li class="border-b-2 border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a
                        href="/admission" class="">Admission</a></li>
                                        <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a
                        href="/formations" class="">Formations</a></li>
                                        <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a
                        href="/administration" class="">Administration</a></li>
                                        <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a
                        href="/gallerie" class="">Galerie</a></li>
            
                            <li class="hover:border-b-2 hover:border-[#b09d72] hover:text-[#b09d72] pb-1 duration-400 delay-150"><a
                        href="/contact" class="">Contact</a></li>
            
        </ul>
    </div>




    <div x-cloak x-show="menuIsOpen" class="absolute top-11 inset-x-0 w-full md:hidden md:w-auto z-50">
        <div class="bg-stone-200">
            <ul class="uppercase border-b-4 border-gray-800 flex flex-col p-4 mt-4 bg-gray-50 border border-gray-100 md:flex-row md:space-x-8 md:mt-0 md:text-sm md:font-medium md:border-0 md:bg-white">
                                    <li>
                        <a href="/" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Accueil</a>
                    </li>
                
                                    <li>
                        <a href="/a-propos" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">A
                            propos de nous</a>
                    </li>
                
                                    <li>
                        <a href="/admission" class="block py-2 pr-4 pl-3 text-white bg-[#b09d72] rounded"
                           aria-current="page">Admission</a>
                    </li>
                
                                    <li>
                        <a href="/formations" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Formations</a>
                    </li>
                
                                    <li>
                        <a href="/administration" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Administration</a>
                    </li>
                
                                    <li>
                        <a href="/gallerie"
                           class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Galerie</a>
                    </li>
                
                                    <li>
                        <a href="/contact" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Nous
                            Contacter</a>
                    </li>
                
                    <hr>


                                    <li>
                        <a href="/actualités" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Actualités</a>
                    </li>
                                                    <li>
                        <a href="/opportunités" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Opportunités</a>
                    </li>
                
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Anciens
                        étudiants</a>
                </li>
                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">Parents &
                        Familles</a>
                </li>

                <li>
                    <a href="#" class="block py-2 pr-4 pl-3 text-gray-700 rounded hover:bg-gray-100">COVID-19</a>
                </li>
            </ul>
        </div>
    </div>
</div>
</header>


<!--    hero-->
    <div>
        <div class="bg-no-repeat bg-center bg-cover w-full" style="background-image: url(/img/IMG_9311.png)">
            <div class="h-[60vh]  w-full flex items-center justify-center">
                <div class="w-full h-full text-white bg-gray-700 bg-opacity-80 flex flex-col py-12 lg:py-0 gap-8 justify-center items-center">
                    <div class="flex flex-col items-center gap-4 px-4 text-center">
                        <h1 class="text-white text-xl lg:text-5xl font-bold uppercase">Admission à L'IAI-Togo</h1>
                        <span class="w-20 h-2 bg-[#b09d72]"></span>
                        <h1 class="lg:text-xl text-sm text-center font-semibold">
                            Notre INSTITUT INTER ETAT en informatique est ouverte à tout le monde.<br class="md:block hidden">
                            Nous croyons que la diversité de nos étudiants et nos apprenants est l'une de nos forces <br class="md:block hidden"> et  nous sommes impatients de vous compter parmi nos apprenant
                            pour vous <br class="md:block hidden"> aider à réussir dans votre parcours académique.</h1>
                    </div>

                    <a href="/formulaire" class="border-4 border-[#b09d72] rounded duration-500 hover:bg-[#b09d72] mt-4 lg:mt-12 py-4 px-4 lg:px-8">
                        <p class="font-semibold lg:font-bold lg:text-xl">Faire une demande d'admission</p>
                    </a>
                </div>
            </div>
        </div>

        <div class="bg-[#bcaa78]">
            <div class="text-white py-6 px-20 text-center lg:text-left">
                <h1 class="text-xl lg:text-4xl font-semibold mb-2 uppercase">Admission</h1>
                <p class="text-lg lg:text-xl">La réalisation de votre projet d’études commence ici.</p>
            </div>
            <div class="bg-[#b09d72] flex flex-col lg:flex-row lg:flex-wrap text-white px-4 lg:px-20">
                <a href="/formations" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                    <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">1</span>
                    <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                        <p>Trouvez <br class="hidden lg:block"> votre programme</p>
                    </div>
                </a>

                <div class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                    <a href="/dossiers" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-white lg:border-b-0 pb-4">
                        <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">2</span>
                        <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                            <p>Préparez <br class="hidden lg:block"> votre dossier</p>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                    <a href="/formulaire" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-white lg:border-b-0 pb-4">
                        <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">3</span>
                        <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                            <p>Déposez <br class="hidden lg:block"> votre demande</p>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                    <a href="/test" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center  border-white lg:border-b-0 pb-4">
                        <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">4</span>
                        <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                            <p>Passez <br class="hidden lg:block"> le test écrit</p>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                    <a href="/img/pdf/RESULTATS_2023.pdf" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center  border-white lg:border-b-0 pb-4">
                        <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">5</span>
                        <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                            <p>Consultez <br class="hidden lg:block"> des résultats</p>
                        </div>
                    </a>
                </div>
                <div class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center lg:border-b-0 pb-4">
                    <a href="/inscriptions" class="w-full lg:w-1/3 py-6 flex flex-col lg:flex-row items-center border-b-2 border-white lg:border-b-0 pb-4">
                        <span class="border-2 lg:border-0 rounded-full lg:rounded-none lg:border-b-0 lg:border-r-4 border-white pb-2 pt-2 lg:pt-0 lg:pb-0 px-4 lg:px-0 lg:pr-4 md:text-4xl lg:text-4l xl:text-5xl font-bold">6</span>
                        <div class="pl-4 text-lg lg:text-2xl mt-4 lg:mt-0">
                            <p>Inscription <br class="hidden lg:block"> définitive</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>


        <div class="bg-white mb-12 mt-20 px-4 pb-12">
            <div class="container mx-auto">
                <div class="flex flex-col lg:flex-row gap-8 lg:gap-12">
                    <div class="w-full lg:w-1/2 flex flex-col lg:border border-red-600 p-2 lg:p-6">
                        <h1 class="text-xl lg:text-2xl xl:text-3xl text-center font-bold uppercase text-red-600 mb-6 underline underline-offset-6">Concours d'entrée à l'IAI</h1>
                        <span class="md:leading-loose text-base lg:text-lg text-gray-700">
                            <p class="text-justify"> <strong>Le Ministre de la Planification du Développement et de la Coopération</strong> porte à la connaissance du public qu’il est ouvert en session unique un concours
                                d’entrée en 1ère année du Cycle « <strong>Ingénieur Concepteur en Informatiques</strong> » de l'Institut Africain d'Informatique (IAI) de Libreville au Gabon.
                                Le concours se déroulera <strong>le jeudi 28 juillet 2022 à partir de 08 heures au Centre National d’Etudes et de Traitements Informatiques (CENETI) à Lomé.</strong>
                                Les dossiers de candidature sont à déposer au secrétariat de l'IAI-Togo au plus tard le mardi 26 juillet 2022 à 17 heures.
                            </p>
                            <p class="font-semibold">Le concours comportera les épreuves écrites suivantes :</p>
                            <div class="flex flex-col gap-4 mt-8 lg:mt-6">
                                <div class="p-4 bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg uppercase underline lg:no-underline">Anglais</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Durée: 2 heures</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Coefficient: 3</span>
                                </div>
                                <div class="p-4 text- bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg uppercase underline lg:no-underline">Mathématiques</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Durée: 4 heures</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Coefficient: 6</span>
                                </div>
                                <div class="p-4 text- bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg text-center lg:text-left underline uppercase lg:no-underline">Techniques d’expression française</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Durée: 2 heures</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Coefficient: 2</span>
                                </div>
                            </div>
                            <p class="mt-6 text-center">
                                Télechargez <a href="#" class="text-red-600 font-semibold hover:underline underline-offset-6">Le Communiqué</a> et <a href="#" class="text-red-600 font-semibold hover:underline underline-offset-6"> Les termes de référence.</a>
                            </p>
                        </span>
                    </div>

                    <div class="w-full lg:w-1/2 flex flex-col lg:border border-red-600 p-2 lg:p-6">
                        <h1 class="text-xl lg:text-2xl xl:text-3xl text-center font-bold uppercase text-red-600 mb-6 underline underline-offset-6">Concours d'entrée à l'IAI-Togo</h1>
                        <span class="md:leading-loose text-base lg:text-lg text-gray-700">
                            <p class="text-justify">
                                Le Ministre de la Planification du Développement et de la Coopérationporte à la connaissance du public qu’il est ouvert en session unique
                                un concours d’entrée en 1ère année du Cycle « <strong> Ingénieur des Travaux Informatiques et Licence Professionnelle</strong> » options <strong> de l’Institut Africain d’Informatique, Représentation du Togo (IAI-TOGO)</strong>.
                            </p>
                            <p>Les dossiers de candidature sont à déposer dans les centres d'écrit au plus tard le jeudi 31 août 2023 à 17H00. Date du concours (session unique) : mardi 05 sentembre 2023 àt 07h00</p>
                            <p>Le concours se déroulera dans les centres d’écrit suivants :
                               <strong>Centre National d’Etudes et de Traitements Informatiques (CENETI) à Lomé,
                                Lycée de Kara 1 (Kara) à Lama Kara (Préfecture de la Kozah).</strong>
                            </p>
                            <p class="font-semibold">
                                Le concours comportera les épreuves écrites suivantes :
                                Pour les deux (2) options:
                            </p>
                            <div class="flex flex-col gap-4 mt-8 lg:mt-6">
                                <div class="p-4 text- bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg uppercase underline lg:no-underline">Anglais</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Durée: 2 heures</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Coefficient: 3</span>
                                </div>
                                <div class="p-4 text- bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg uppercase underline lg:no-underline">Mathématiques</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Durée: 4 heures</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Coefficient: 6</span>
                                </div>
                                <div class="p-4 text- bg-stone-200 rounded-lg flex flex-col md:flex-row gap-4 justify-between items-center">
                                    <span class="font-semibold text-lg uppercase underline lg:no-underline text-center lg:text-left">Techniques d’expression française</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Durée: 2 heures</span>
                                    <span class="font-semibold text-base lg:text-lg uppercase">Coefficient: 2</span>
                                </div>
                            </div>
                          
                              <p class="mt-6 text-center">
                                Télechargez <a href="/img/pdf/RESULTATS_2023.pdf" class="text-red-600 font-semibold hover:underline underline-offset-6">RESULTAT DU CONCOURS D'ENTREE A L'IAI-TOGO 2023  (COURS DU JOUR)</a> 
                                
                            </p>
                            
                            <p class="mt-6 text-center">
                                Télechargez <a href="/img/pdf/SOIR2023.pdf" class="text-red-600 font-semibold hover:underline underline-offset-6">Le Communiqué</a> et <a href="/img/pdf/TDR_COURS_DU_SOIR2023.pdf" class="text-red-600 font-semibold hover:underline underline-offset-6"> Les termes de référence du cours du soir.</a>
                            </p>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="bg-[#fbef8b] gap-4 flex flex-col lg:flex-row lg:flex-wrap text-white px-2 lg:px-20">
            <div class="text-black lg:py-6 lg:px-20 px-2 py-2 lg:text-center text-justify ">
                <h1 class="text-2xl lg:text-4xl font-semibold mb-2 uppercase">POUR PLUS D'INFORMATION</h1>
                <p class="lg:text-center text-justify lg:text-xl text-gray-800 ">Si vous avez des questions sur le processus d'admission ou si vous souhaitez en savoir plus sur nos programmes de formation, n'hésitez pas à nous contacter. Nous sommes impatients de vous aider à démarrer votre carrière dans le secteur de l'ingénerie informatique.</p>
                <div class="mt-4 lg:pb-3 lg:pt-8 lg:mt-0 flex justify-center pb-3 ">

                    <a class="inline-block  lg:px-7 lg:py-3 px-2 py-2 mr-2 bg-green-800 text-white font-bold text-sm leading-snug uppercase rounded shadow-md hover:bg-green-700 hover:shadow-lg  focus:shadow-lg focus:outline-none focus:ring-0  transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light"
                     href="/formulaire" role="button">Demande d'Admission</a>
                    <a class="inline-block  lg:px-7 lg:py-3 px-2 py-2 ml-4 bg-red-600 text-white font-bold text-sm leading-snug uppercase rounded hover:bg-red-700 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/contact" role="button">Contactez-nous</a>
                </div>
            </div>
        </div>

        <section  class="background-radial-gradient">
            <style>
                .background-radial-gradient {
                    background-color: hsl(218, 41%, 15%);
                    background-image: radial-gradient(
                        650px circle at 0% 0%,
                        hsl(218, 41%, 35%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%
                    ),
                    radial-gradient(
                        1250px circle at 100% 100%,
                        hsl(218, 41%, 45%) 15%,
                        hsl(218, 41%, 30%) 35%,
                        hsl(218, 41%, 20%) 75%,
                        hsl(218, 41%, 19%) 80%,
                        transparent 100%
                    );
                }
            </style>
                <div class="lg:px-6 lg:py-12 px-2 py-2 md:px-12 lg:text-left">

                    <div class="grid lg:grid-cols-2 lg:gap-10 gap-4 text-center flex items-center">
                        <div class="mt-12 lg:mt-0">
                            <h1 class="lg:text-7xl text-4xl md:text-6xl xl:text-7xl font-bold tracking-tight mb-8" style="color: hsl(218, 81%, 95%);">Rejoignez-nous<br>
                                <span class="text-2xl lg:text-5xl " style="color: hsl(218, 81%, 95%);">La formation continue est encouragée pour rester à jour avec les technologies actuelles.</span></h1>
                            <a class="inline-block px-7 py-3 mr-2 bg-gray-200 text-gray-700 font-bold lg:text-sm  leading-snug uppercase rounded shadow-md hover:bg-gray-300 hover:shadow-lg focus:bg-gray-300 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-gray-400 active:shadow-lg transition duration-150 ease-in-out" data-mdb-ripple="true" data-mdb-ripple-color="light" href="/formations" role="button">VOTRE FORMATION</a>

                        </div>
                        <div class="mb-12 lg:mb-0">
                            <img
                                src="../img/IMG_9271.jpg"
                                class="w-full h-[80vh] object-cover rounded-lg shadow-lg"
                                alt=""
                            />
                        </div>
                    </div>

                </div>
        </section>
    </div>

    <div id="controls-carousel" class="relative w-full h-full " data-carousel="slide">
    <!-- Carousel wrapper -->
    <div class="relative h-full overflow-hidden md:h-full flex justify-center items-center py-52 md:py-20">
        <!-- Item 1 -->
        <div class="duration-700 ease-in-out transition-all transform -translate-x-full z-10 py-8 px-20"
             data-carousel-item="">
            <div class="grid gap-8 md:grid-cols-3">
                <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/troyes.png" alt="partner-logo">
                </div>

                <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/belfort.jpg" alt="partner-logo">
                </div>

                <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/ul.png" alt="partner-logo">
                </div>
            </div>
        </div>

        <!-- Item 2 -->
        <div class="duration-700 ease-in-out transition-all transform -translate-x-full z-10 py-8 px-20"
             data-carousel-item="">
            <div class="grid gap-8 md:grid-cols-3">
                <div class="col-span-1 flex items-center justify-center md:col-span-2 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/logo-uk.png" alt="partner-logo">
                </div>

                <div class="col-span-1 flex items-center justify-center md:col-span-3 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/nice.png" alt="partner-logo">
                </div>

                <div class="col-span-1 flex items-center justify-center md:col-span-3 lg:col-span-1">
                    <img class="h-24" src="/img/partenaires/compiegne.png" alt="partner-logo">
                </div>
            </div>
        </div>

    </div>
    <!-- Slider controls -->
    
</div>

<!--    Footer-->
<!-- ====== Footer Section Start -->
<footer class="relative z-10 bg-[#fbef8b] pt-20 pb-10 lg:pt-[120px] lg:pb-4 border-t-8 border-[#b09d72]">
    <div class="container mx-auto">
        <div class="-mx-0 flex flex-wrap  px-4 lg:px-0">
            <div class="w-full px-4  lg:w-3/12 flex flex-col items-center">
                <div class="mb-10 w-full flex flex-col items-center">
                    <a href="/" class="mb-6 inline-flex justify-center md:inline-block max-w-[160px]">
                        <img
                            src="https://www.iai-togo.tg/wp-content/uploads/2017/06/logo.jpeg"
                            alt="logo"
                            class="w-full"
                        />
                    </a>
                    <p class="mb-7 text-xl text-black lg:text-justify text-center">
                        L'Institut Africain d'Informatique (IAI) et son réseau sont des centres de référence en matière de formation en Afrique.
                    </p>
                </div>
            </div>
            <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                <div class="mb-10 w-full items-center">
                    <h4 class="text-dark mb-9 text-lg text-center lg:text-left font-semibold">Contact</h4>
                    <ul class="flex flex-col items-center lg:items-start">
                        <li class="inline-flex items-center mb-6">
                            <a href="#" class="text-dark flex items-center text-md">
                                <span class=" mr-3 text-gray-900">
                                    <img
                                        src="/svg/email.svg"
                                        alt="logo"
                                        class="w-5 h-5"
                                    />
                                </span>
                                <span>iaitogo@iai-togo.tg</span>
                            </a>
                        </li>
                        <li class="mb-6">
                            <a href="#" class="flex items-center text-sm font-semibold">
                                <span class="mr-3">
                                    <svg width="19" height="21" viewBox="0 0 19 21" class="fill-current">
                                        <path
                                            d="M17.8076 11.8129C17.741 11.0475 17.1088 10.5151 16.3434 10.5151H2.16795C1.40261 10.5151 0.803643 11.0808 0.703816 11.8129L0.00502514 18.8008C-0.0282506 19.2001 0.104853 19.6327 0.371059 19.9322C0.637265 20.2317 1.03657 20.398 1.46916 20.398H17.0755C17.4748 20.398 17.8741 20.2317 18.1736 19.9322C18.4398 19.6327 18.5729 19.2334 18.5396 18.8008L17.8076 11.8129ZM17.2751 19.1668C17.2419 19.2001 17.1753 19.2667 17.0422 19.2667H1.46916C1.36933 19.2667 1.2695 19.2001 1.23623 19.1668C1.20295 19.1336 1.1364 19.067 1.16968 18.9339L1.86847 11.9127C1.86847 11.7463 2.00157 11.6465 2.16795 11.6465H16.3767C16.5431 11.6465 16.6429 11.7463 16.6762 11.9127L17.375 18.9339C17.3417 19.0337 17.3084 19.1336 17.2751 19.1668Z"
                                        />
                                        <path
                                            d="M9.25704 13.1106C7.95928 13.1106 6.92773 14.1422 6.92773 15.4399C6.92773 16.7377 7.95928 17.7693 9.25704 17.7693C10.5548 17.7693 11.5863 16.7377 11.5863 15.4399C11.5863 14.1422 10.5548 13.1106 9.25704 13.1106ZM9.25704 16.6046C8.6248 16.6046 8.09239 16.0722 8.09239 15.4399C8.09239 14.8077 8.6248 14.2753 9.25704 14.2753C9.88928 14.2753 10.4217 14.8077 10.4217 15.4399C10.4217 16.0722 9.88928 16.6046 9.25704 16.6046Z"/>
                                        <path
                                            d="M0.802807 6.05619C0.869358 7.52032 2.16711 8.11928 2.83263 8.11928H5.16193C5.19521 8.11928 5.19521 8.11928 5.19521 8.11928C6.19348 8.05273 7.19175 7.38722 7.19175 6.05619V5.25757C8.28985 5.25757 10.8188 5.25757 11.9169 5.25757V6.05619C11.9169 7.38722 12.9152 8.05273 13.9135 8.11928H13.9467H16.2428C16.9083 8.11928 18.206 7.52032 18.2726 6.05619C18.2726 5.95636 18.2726 5.59033 18.2726 5.25757C18.2726 4.99136 18.2726 4.75843 18.2726 4.72516C18.2726 4.69188 18.2726 4.6586 18.2726 4.6586C18.1727 3.72688 17.84 2.96154 17.2743 2.36258L17.241 2.3293C16.4091 1.56396 15.4109 1.13138 14.6455 0.865169C12.416 0 9.62088 0 9.48778 0C7.52451 0.0332757 6.26003 0.199654 4.36331 0.865169C3.63125 1.0981 2.63297 1.53068 1.80108 2.29603L1.7678 2.3293C1.20212 2.92827 0.869359 3.69361 0.769531 4.62533C0.769531 4.6586 0.769531 4.69188 0.769531 4.69188C0.769531 4.75843 0.769531 4.95809 0.769531 5.22429C0.802807 5.52377 0.802807 5.92308 0.802807 6.05619ZM2.5997 3.12792C3.26521 2.52896 4.09711 2.16292 4.7959 1.89672C6.52624 1.26448 7.65761 1.13138 9.55433 1.0981C9.68743 1.0981 12.2829 1.13138 14.2795 1.89672C14.9783 2.16292 15.8102 2.49568 16.4757 3.12792C16.8417 3.52723 17.0746 4.05964 17.1412 4.69188C17.1412 4.79171 17.1412 4.95809 17.1412 5.22429C17.1412 5.55705 17.1412 5.92308 17.1412 6.02291C17.1079 6.78825 16.3759 6.95463 16.276 6.95463H13.98C13.6472 6.92135 13.1148 6.78825 13.1148 6.05619V4.69188C13.1148 4.42567 12.9485 4.22602 12.7155 4.12619C12.5159 4.05964 6.69262 4.05964 6.49296 4.12619C6.26003 4.19274 6.09365 4.42567 6.09365 4.69188V6.05619C6.09365 6.78825 5.56124 6.92135 5.22848 6.95463H2.93246C2.83263 6.95463 2.10056 6.78825 2.06729 6.02291C2.06729 5.92308 2.06729 5.55705 2.06729 5.22429C2.06729 4.95809 2.06729 4.82498 2.06729 4.72516C2.00073 4.05964 2.23366 3.52723 2.5997 3.12792Z"
                                        />
                                    </svg>
                                </span>
                                <span>(00228) 22 20 47 00</span>
                            </a>
                        </li>
                        <li class="inline-flex items-center">
                            <a href="#" class="text-dark flex items-center text-md">
                                <span class="mr-3">
                                    <img
                                        src="/svg/location.svg"
                                        alt="logo"
                                        class="w-5 h-5"
                                    />
                                </span>
                                <span>59 rue de la Kozah Nyékonakpoè <br> 07 BP:12456 Lomé 07, Togo</span>
                            </a>
                        </li>
                    </ul>

                    <ul class="hidden">
                        <li class="inline-flex items-center">
                            <p class="text-dark flex items-center text-sm font-medium">
                                <span class="mr-3">
                                    <svg width="19" height="21" viewBox="0 0 19 21" class="fill-current">
                                        <path
                                            d="M17.8076 11.8129C17.741 11.0475 17.1088 10.5151 16.3434 10.5151H2.16795C1.40261 10.5151 0.803643 11.0808 0.703816 11.8129L0.00502514 18.8008C-0.0282506 19.2001 0.104853 19.6327 0.371059 19.9322C0.637265 20.2317 1.03657 20.398 1.46916 20.398H17.0755C17.4748 20.398 17.8741 20.2317 18.1736 19.9322C18.4398 19.6327 18.5729 19.2334 18.5396 18.8008L17.8076 11.8129ZM17.2751 19.1668C17.2419 19.2001 17.1753 19.2667 17.0422 19.2667H1.46916C1.36933 19.2667 1.2695 19.2001 1.23623 19.1668C1.20295 19.1336 1.1364 19.067 1.16968 18.9339L1.86847 11.9127C1.86847 11.7463 2.00157 11.6465 2.16795 11.6465H16.3767C16.5431 11.6465 16.6429 11.7463 16.6762 11.9127L17.375 18.9339C17.3417 19.0337 17.3084 19.1336 17.2751 19.1668Z"
                                        />
                                        <path
                                            d="M9.25704 13.1106C7.95928 13.1106 6.92773 14.1422 6.92773 15.4399C6.92773 16.7377 7.95928 17.7693 9.25704 17.7693C10.5548 17.7693 11.5863 16.7377 11.5863 15.4399C11.5863 14.1422 10.5548 13.1106 9.25704 13.1106ZM9.25704 16.6046C8.6248 16.6046 8.09239 16.0722 8.09239 15.4399C8.09239 14.8077 8.6248 14.2753 9.25704 14.2753C9.88928 14.2753 10.4217 14.8077 10.4217 15.4399C10.4217 16.0722 9.88928 16.6046 9.25704 16.6046Z"/>
                                        <path
                                            d="M0.802807 6.05619C0.869358 7.52032 2.16711 8.11928 2.83263 8.11928H5.16193C5.19521 8.11928 5.19521 8.11928 5.19521 8.11928C6.19348 8.05273 7.19175 7.38722 7.19175 6.05619V5.25757C8.28985 5.25757 10.8188 5.25757 11.9169 5.25757V6.05619C11.9169 7.38722 12.9152 8.05273 13.9135 8.11928H13.9467H16.2428C16.9083 8.11928 18.206 7.52032 18.2726 6.05619C18.2726 5.95636 18.2726 5.59033 18.2726 5.25757C18.2726 4.99136 18.2726 4.75843 18.2726 4.72516C18.2726 4.69188 18.2726 4.6586 18.2726 4.6586C18.1727 3.72688 17.84 2.96154 17.2743 2.36258L17.241 2.3293C16.4091 1.56396 15.4109 1.13138 14.6455 0.865169C12.416 0 9.62088 0 9.48778 0C7.52451 0.0332757 6.26003 0.199654 4.36331 0.865169C3.63125 1.0981 2.63297 1.53068 1.80108 2.29603L1.7678 2.3293C1.20212 2.92827 0.869359 3.69361 0.769531 4.62533C0.769531 4.6586 0.769531 4.69188 0.769531 4.69188C0.769531 4.75843 0.769531 4.95809 0.769531 5.22429C0.802807 5.52377 0.802807 5.92308 0.802807 6.05619ZM2.5997 3.12792C3.26521 2.52896 4.09711 2.16292 4.7959 1.89672C6.52624 1.26448 7.65761 1.13138 9.55433 1.0981C9.68743 1.0981 12.2829 1.13138 14.2795 1.89672C14.9783 2.16292 15.8102 2.49568 16.4757 3.12792C16.8417 3.52723 17.0746 4.05964 17.1412 4.69188C17.1412 4.79171 17.1412 4.95809 17.1412 5.22429C17.1412 5.55705 17.1412 5.92308 17.1412 6.02291C17.1079 6.78825 16.3759 6.95463 16.276 6.95463H13.98C13.6472 6.92135 13.1148 6.78825 13.1148 6.05619V4.69188C13.1148 4.42567 12.9485 4.22602 12.7155 4.12619C12.5159 4.05964 6.69262 4.05964 6.49296 4.12619C6.26003 4.19274 6.09365 4.42567 6.09365 4.69188V6.05619C6.09365 6.78825 5.56124 6.92135 5.22848 6.95463H2.93246C2.83263 6.95463 2.10056 6.78825 2.06729 6.02291C2.06729 5.92308 2.06729 5.55705 2.06729 5.22429C2.06729 4.95809 2.06729 4.82498 2.06729 4.72516C2.00073 4.05964 2.23366 3.52723 2.5997 3.12792Z"
                                        />
                                    </svg>
                                </span>
                                <span>(00228) 22 20 47 00</span>
                            </p>
                        </li>
                        <li class="inline-flex items-center">
                            <p class="text-dark flex items-center text-sm">
                                <span class="mr-3 text-gray-900">
                                    <img
                                        src="/svg/email.svg"
                                        alt="logo"
                                        class="w-5 h-5"
                                    />
                                </span>
                                <span>iaitogo@iai-togo.tg</span>
                            </p>
                        </li>
                        <li class="inline-flex items-center">
                            <p class="text-dark flex items-center text-sm">
                                <span class="mr-3">
                                    <img
                                        src="/svg/location.svg"
                                        alt="logo"
                                        class="w-5 h-5"
                                    />
                                </span>
                                <span>59 rue de la Kozah Nyékonakpoè <br> 07 BP:12456 Lomé 07, Togo</span>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full px-4 sm:w-1/2 lg:w-2/12">
                <div class="mb-10 w-full">
                    <h4 class="text-dark mb-9 text-lg font-semibold text-center lg:text-left">A Propos</h4>
                    <ul class="flex flex-col items-center lg:items-start">
                        <li>
                            <a
                                href="#"
                                class="mb-2 inline-block text-base leading-loose"
                            >
                                Newsletter
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="mb-2 inline-block text-base leading-loose"
                            >
                                Contact & Support
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="mb-2 inline-block text-base leading-loose"
                            >
                                Evenements
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="mb-2 text-black inline-block text-base leading-loose"
                            >
                                Paramètres et confidentialité
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full px-4 sm:w-1/2 lg:w-2/12 text-black">
                <div class="mb-10 w-full">
                    <h4 class="text-dark mb-9 text-lg font-semibold text-center lg:text-left">Liens rapides</h4>
                    <ul class="flex flex-col items-center lg:items-start">
                        <li>
                            <a
                                href="#"
                                class="mb-2 inline-block text-base leading-loose"
                            >
                                Inscription
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="mb-2 inline-block text-base leading-loose"
                            >
                                Formations
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="mb-2 inline-block text-base leading-loose"
                            >
                                Formations certifiantes
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="underline mb-2 inline-block text-base leading-loose"
                            >
                                Concours d'entrée à IAI-TOGO
                            </a>
                        </li>
                        <li>
                            <a
                                href="#"
                                class="text-center lg:text-left underline mb-2 inline-block text-base leading-loose"
                            >
                                Résultat du concours d'entrée à IAI-TOGO 2022
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-full px-4 sm:w-1/2 lg:w-3/12">
                <div class="mb-10 w-full">
                    <h4 class="text-dark mb-9 text-lg font-semibold text-center lg:text-left">Suivez-nous sur</h4>
                    <div class="mb-6 flex items-center justify-center lg:justify-start">
                        <a
                            href="#"
                            class="text-dark hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-black sm:mr-4 lg:mr-3 xl:mr-4"
                        >
                            <svg
                                width="8"
                                height="16"
                                viewBox="0 0 8 16"
                                class="fill-current"
                            >
                                <path
                                    d="M7.43902 6.4H6.19918H5.75639V5.88387V4.28387V3.76774H6.19918H7.12906C7.3726 3.76774 7.57186 3.56129 7.57186 3.25161V0.516129C7.57186 0.232258 7.39474 0 7.12906 0H5.51285C3.76379 0 2.54609 1.44516 2.54609 3.5871V5.83226V6.34839H2.10329H0.597778C0.287819 6.34839 0 6.63226 0 7.04516V8.90323C0 9.26452 0.243539 9.6 0.597778 9.6H2.05902H2.50181V10.1161V15.3032C2.50181 15.6645 2.74535 16 3.09959 16H5.18075C5.31359 16 5.42429 15.9226 5.51285 15.8194C5.60141 15.7161 5.66783 15.5355 5.66783 15.3806V10.1419V9.62581H6.13276H7.12906C7.41688 9.62581 7.63828 9.41935 7.68256 9.10968V9.08387V9.05806L7.99252 7.27742C8.01466 7.09677 7.99252 6.89032 7.85968 6.68387C7.8154 6.55484 7.61614 6.42581 7.43902 6.4Z"
                                />
                            </svg>
                        </a>
                        <a
                            href="#"
                            class="text-dark hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-black sm:mr-4 lg:mr-3 xl:mr-4"
                        >
                            <svg
                                width="16"
                                height="12"
                                viewBox="0 0 16 12"
                                class="fill-current"
                            >
                                <path
                                    d="M14.2194 2.06654L15.2 0.939335C15.4839 0.634051 15.5613 0.399217 15.5871 0.2818C14.8129 0.704501 14.0903 0.845401 13.6258 0.845401H13.4452L13.3419 0.751468C12.7226 0.258317 11.9484 0 11.1226 0C9.31613 0 7.89677 1.36204 7.89677 2.93542C7.89677 3.02935 7.89677 3.17025 7.92258 3.26419L8 3.73386L7.45806 3.71037C4.15484 3.61644 1.44516 1.03327 1.00645 0.587084C0.283871 1.76125 0.696774 2.88845 1.13548 3.59296L2.0129 4.90802L0.619355 4.20352C0.645161 5.18982 1.05806 5.96477 1.85806 6.52838L2.55484 6.99804L1.85806 7.25636C2.29677 8.45401 3.27742 8.94716 4 9.13503L4.95484 9.36986L4.05161 9.93346C2.60645 10.8728 0.8 10.8024 0 10.7319C1.62581 11.7652 3.56129 12 4.90323 12C5.90968 12 6.65806 11.9061 6.83871 11.8356C14.0645 10.2857 14.4 4.41487 14.4 3.2407V3.07632L14.5548 2.98239C15.4323 2.23092 15.7935 1.8317 16 1.59687C15.9226 1.62035 15.8194 1.66732 15.7161 1.6908L14.2194 2.06654Z"
                                />
                            </svg>
                        </a>
                        <a
                            href="#"
                            class="text-dark hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-black sm:mr-4 lg:mr-3 xl:mr-4"
                        >
                            <svg
                                width="16"
                                height="12"
                                viewBox="0 0 16 12"
                                class="fill-current"
                            >
                                <path
                                    d="M15.6645 1.88018C15.4839 1.13364 14.9419 0.552995 14.2452 0.359447C13.0065 6.59222e-08 8 0 8 0C8 0 2.99355 6.59222e-08 1.75484 0.359447C1.05806 0.552995 0.516129 1.13364 0.335484 1.88018C0 3.23502 0 6 0 6C0 6 0 8.79263 0.335484 10.1198C0.516129 10.8664 1.05806 11.447 1.75484 11.6406C2.99355 12 8 12 8 12C8 12 13.0065 12 14.2452 11.6406C14.9419 11.447 15.4839 10.8664 15.6645 10.1198C16 8.79263 16 6 16 6C16 6 16 3.23502 15.6645 1.88018ZM6.4 8.57143V3.42857L10.5548 6L6.4 8.57143Z"
                                />
                            </svg>
                        </a>
                        <a
                            href="#"
                            class="text-dark hover:border-primary mr-3 flex h-8 w-8 items-center justify-center rounded-full border border-black sm:mr-4 lg:mr-3 xl:mr-4"
                        >
                            <svg
                                width="14"
                                height="14"
                                viewBox="0 0 14 14"
                                class="fill-current"
                            >
                                <path
                                    d="M13.0214 0H1.02084C0.453707 0 0 0.451613 0 1.01613V12.9839C0 13.5258 0.453707 14 1.02084 14H12.976C13.5432 14 13.9969 13.5484 13.9969 12.9839V0.993548C14.0422 0.451613 13.5885 0 13.0214 0ZM4.15142 11.9H2.08705V5.23871H4.15142V11.9ZM3.10789 4.3129C2.42733 4.3129 1.90557 3.77097 1.90557 3.11613C1.90557 2.46129 2.45002 1.91935 3.10789 1.91935C3.76577 1.91935 4.31022 2.46129 4.31022 3.11613C4.31022 3.77097 3.81114 4.3129 3.10789 4.3129ZM11.9779 11.9H9.9135V8.67097C9.9135 7.90323 9.89082 6.8871 8.82461 6.8871C7.73571 6.8871 7.57691 7.74516 7.57691 8.60323V11.9H5.51254V5.23871H7.53154V6.16452H7.55423C7.84914 5.62258 8.50701 5.08065 9.52785 5.08065C11.6376 5.08065 12.0232 6.43548 12.0232 8.2871V11.9H11.9779Z"
                                />
                            </svg>
                        </a>
                    </div>

                    <p class="text-black text-base text-center lg:text-left">&copy; 2022 IAI-TOGO</p>
                </div>
            </div>

        </div>
    </div>
    <div>
        <span class="absolute left-0 bottom-0 z-[-1]">
          <svg width="217" height="229" viewBox="0 0 217 229" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M-64 140.5C-64 62.904 -1.096 1.90666e-05 76.5 1.22829e-05C154.096 5.49924e-06 217 62.904 217 140.5C217 218.096 154.096 281 76.5 281C-1.09598 281 -64 218.096 -64 140.5Z"
                fill="url(#paint0_linear_1179_5)"
            />
            <defs>
              <linearGradient id="paint0_linear_1179_5" x1="76.5" y1="281" x2="76.5" y2="1.22829e-05" gradientUnits="userSpaceOnUse">
                <stop stop-color="#3056D3" stop-opacity="0.08"/>
                <stop offset="1" stop-color="#C4C4C4" stop-opacity="0"/>
              </linearGradient>
            </defs>
          </svg>
        </span>
    </div>
    <div class="bg-green-800 w-full h-2"></div>
    <div class="py-4 text-base text-center text-black">
        Copyright © IAI-TOGO by
        <a
          target="_blank"
          href="https://mekengroup.com/"
          class="text-black text-base"
          >MEK'S ENGINEERING GROUP</a
        >
    </div>
</footer>
<!-- ====== Footer Section End -->


<script>
    import('preline')

    // Get the button
    let mybutton = document.getElementById("btn-back-to-top");

    // When the user scrolls down 20px from the top of the document, show the button
    window.onscroll = function () {
        scrollFunction();
    };

    function scrollFunction() {
        if (
            document.body.scrollTop > 20 ||
            document.documentElement.scrollTop > 20
        ) {
            mybutton.style.display = "block";
        } else {
            mybutton.style.display = "none";
        }
    }

    // When the user clicks on the button, scroll to the top of the document
    mybutton.addEventListener("click", backToTop);

    function backToTop() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }

</script>

<script>
  AOS.init();
</script>

</body>


</html>
