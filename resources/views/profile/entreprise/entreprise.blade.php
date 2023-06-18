@extends('layouts.model')
@section('title','profil entreprise')
@section('content')


<div class=" m-3">
    <h1 class="text-center">Mon entreprise</h1>
    <div class="container mx-auto">
        <table class="min-w-full bg-white">
          
            <tr>
              <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold uppercase tracking-wider">Nom de l'entreprise</th>
              <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold uppercase tracking-wider">Email de l'entreprise</th>
              <th class="px-6 py-3 border-b-2 border-gray-300 text-left text-sm font-semibold uppercase tracking-wider">Adresse de l'entreprise</th>
            </tr>
          
          <tbody>
            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
              @empty($entreprise->entreprise_nom)
                vide
              @else
                {{ $entreprise->entreprise_nom }}
              @endempty
            </td>
            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
              @empty($entreprise->email)
                vide
              @else
                {{ $entreprise->email }}
              @endempty
            </td>
            <td class="px-6 py-4 whitespace-nowrap border-b border-gray-300">
              @empty($entreprise->rue)
                vide
              @else
                {{ $entreprise->rue }} {{ $entreprise->code_postal }} {{ $entreprise->ville }}
              @endempty
            </td>
          </tbody>
        </table>
      <br>
        <a href="{{url('profil/entreprise/edit')}}" style="    text-align: center;  width: 10%;justify-content: center;display: flex;margin: auto;background: #606c38;"  class=" text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800">Modifier</a>
      </div>
</div>
@endsection
