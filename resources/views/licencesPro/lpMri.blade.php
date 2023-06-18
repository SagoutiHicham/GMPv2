<!doctype html>
<html>

<head>
    <title>Licence Pro : MRI</title>
    <meta charset="UTF-8" />

    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-medium" style="font-family: Poppins; color:#606C38; background-color: #F5F5F5">

    @include('layouts.header')
    <!-- LP MRI -->
    <section class="container w-1/2 mx-auto mt-8">
        <h3>Présentation</h3>
        <x-trait-titre> </x-trait-titre>

        <div class="mt-4">
            <iframe class="responsive-iframe m-auto" src="https://www.youtube.com/embed/M7lc1UVf-VE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="mt-4">
            <p>La licence professionnelle MRI a pour but de donner aux étudiants les compétences de pointe dans le domaine de la conception et de la mise en œuvre des systèmes mécatroniques, tout en intégrant les problématiques de systèmes complexes.

                Les industries font appel à la mécatronique pour les systèmes de production robotisés, les systèmes médicaux complexes,l’industrie automobile ou aéronautique ainsi que les systèmes de transmission audio ou vidéo.
            </p>
        </div>
    </section>
    <!-- LP MRI -->
    <!-- Programme -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Programme</h3>
        <x-trait-titre> </x-trait-titre>
        <!-- Semestre 1 -->

        <div class="text-center my-12">
            <div>
                <h4>Semestre 1</h4>
            </div>
            <div><span>UE11 : Adaptation et mise à niveau (32h)</span></div>
            <div> <span>UE12 : Communication et culture de l’entreprise (64h) </span></div>
            <div> <span>UE21 : Axes mécatroniques asservis (64h)</span></div>
            <div> <span>UE22 : Informatique embarqué pour la mécatronique (48h)</span></div>
        </div>
        <x-separateur-semestre></x-separateur-semestre>
        <!-- Semestre 1 -->
        <!-- Semestre 2 -->

        <div class="text-center my-12">
            <div>
                <h4>Semestre 2</h4>
            </div>
            <div><span>UE23 : Élements de machines (42h)</span></div>
            <div> <span>UE24 :  Contrôle des systèmes mécatroniques (74h)</span></div>
            <div> <span>UE31 : Conception robotique (44h)</span></div>
            <div> <span>UE32: Modélisation robotique (44h)</span></div>
            <div> <span>UE33: Intelligence pour la robotique (38h)</span></div>
 </div>
        <x-separateur-semestre></x-separateur-semestre>
        <!-- Semestre 2 -->
        <!-- Semestre 1 et 2-->

        <div class="text-center my-12">
            <div>
                <h4>Semestre 1 et Semestre 2</h4>
            </div>
            <div><span>UE41 : Projet tutoré (150h)</span></div>
            <div> <span>UE42 : Alternance - 34 semaines</span></div>
        </div>
        <!-- Semestre 1 et 2 -->

    </section>
    <!-- Programme -->

    <!-- Objectifs -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Objectifs de la formation</h3>
        <x-trait-titre> </x-trait-titre>
        <div class="mt-4">
            <p>
            Donner aux apprentis les compétences nécessaires dans le domaine de la conception et de la mise en œuvre des systèmes mécatroniques en intégrant les problématiques de l’éco-conception. 
            </p>
            <p>

            La mécatronique joue un rôle primordial dans le milieu industriel, en effet, elle permet de contrôler et commander des systèmes complexes, de maîtriser les outils informatiques, de piloter des systèmes robotisés dans différents domaines, en particulier, dans l’industrie de l’automobile, de l’aéronautique et dans le domaine de la santé.            </p>

        </div>
    </section>
    <!-- Objectifs -->

    <!-- Admission -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Admission</h3>
        <x-trait-titre> </x-trait-titre>
        <div class="mt-4">
            <p>
            Etre titulaire de l’un des diplômes suivants :</p>
<p>
DUT : GEII – GIM – GMP – R&T – Informatique …</p>

<p>
BTS : des secteurs mécanique, mécatronique, informatique et génie électrique</p>
<p>
Etudiants ayant validé 4 semestres de licence en Sciences pour l’Ingénieur</p>
<p>
Admission : l’admission dans un cycle en alternance repose sur une double sélection : l’IUT sur critères pédagogiques et par l’entreprise d’accueil selon ses critères d’embauche.</p>
<p>
Dépôt de candidature : jusqu’à fin juin</p>
<p>
Pour candidater rendez-vous sur le site de l’IUT – Rubrique Licence professionnelle – E-candidat : www.iut-evry.fr
            </p>
        </div>
    </section>
    <!-- Admission -->
    <!-- Rythme d'alternance -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Rythme d'alternance</h3>
        <x-trait-titre> </x-trait-titre>
        <div class="mt-4">
            <p>
            18 semaines en formation / 34 semaines en entreprise
            </p>
            <p>
Rentrée : mi-septembre
            </p>
        </div>
    </section>
    <!-- Rythme d'alternance -->
    <!-- Débouchés professionnels -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Débouchés professionnels</h3>
        <x-trait-titre> </x-trait-titre>
        <div class="mt-4">
            <p>
            Les titulaires de cette licence professionnelle sont recrutés à des postes d’assistant ingénieur dans les différents secteurs d’activité liés à la mécatronique (médical, automobile, aéronautique, etc.). 
            </p>
            <p>
Exemples de métiers :
Chargé d’affaires en génie mécanique
Mécatronicien…
            </p>
        </div>
    </section>
    <!-- Débouchés professionnels -->
    @include('layouts.footer')

</body>

</html>