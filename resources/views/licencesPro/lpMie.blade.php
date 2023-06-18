@include('layouts.header')
    <!-- LP MRI -->
    <section class="container w-1/2 mx-auto mt-8">
        <h3>Présentation</h3>
        <x-trait-titre> </x-trait-titre>

        <div class="mt-4">
            <iframe class="responsive-iframe m-auto" src="https://www.youtube.com/embed/M7lc1UVf-VE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

        </div>
        <div class="mt-4">
            <p></p>
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
            <div>
                <span></span>
            </div>
            <div>
                <span></span>
            </div>

        </div>
        <x-separateur-semestre></x-separateur-semestre>
        <!-- Semestre 1 -->
        <!-- Semestre 2 -->

        <div class="text-center my-12">
            <div>
                <h4>Semestre 2</h4>
            </div>
            <div>
                <span></span>
            </div>
            <div>
                <span></span>
            </div>
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
                Maîtriser des concepts, des méthodes et des logiciels de la Démarche de projet.
                Maîtriser des outils de Conception et Fabrication Assistées par Ordinateurs
                Connaître, des processus d’industrialisation, des procédés d’obtention, des machines-outils.
                Coordonner les travaux de plusieurs équipes de spécialistes.
            </p>
        </div>
    </section>
    <!-- Objectifs -->

    <!-- Admission -->
    <section class="container w-1/2 mx-auto mt-12 mb-6">
        <h3>Admission</h3>
        <x-trait-titre> </x-trait-titre>
        <div class="mt-4">
            <p>
                Titulaires de :
                L2, DEUST, BTS, DUT des secteurs industriels concernés (DUT Génie Mécanique et Productique, BTS Conception de Produits Industriels, BTS Microtechnique, DEUG sciences et Technologie pour l’Ingénieur….etc).

                Bénéficiant d’une procédure V.A.E.(Validation des Acquis de l’Expérience) avec une expérience professionnelle dans le domaine concerné par la licence.
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
                Exemples de métiers :

                Cadre technique d'études – recherche – développement – contrôle qualité
                Responsable de fabrication, responsable de production, responsable environnement
                Responsable ordonnancement – lancement – planification
                Technico-commercial des produits éco-conçus

            </p>
        </div>
    </section>
    <!-- Débouchés professionnels -->
    @include('layouts.footer')

</body>

</html>