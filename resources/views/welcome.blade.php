<!doctype html>
<html lang="fr">
<script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
<!-- Include this script tag or install `@tailwindplus/elements` via npm: -->
<!-- <script src="https://cdn.jsdelivr.net/npm/@tailwindplus/elements@1" type="module"></script> -->
<nav class="relative bg-gray-800">
    <div class="mx-auto max-w-7xl px-2 sm:px-6 lg:px-8">
        <div class="relative flex h-16 items-center justify-between">
            <div class="absolute inset-y-0 left-0 flex items-center sm:hidden">
                <!-- Mobile menu button-->
                <button type="button" command="--toggle" commandfor="mobile-menu" class="relative inline-flex items-center justify-center rounded-md p-2 text-gray-400 hover:bg-white/5 hover:text-white focus:outline-2 focus:-outline-offset-1 focus:outline-indigo-500">
                    <span class="absolute -inset-0.5"></span>
                    <span class="sr-only">Open main menu</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 in-aria-expanded:hidden">
                        <path d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6 not-in-aria-expanded:hidden">
                        <path d="M6 18 18 6M6 6l12 12" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>
            </div>
            <div class="flex flex-1 items-center justify-center sm:items-stretch sm:justify-start">
                <div class="flex shrink-0 items-center">
                    <img src="/img/Design sans titre.png" alt="" class="w-full h-full object-cover rounded-md" />
                </div>
                <div class="hidden sm:ml-6 sm:block">
                    <div class="flex space-x-4">
                        <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
                        <a href="#" aria-current="page" class="rounded-md bg-gray-900 px-3 py-2 text-sm font-medium text-white">Dashboard</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Team</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Projects</a>
                        <a href="#" class="rounded-md px-3 py-2 text-sm font-medium text-gray-300 hover:bg-white/5 hover:text-white">Calendar</a>
                    </div>
                </div>
            </div>
            <div class="absolute inset-y-0 right-0 flex items-center pr-2 sm:static sm:inset-auto sm:ml-6 sm:pr-0">
                <button type="button" class="relative rounded-full p-1 text-gray-400 focus:outline-2 focus:outline-offset-2 focus:outline-indigo-500">
                    <span class="absolute -inset-1.5"></span>
                    <span class="sr-only">View notifications</span>
                    <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1.5" data-slot="icon" aria-hidden="true" class="size-6">
                        <path d="M14.857 17.082a23.848 23.848 0 0 0 5.454-1.31A8.967 8.967 0 0 1 18 9.75V9A6 6 0 0 0 6 9v.75a8.967 8.967 0 0 1-2.312 6.022c1.733.64 3.56 1.085 5.455 1.31m5.714 0a24.255 24.255 0 0 1-5.714 0m5.714 0a3 3 0 1 1-5.714 0" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                </button>

                <!-- Profile dropdown -->
                <el-dropdown class="relative ml-3">
                    <button class="relative flex rounded-full focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-500">
                        <span class="absolute -inset-1.5"></span>
                        <span class="sr-only">Open user menu</span>
                        <img src="https://images.unsplash.com/photo-1472099645785-5658abf4ff4e?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=facearea&facepad=2&w=256&h=256&q=80" alt="" class="size-8 rounded-full bg-gray-800 outline -outline-offset-1 outline-white/10" />
                    </button>

                    <el-menu anchor="bottom end" popover class="w-48 origin-top-right rounded-md bg-white py-1 shadow-lg outline outline-black/5 transition transition-discrete [--anchor-gap:--spacing(2)] data-closed:scale-95 data-closed:transform data-closed:opacity-0 data-enter:duration-100 data-enter:ease-out data-leave:duration-75 data-leave:ease-in">
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Your profile</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Settings</a>
                        <a href="#" class="block px-4 py-2 text-sm text-gray-700 focus:bg-gray-100 focus:outline-hidden">Sign out</a>
                    </el-menu>
                </el-dropdown>
            </div>
        </div>
    </div>

    <el-disclosure id="mobile-menu" hidden class="block sm:hidden">
        <div class="space-y-1 px-2 pt-2 pb-3">
            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-white/5 hover:text-white" -->
            <a href="#" aria-current="page" class="block rounded-md bg-gray-900 px-3 py-2 text-base font-medium text-white">Dashboard</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Team</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Projects</a>
            <a href="#" class="block rounded-md px-3 py-2 text-base font-medium text-gray-300 hover:bg-white/5 hover:text-white">Calendar</a>
        </div>
    </el-disclosure>
</nav>




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
                        class="text-3xl sm:text-2xl md:text-2xl font-extrabold text-amber-800 leading-tight">
                    Pourquoi Financer Jeunes Prodiges Tech
                </button>
            </div>



                    <span class="text-amber-700 font-bold"></span>
                    <h3  class="mt-4 text-gray-700"> Le financement permettra les rencontres entre les étudiants et les professionnels
                        en louant des salles pour organiser des moments d’échanges autour d’un café.
                        Permettre aussi de soutenir la plateforme.



                        <p>
                            Merci de soutenir cette vision afin d’impacter davantage de jeunes dans la tech.

                        </p>



        </div>







                        <!-- SCRIPT DONORBOX -->
                        <!-- CONTENEUR DONORBOX RESPONSIVE + FIXE MOBILE -->
        <!-- CONTENEUR DONORBOX FIXE ET RESPONSIVE -->
        <div class="w-full mx-auto p-4 sm:p-6 bg-white rounded-2xl shadow-lg">

            <h3 class="text-2xl sm:text-4xl md:text-5xl font-extrabold text-amber-800 leading-tight">
                <a href="https://donorbox.org/jeunes-prodiges-tech" class="text-3xl sm:text-4xl md:text-5xl font-extrabold text-amber-800 leading-tight">ADHESION </a>
                <button  class="px-4 py-2 bg-amber-700 text-white rounded-md shadow">
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



            </p>
        </div>

                    </div>



                </div>

            </ol>


        </div>
    </section>

    <!-- Prayer topics -->

<h1 class="text-3xl font-bold text-center text-gray-900 mt-16 mb-10">
    NOS MISSIONS
</h1>

<div class="flex flex-col gap-8 p-10 bg-gray-900 rounded-xl shadow-xl sm:grid sm:grid-cols-2 lg:grid-cols-3 sm:gap-8">

    <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
        <h2 class="text-xl font-semibold text-white mb-3">ÉCHANGES AVEC DES PROFESSIONNELS</h2>
        <p class="text-gray-300">
            Partage de parcours et d’expériences - Conseils pratiques pour trouver une alternance - 3 rencontres par mois (en ligne + présentiel).
        </p>
    </div>

    <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
        <h2 class="text-xl font-semibold text-white mb-3">L'INNOVATION</h2>
        <p class="text-gray-300">
            Susciter des vocations et engendrer de futurs innovateurs, créateurs et entrepreneurs pour Dieu afin d’impacter leur génération.
        </p>
    </div>

    <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
        <h2 class="text-xl font-semibold text-white mb-3">CRÉATION DE CELLULES “JEUNES PRODIGES TECH”</h2>
        <p class="text-gray-300">
            Implantation sur les campus (1 cellule tous les 3 mois) - Accompagnement des nouveaux arrivants.
        </p>
    </div>

    <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
        <h2 class="text-xl font-semibold text-white mb-3">RENCONTRE EN PRÉSENTIEL ÉTUDIANTS–PROFESSIONNELS</h2>
        <p class="text-gray-300">
            Networking 3 x dans le mois - Découverte d’entreprises partenaires.
        </p>
    </div>

    <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
        <h2 class="text-xl font-semibold text-white mb-3">VISITES D'ENTREPRISE TECH</h2>
        <p class="text-gray-300">
            Mise en avant des CV étudiants (1 fois dans la semaine) - Promotion des talents auprès des recruteurs (1 fois dans la semaine).
        </p>
    </div>

    <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
        <h2 class="text-xl font-semibold text-white mb-3">INTÉGRATION AU RÉSEAU</h2>
        <p class="text-gray-300">
            Pour rejoindre le groupe WhatsApp Jeunes Prodiges Tech et bénéficier de l’accompagnement, des échanges et des opportunités : Montant d’adhésion : 100€.
        </p>
    </div>

    <div class="bg-gray-800 p-6 rounded-lg shadow hover:shadow-xl transition">
        <h2 class="text-xl font-semibold text-white mb-3">VISIBILITÉ ET RAYONNEMENT</h2>
        <p class="text-gray-300">
            Objectif : 1 000 interactions sur LinkedIn - Mise en ligne d’un site internet.
        </p>
    </div>

</div>

<!--
<section class="flex flex-col gap-6 p-4">

    ```
    <div class="bg-white rounded-lg shadow p-6 flex flex-col w-full">
        <div class="h-60 bg-gray-200 rounded-md mb-4">
            <img src="/img/Design sans titre.png" alt="" class="w-full h-full object-cover rounded-md" />
        </div>
        <h3 class="text-lg font-semibold mb-2">Titre de la carte</h3>
        <p class="text-sm text-gray-600 flex-grow">Description ou contenu de la carte. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="mt-4 px-4 py-2 bg-amber-700 text-white rounded-md shadow">Action</button>
    </div>

    <div class="bg-white rounded-lg shadow p-2 flex flex-col w-full">
        <div class="h-60 bg-gray-200 rounded-md mb-4"></div>
        <h3 class="text-lg font-semibold mb-2">Titre de la carte</h3>
        <p class="text-sm text-gray-600 flex-grow">Description ou contenu de la carte. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="mt-4 px-4 py-2 bg-amber-700 text-white rounded-md shadow">Action</button>
    </div>

    <div class="bg-white rounded-lg shadow p-6 flex flex-col w-full">
        <div class="h-60 bg-gray-200 rounded-md mb-4"></div>
        <h3 class="text-lg font-semibold mb-2">Titre de la carte</h3>
        <p class="text-sm text-gray-600 flex-grow">Description ou contenu de la carte. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="mt-4 px-4 py-2 bg-amber-700 text-white rounded-md shadow">Action</button>
    </div>

    <div class="bg-white rounded-lg shadow p-6 flex flex-col w-full">
        <div class="h-60 bg-gray-200 rounded-md mb-4"></div>
        <h3 class="text-lg font-semibold mb-2">Titre de la carte</h3>
        <p class="text-sm text-gray-600 flex-grow">Description ou contenu de la carte. Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
        <button class="mt-4 px-4 py-2 bg-amber-700 text-white rounded-md shadow">Action</button>
    </div>
    ```

</section>
-->




<!-- Footer / Contact -->
    <footer class="py-12 text-center text-sm text-gray-600">

            <div class="bg-white py-24 sm:py-32">
                <div class="mx-auto grid max-w-7xl gap-20 px-6 lg:px-8 xl:grid-cols-3">
                    <div class="max-w-xl">
                        <h2 class="text-3xl font-semibold tracking-tight text-pretty text-gray-900 sm:text-4xl">Rencontre Notre Equipe</h2>
                        <p class="mt-6 text-lg/8 text-gray-600">Nous sommes dynamique .</p>
                    </div>
                    <ul role="list" class="grid gap-x-8 gap-y-12 sm:grid-cols-2 sm:gap-y-16 xl:col-span-2">
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                                <div>
                                    <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Noura</h3>
                                    <p class="text-sm/6 font-semibold text-indigo-600">leader</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img src="img/FB_IMG_1596742974820.jpg" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                                <div>
                                    <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Régis</h3>
                                    <p class="text-sm/6 font-semibold text-indigo-600">Aide leader</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                                <div>
                                    <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Philippe</h3>
                                    <p class="text-sm/6 font-semibold text-indigo-600">B</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                                <div>
                                    <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Carmel</h3>
                                    <p class="text-sm/6 font-semibold text-indigo-600">Front</p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                                <div>
                                    <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Severine</h3>
                                    <p class="text-sm/6 font-semibold text-indigo-600"></p>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="flex items-center gap-x-6">
                                <img src="" alt="" class="size-16 rounded-full outline-1 -outline-offset-1 outline-black/5" />
                                <div>
                                    <h3 class="text-base/7 font-semibold tracking-tight text-gray-900">Arrive</h3>
                                    <p class="text-sm/6 font-semibold text-indigo-600"></p>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>








    </div>
    </main>
</div>
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
