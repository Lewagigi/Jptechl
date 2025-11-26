<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prodiges d'Afrique </title>
    <!-- Tailwind Play CDN (pour développement / prototype seulement) -->
    <script src="https://cdn.tailwindcss.com"></script>
    <style>
        /* Small custom styles */
        .glass { background: rgba(255,255,255,0.6); backdrop-filter: blur(6px); }
    </style>
</head>
<body class="min-h-screen bg-gradient-to-b from-amber-50 via-white to-amber-100 text-gray-800">
<header class="max-w-6xl mx-auto p-6 flex items-center justify-between">
    <div class="flex items-center gap-4">
        <div class="w-12 h-12 rounded-full bg-amber-700 flex items-center justify-center text-white font-bold">PA</div>
        <div>
            <h1 class="text-lg font-semibold">JEUNES PRODIGES TECH</h1>
            <p class="text-sm text-gray-600">
               </p>
        </div>
    </div>

    <!-- NAVBAR RESPONSIVE -->
    <nav class="flex items-center justify-between w-full">

        <!-- VERSION DESKTOP -->
        <div class="hidden md:flex gap-4 items-center">
            <a href="#features" class="text-sm hover:underline">A propos</a>
            <a href="https://donorbox.org/jeunes-prodiges-tech" class="text-sm hover:underline">Sujets</a>

            <button id="btn-login"
                    class="px-4 py-2 bg-amber-700 text-white rounded-md shadow">
                Se connecter
            </button>

            <button id="btn-signup"
                    class="px-4 py-2 border border-amber-700 text-amber-700 rounded-md">
                Créer un compte
            </button>
        </div>

        <!-- VERSION MOBILE -->
        <div class="md:hidden">
            <button id="menu-toggle" class="p-2 text-amber-700">
                <!-- Icône hamburger -->
                <svg xmlns="http://www.w3.org/2000/svg" class="w-7 h-7" fill="none"
                     viewBox="0 0 24 24" stroke="currentColor">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                          d="M4 6h16M4 12h16M4 18h16" />
                </svg>
            </button>
        </div>
    </nav>

    <!-- MENU MOBILE DÉROULANT -->
    <div id="mobile-menu"
         class="md:hidden hidden flex flex-col gap-4 mt-4 p-4 bg-white rounded-lg shadow">

        <a href="#features" class="text-sm hover:underline">A propos</a>
        <a href="https://donorbox.org/faire-un-don-71" class="text-sm hover:underline">Sujets</a>

        <button class="px-4 py-2 bg-amber-700 text-white rounded-md shadow w-full">
            Se connecter
        </button>

        <button class="px-4 py-2 border border-amber-700 text-amber-700 rounded-md w-full">
            Créer un compte
        </button>


        <button class="px-4 py-2 border border-amber-700 text-amber-700 rounded-md w-full">
            <a href="https://donorbox.org/faire-un-don-71"></a>
            adherer
        </button>
    </div>

    <script>
        // Affiche / Masque le menu mobile
        document.getElementById("menu-toggle").addEventListener("click", () => {
            document.getElementById("mobile-menu").classList.toggle("hidden");
        });
    </script>


    <!-- Mobile menu -->
    <div class="md:hidden">
        <button id="mobile-toggle" class="p-2 rounded-md bg-white glass shadow">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
            </svg>
        </button>
    </div>
</header>

<main class="max-w-3xl mx-auto p-6">
    <section class="my-8 w-full flex justify-end">
        <p>

        </p>

    </section>
    <!-- Hero -->
    <section class="grid grid-cols-1 md:grid-cols-2 gap-8 items-center py-12 px-4 md:px-12">
        <div>
            <h3 class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-amber-800 leading-tight">
                 JEUNES PRODIGES TECH
            </h3>

            <p class="mt-4 text-gray-700">
                Susciter des leaders dans les nouvelles technologies parmi les jeunes,
                en leur ouvrant des opportunités dans l’entrepreneuriat, l’alternance,
                les stages et l’emploi.
            </p>

            <div class="mt-6 flex flex-col sm:flex-row gap-3">
                <button id="hero-login"
                        class="px-6 py-3 bg-amber-700 text-white rounded-md shadow w-full sm:w-auto">
                    Pourquoi Financer Jeunes Prodiges Tech
                </button>
            </div>

            <ul id="features" class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-4 text-sm text-gray-700">
                <li class="flex items-start gap-3">
                    <span class="text-amber-700 font-bold">•</span>
                    Le financement permettra les rencontres entre les étudiants et les professionnels
                    en louant des salles pour organiser des moments d’échanges autour d’un café.
                    Permettre aussi de soutenir la plateforme.
                </li>

                <li class="flex items-start gap-3">
                    <span class="text-amber-700 font-bold">•</span>
                    <!-- Ajouter ici le second point si nécessaire -->
                </li>
            </ul>
        </div>







                        <!-- SCRIPT DONORBOX -->
                        <!-- CONTENEUR DONORBOX RESPONSIVE + FIXE MOBILE -->
        <!-- CONTENEUR DONORBOX FIXE ET RESPONSIVE -->
        <div class="w-full mx-auto p-4 sm:p-6 bg-white rounded-2xl shadow-lg">

            <h3 class="text-2xl sm:text-4xl md:text-5xl font-extrabold text-amber-800 leading-tight">
                <a href="https://donorbox.org/jeunes-prodiges-tech" class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-amber-800 leading-tight">ADHESION À LA PLATE-FORME</a>
                <button id="btn-login"
                        class="px-4 py-2 bg-amber-700 text-white rounded-md shadow">
                    <a href="https://donorbox.org/jeunes-prodiges-tech" class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-black-800 leading-tight">CLIQUEZ ICI </a>
                </button>

            </h3>

            <p>Jeunes Prodiges Tech est une plate-forme d'accompagnent et de conseils des jeunes qui sont dans la Tech dans leur recherche d’alternances,
                stage, emploi en encourageant les jeunes à continuer à persévérer dans leur recherche par des paroles de motivation quotidienne,
                permet aussi l’entraide étudiant. Les étudiants s’encouragent entre eux par des témoignages de leur parcours de recherche.
                Les professionnels aident les étudiants à visualiser aux étudiants le métier qu’ils feront plus tard. les raisons pour collecter des fonds pour le projet:
                Permettre les rencontres entre les étudiants et les professionnels en louant des salles . Organiser des moments d’échanges autour d’un café .
                Permettre aussi de soutenir la plateforme .</p>


            <p>Pour rejoindre le groupe WhatsApp Jeunes Prodiges Tech et bénéficier de l’accompagnement, des échanges et des opportunités : - Montant d’adhésion : 100€ .</p>

            <!-- WRAPPER FIXE SUR MOBILE, NORMAL SUR DESKTOP -->


            <p class="mt-4 text-xs sm:text-sm text-gray-600 text-center">
                <a href="https://donorbox.org/jeunes-prodiges-tech" class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-amber-800 leading-tight">SOUTENIR </a>

                <button id="btn-login"
                        class="px-4 py-2 bg-amber-700 text-white rounded-md shadow">
                    <a href="https://donorbox.org/jeunes-prodiges-tech" class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-black-800 leading-tight">CLIQUEZ ICI </a>
                </button>


                Merci de soutenir cette vision afin d’impacter davantage de jeunes dans la tech.
            </p>
        </div>



        <p class="mt-4 text-xs sm:text-sm text-gray-600 text-center">

                            Merci de soutenir cette vision afin d’impacter davantage de jeunes dans la tech.
                        </p>

                    </div>



                </div>

            </ol>


        </div>
    </section>

    <!-- Prayer topics -->
    <section id="prayer" class="py-12">
        <h3 class="text-2xl font-bold text-amber-800">NOS ACTIONS</h3>
        <div class="mt-6 grid md:grid-cols-3 gap-4">
            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">Échanges avec des professionnels </h4>
                <p class="mt-2 text-sm text-gray-700"> Partage de parcours et d’expériences -
                    Conseils pratiques pour trouver une alternance - 3
                    rencontres par mois (en ligne + présentiel) .</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">Création de cellules “Jeunes Prodiges Tech</h4>
                <p class="mt-2 text-sm text-gray-700">Implantation sur les campus(1 cellules tous les 3 mois) - Accompagnement des nouveaux arrivants </p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">Rencontres en présentiel étudiants–professionnels</h4>
                <p class="mt-2 text-sm text-gray-700">Networking 3 x dans le mois - Découverte d’entreprises partenaires .</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">Visites d’entreprises tech </h4>
                <p class="mt-2 text-sm text-gray-700">Mise en avant des CV étudiants(1 fois dans la semaines) - Promotion des talents auprès des recruteurs (1 fois dans la semaine) .</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">Intégration au réseau</h4>
                <p class="mt-2 text-sm text-gray-700">Pour rejoindre le groupe WhatsApp Jeunes Prodiges Tech et bénéficier de l’accompagnement, des échanges et des opportunités : - Montant d’adhésion : 100€ .</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">Visibilité et rayonnement </h4>
                <p class="mt-2 text-sm text-gray-700">Objectif : 1 000 interactions sur LinkedIn - Mise en ligne d’un site internet</p>
            </article>
        </div>
    </section>

    <!-- Footer / Contact -->
    <footer class="py-12 text-center text-sm text-gray-600">
        <p>
 <a href="#" class="text-amber-700 underline">Contact</a></p>
    </footer>
</main>

<!-- Modals: Login / Signup (simple) -->
<div id="modal" class="fixed inset-0 hidden items-center justify-center bg-black/40 p-6">
    <div class="bg-white rounded-xl w-full max-w-md p-6">
        <button id="modal-close" class="ml-auto block mb-4 text-gray-500">✕</button>
        <h3 id="modal-title" class="text-xl font-semibold mb-4">Se connecter</h3>
        <form id="auth-form" class="space-y-4">
            <div>
                <label class="block text-sm font-medium text-gray-700">Email</label>
                <input id="email" type="email" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-amber-500 focus:border-amber-500" />
            </div>
            <div>
                <label class="block text-sm font-medium text-gray-700">Mot de passe</label>
                <input id="password" type="password" required class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-amber-500 focus:border-amber-500" />
            </div>
            <div class="flex justify-end gap-3">
                <button type="button" id="modal-cancel" class="px-4 py-2 rounded-md">Annuler</button>
                <button type="submit" class="px-4 py-2 bg-amber-700 text-white rounded-md">Envoyer</button>
            </div>
        </form>
    </div>
</div>

<script>
    // Simple modal logic
    const modal = document.getElementById('modal');
    const openBtns = ['btn-login','hero-login','btn-signup','hero-signup'];
    openBtns.forEach(id => {
        const el = document.getElementById(id);
        if (el) el.addEventListener('click', () => openModal(id));
    });
    document.getElementById('modal-close').addEventListener('click', closeModal);
    document.getElementById('modal-cancel').addEventListener('click', closeModal);

    function openModal(sourceId) {
        modal.classList.remove('hidden');
        const title = document.getElementById('modal-title');
        title.textContent = sourceId.includes('signup') || sourceId === 'btn-signup' || sourceId === 'hero-signup' ? 'Créer un compte' : 'Se connecter';
    }
    function closeModal() { modal.classList.add('hidden'); }

    // Example form submit -> just shows values
    document.getElementById('auth-form').addEventListener('submit', (e) => {
        e.preventDefault();
        const email = document.getElementById('email').value;
        const pass = document.getElementById('password').value;
        alert(`Email: ${email}\nMot de passe: ${pass}`);
        closeModal();
    });

    // Mobile menu toggle
    document.getElementById('mobile-toggle').addEventListener('click', () => {
        const nav = document.querySelector('nav');
        nav.classList.toggle('hidden');
    });
</script>

</body>
</html>
