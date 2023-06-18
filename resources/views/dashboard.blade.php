@include('layouts.header')
<div class="bg-[#283618] p-7 text-white text-2xl ">
    Département GMP – Génie Mécanique et Productique
</div>
<nav class="bg-[#606C38] p-3 text-white text-lg border-white border-t-2 border-b-2 ">
    ACCEUIL
</nav>
<section class="container p-7 mx-auto flex flex-row justify-between flex-wrap">
    <div class="w-1/2 mb-6">
        <h1 class="text-[#606C38] p-1">Présentation</h1>
        <x-trait-titre/>
        <div class="aspect-w-16 aspect-h-9">
            <iframe class="responsive-iframe m-auto pt-5 h-70 w-70 "src="https://www.youtube.com/embed/M7lc1UVf-VE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
        </div>
    </div>
    <div>
    <div class="w-full max-w-sm p-4 bg-[#FEFAE0] border border-dark rounded sm:p-6 dark:bg-gray-800 dark:border-gray-700">
        <h5 class="mb-3 text-base font-semibold text-[#606C38] md:text-xl dark:text-white">
            LOCALISATION
        </h5>
        <img src="{{URL::asset('assets/images/université/iut_romero.jpg')}} "  />
        <p class="text-sm font-normal text-gray-500 dark:text-gray-400 pt-3 pb-3">Évry – Site Roméro
            25 cours Monseigneur Roméro
            91000 Évry.</p>
            <iframe  src="https://maps.google.com/maps?width=100%25&amp;height=600&amp;hl=en&amp;q=iut%20rom%C3%A9ro%20evry+(Iut%20rom%C3%A9ro)&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"><a href="https://www.maps.ie/distance-area-calculator.html">measure acres/hectares on map</a></iframe>
    </div>

    </div>
</section>
@include('layouts.footer')