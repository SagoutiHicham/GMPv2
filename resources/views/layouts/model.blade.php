<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <script src="https://cdn.tailwindcss.com"></script>
        <!-- Styles -->
       <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/1.6.5/flowbite.min.js"></script>
    </head>
    <body>
       
        <nav class="bg-white border-gray-200 dark:bg-gray-900">
            <div class="flex flex-wrap justify-start items-center mx-auto max-w-screen-xl p-4">
                <a href="{{ url('/') }}" >  <img  src="{{URL::asset('assets/images/logo/logo_iut_gmp.png')}}" class="h-20" alt="Logo" />
                    @if (auth()->check()) </a>
                  
                    <button href="{{ route('register') }}" type="button" data-dropdown-toggle="dropdownauth" data-modal-toggle="authentication-modal-entreprise" class="focus:outline-none text-white bg-[#283618] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">{{ auth()->user()->user_name }}</button>
                    <x-dropdownauth/>
                    @else
                    <a href="{{ route('register') }}" type="button" class="focus:outline-none text-white bg-[#283618] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">S'inscrire</a>
                    <a href="{{ route('login') }}" type="button" class="focus:outline-none text-white bg-[#283618] hover:bg-green-800 focus:ring-4 focus:ring-green-300 font-medium rounded text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-green-600 dark:hover:bg-green-700 dark:focus:ring-green-800">Se connecter</a>
                     @endif
            </div>
        </nav>
        

       
        <nav class="bg-gray-50 dark:bg-gray-700">
            <div class="max-w-screen-xl px-4 py-3 mx-auto">
                <div class="flex items-center justify-between">
                    <div>
                    <ul class="flex flex-row font-medium mt-0 mr-6 space-x-8 text-sm">
                        <li>
                            <a href="{{url('gmp')}}" class="text-[#606C38] dark:text-white hover:underline" aria-current="page">IUT</a>
                        </li>
                        <li>
                            <a href="{{url('formation')}}" class="text-[#BC6C25] dark:text-white hover:underline">FORMATION</a>
                        </li>
                        <li>
                            <a href="#" class="text-[#BC6C25] dark:text-white hover:underline">SCOLARITÉ</a>
                        </li>
                        <li>
                            <a href="#" class="text-[#BC6C25] dark:text-white hover:underline">VIE ÉTUDIANTE</a>
                        </li>
                        <li>
                            <a href="{{url('alternance')}}" class="text-[#BC6C25] dark:text-white hover:underline">OFFRE D'ALTERNANCE</a>
                        </li>
                        <li>
                            <a href="#" class="text-[#BC6C25] dark:text-white hover:underline">OFFRE PROJET TUTORÉ </a>
                        </li>
                        @if(auth()->check() && auth()->user()->fk_role_id === 6)
                        <li>
                            <a href="{{url('profil/entreprise')}}" class="text-[#BC6C25] dark:text-white hover:underline">Profil-Entreprise</a>
                        </li>
                        @else
                            
                        @endif
                     
                    </ul>
                    </div>
                    <div>
                        <x-zondicon-search  class="text-[#BC6C25] w-5"/>
                    </div>
                </div>
                
            </div>
        </nav>
        <div class="bg-[#283618] p-7 text-white text-2xl ">
            Département GMP – Génie Mécanique et Productique
        </div>
        <nav class="bg-[#606C38] p-3 text-white text-lg border-white border-t-2 border-b-2 ">
            ACCEUIL
        </nav>
        @yield('content')
        @include('layouts.footer')