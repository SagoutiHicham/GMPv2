<!doctype html>
<html>

<head>
    <title>Licence Pro : MIEF</title>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-medium" style="font-family: Poppins; color:#606C38; background-color: #F5F5F5">

    @include('layouts.header')
    <!-- LP MIEF -->
    <section class="container w-1/2 mx-auto mt-8">
        <h3>LP MIEF</h3>
        <x-trait-titre> </x-trait-titre>

        <div class="mt-4">
            <iframe class="responsive-iframe m-auto" src="https://www.youtube.com/embed/M7lc1UVf-VE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="mt-4">
            <p>La Licence Professionnelle Management et Ingénierie des Entreprises de Façades
                forme en alternance des cadres techniques polyvalents en management
                et en ingénierie du second œuvre, pour répondre à un besoin de la profession
                de l’enveloppe du bâtiment.

                Le candidat apprenti est sélectionné par l’IUT après examen de son dossier scolaire et entretien.

                Son admission définitive dans la formation est subordonnée à la signature
                d’un contrat d’apprentissage ou de professionnalisation avec une entreprise d’accueil.
            </p>
        </div>
    </section>
    <!-- LP MIEF -->
    <!-- Programme -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Programme</h3>
        <x-trait-titre> </x-trait-titre>
        <!-- Semestre 1 -->

        <div class="text-center my-12">
            <div>
                <h4>Semestre 1</h4>
            </div>
            <div><span>UE11 et 21 : Bâtiment (67h)</span></div>
            <div> <span>UE12 et 22 : Bureau d’études (110h) </span></div>
            <div> <span>UE13 et 23 : Calculs (78h)</span></div>
        </div>
        <x-separateur-semestre></x-separateur-semestre>
        <!-- Semestre 1 -->
        <!-- Semestre 2 -->

        <div class="text-center my-12">
            <div>
                <h4>Semestre 2</h4>
            </div>
            <div><span>UE14 : Produits/Matériaux de la façade et environnement (44h)</span></div>
            <div> <span>UE15 : Management (102h) </span></div>
            <div> <span>UE17 : Confort (49h)</span></div>
        </div>
        <x-separateur-semestre></x-separateur-semestre>
        <!-- Semestre 2 -->
        <!-- Semestre 1 et 2-->

        <div class="text-center my-12">
            <div>
                <h4>Semestre 1 et Semestre 2</h4>
            </div>
            <div><span>UE16 et 26 : Projet tutoré (150h)</span></div>
            <div> <span>UE27: Pratique professionnelle en entreprise</span></div>
        </div>
        <!-- Semestre 1 et 2 -->

    </section>
    <!-- Programme -->

    <!-- Objectifs -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Objectifs de la formation</h3>
        <x-trait-titre> </x-trait-titre>
        <div class="mt-4">
            <p>L’objectif est de former des cadres techniques polyvalents en management et en ingénierie du second œuvre, pour répondre à un besoin de la profession de l’Enveloppe du Bâtiment.
            </p>
            <p>

                Cette formation permet aux candidats ayant un profil scientifique et/ou technique d’acquérir un métier et un emploi immédiat, les diplômés sont embauchés à 100% dans le mois qui suit l’obtention du diplôme.</p>
            <p>

                Seule formation en Europe à ce niveau dans la profession de l’Enveloppe du Bâtiment.</p>
        </div>
    </section>
    <!-- Objectifs -->

    <!-- Admission -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Admission</h3>
        <x-trait-titre> </x-trait-titre>
        <div class="mt-4">
            <p>La licence professionnelle est accessible aux étudiants ayant validé 120 crédits ECTS – 2e année de licence scientifique et/ou technique validée</p>
            <p>

                DUT (diplôme universitaire de technologie) GC, GTE, SGM, GMP, etc.</p>
            <p>

                BTS (brevet de technicien supérieur) dans un domaine d’études compatible avec la mention demandée (CPI, Enveloppe du Bâtiment, Bâtiment, EEc, Construction métallique, etc.).​</p>
        </div>
    </section>
    <!-- Admission -->
    <!-- Parcours -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Parcours</h3>
        <x-trait-titre> </x-trait-titre>
        <div class="mt-4">
            <p>Total formation : 600 heures, soit 24 semaines.</p>
        </div>
    </section>
    <!-- Parcours -->
    <!-- Débouchés professionnels -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Débouchés professionnels</h3>
        <x-trait-titre> </x-trait-titre>
        <div class="mt-4">
            <p>Technicien BE, Métreur-chiffreur, Chef de chantier, Conducteur de travaux, Coordonnateur OPC, Chargé d’affaires</p>
        </div>
    </section>
    <!-- Débouchés professionnels -->
    @include('layouts.footer')

</body>

</html>