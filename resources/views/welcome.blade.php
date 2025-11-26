<!doctype html>
<html lang="fr">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Prodiges d'Afrique - Page Tailwind</title>
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
                Susciter des leaders dans les nouvelles technologies parmi les jeunes,
                en leur ouvrant des opportunités dans l’entrepreneuriat,
                l’alternance, les stages et l’emploi. </p>
        </div>
    </div>

    <nav class="hidden md:flex gap-4 items-center">
        <a href="#features" class="text-sm hover:underline">A propos</a>
        <a href="#prayer" class="text-sm hover:underline">Sujets</a>
        <button id="btn-login" class="px-4 py-2 bg-amber-700 text-white rounded-md shadow">Se connecter</button>
        <button id="btn-signup" class="px-4 py-2 border border-amber-700 text-amber-700 rounded-md">Créer un compte</button>
    </nav>

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
    <section class="grid md:grid-cols-2 gap-8 items-center py-12">
        <div>
            <h2 class="text-4xl font-extrabold text-amber-800 leading-tight">VISION JEUNES PRODIGES TECH <br class="hidden sm:inline"> </h2>
            <p class="mt-4 text-gray-700">
                La plateforme Jeunes prodiges Tech a pour mission : - d’accompagner les étudiants dans leur recherche d’alternance, de stage et d’emploi ; - de promouvoir l’esprit entrepreneurial ; - et de faciliter l’intégration des étudiants internationaux, en particulier ceux arrivant d’Afrique.
                Vision
                ✨ Vision de Jeunes Prodiges Tech : Susciter des leaders dans les nouvelles technologies parmi les jeunes, en leur ouvrant des opportunités dans l’entrepreneuriat, l’alternance, les stages et l’emploi.
                Axes d’action
                1. Échanges avec des professionnels
                - Partage de parcours et d’expériences - Conseils pratiques pour trouver une alternance - 3 rencontres par mois (en ligne + présentiel)
                2. Création de cellules “Jeunes Prodiges Tech”
                - Implantation sur les campus(1 cellules tous les 3 mois) - Accompagnement des nouveaux arrivants
                3. Rencontres en présentiel étudiants–professionnels
                - Networking 3 x dans le mois - Découverte d’entreprises partenaires
                4. Visites d’entreprises tech
                - Mise en avant des CV étudiants(1 fois dans la semaines) - Promotion des talents auprès des recruteurs (1 fois dans la semaine)
                5. Visibilité et rayonnement
                - Objectif : 1 000 interactions sur LinkedIn - Mise en ligne d’un site internet
                Intégration au réseau
                👉 Pour rejoindre le groupe WhatsApp Jeunes Prodiges Tech et bénéficier de l’accompagnement, des échanges et des opportunités : - Montant d’adhésion : 100€
                Finalité
                🎯 Objectifs du programme : - Renforcer l’employabilité - Développer l’esprit entrepreneurial - Valoriser les compétences des étudiants auprès des entreprises
                Conclusion
                “Investir dans les talents d’aujourd’hui, c’est bâtir l’avenir de demain.” Contacts : (email, site web, réseaux sociaux) Logos / partenaires </p>

            <div class="mt-6 flex gap-3">
                <button id="hero-login" class="px-6 py-3 bg-amber-700 text-white rounded-md shadow">Pourquoi Financer Jeunes Prodiges Tech</button>

            </div>

            <ul id="features" class="mt-8 grid grid-cols-1 sm:grid-cols-2 gap-3 text-sm text-gray-700">
                <li class="flex items-start gap-3"><span class="text-amber-700 font-bold">•</span>Le financement permettra  les rencontres entre les étudiants et les professionnels en louant des salles Organiser des moments d’échanges autour d’un café .

                    Permettre aussi de soutenir la plateforme .</li>

                <li class="flex items-start gap-3"><span class="text-amber-700 font-bold">•</span> </li>

            </ul>
        </div>

        <div class="bg-white rounded-2xl p-6 shadow-lg glass">
            <h3 class="text-xl font-semibold mb-4">SOUTENIR</h3>
            <ol class="list-decimal pl-5 space-y-2 text-gray-700">
                <script type="module" src="https://donorbox.org/widgets.js" async></script><dbox-widget campaign="jeunes-prodiges-tech" type="donation_form" enable-auto-scroll="true"></dbox-widget>
            </ol>
            <p class="mt-4 text-sm text-gray-600">Utilisez ce plan comme support pour 6 minutes de prières par sujet.</p>
        </div>
    </section>

    <!-- Prayer topics -->
    <section id="prayer" class="py-12">
        <h3 class="text-2xl font-bold text-amber-800">Sujets de prière</h3>
        <div class="mt-6 grid md:grid-cols-3 gap-4">
            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">Matthieu 6:10</h4>
                <p class="mt-2 text-sm text-gray-700">Que ton règne vienne; que ta volonté soit faite sur la terre comme au ciel. Prier pour la venue du règne de Dieu dans nos foyers.</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">1 Thessaloniciens 5:18</h4>
                <p class="mt-2 text-sm text-gray-700">Rendre grâce en toutes choses. Remercions Dieu pour sa protection quotidienne.</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">1 Timothée 2:2</h4>
                <p class="mt-2 text-sm text-gray-700">Prier pour les autorités civiles : présidence, gouvernement, mairie de Bagneux.</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">Hébreux 13:17</h4>
                <p class="mt-2 text-sm text-gray-700">Soutenir et prier pour les responsables spirituels et les pères de famille.</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">Matthieu 6:33</h4>
                <p class="mt-2 text-sm text-gray-700">Que notre famille cherche d’abord le royaume et la justice de Dieu — réveil attendu avant fin 2025.</p>
            </article>

            <article class="bg-white p-6 rounded-lg shadow">
                <h4 class="font-semibold">Jacques 5:15</h4>
                <p class="mt-2 text-sm text-gray-700">Prière pour les malades du corps et de l'âme, et pour la guérison spirituelle.</p>
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
