@extends('layouts.model')
@section('title','Entreprise')
@section('content')


<div class="container m-3">
    <form action="{{ route('entreprise.store') }}" method="POST" class="max-w-md mx-auto">
        @csrf

        <div class="mb-4">
            <label for="entreprise_nom" class="block mb-2 font-medium text-gray-700">Nom de l'entreprise</label>
            <input type="text" id="entreprise_nom" name="entreprise_nom" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300" required placeholder="{{ $entreprise->entreprise_nom ?? '' }}">
        </div>

        <div class="mb-4">
            <label for="email" class="block mb-2 font-medium text-gray-700">Email</label>
            <input id="email" type="email" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300 form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="{{ $entreprise->email ?? '' }}">

            @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span>
            @enderror
        </div>

        <div class="mb-4">
            <label for="rue" class="block mb-2 font-medium text-gray-700">Rue</label>
            <input type="text" id="rue" name="rue" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300" required placeholder="{{ $entreprise->rue ?? '' }}">
        </div>

        <div class="mb-4">
            <label for="code_postal" class="block mb-2 font-medium text-gray-700">Code postal</label>
            <input type="number" id="code_postal" name="code_postal" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300" required placeholder="{{ $entreprise->code_postal ?? '' }}">
        </div>

        <div class="mb-4">
            <label for="ville" class="block mb-2 font-medium text-gray-700">Ville</label>
            <input type="text" id="ville" name="ville" class="w-full px-4 py-2 border rounded-md focus:outline-none focus:ring focus:ring-blue-300" required placeholder="{{ $entreprise->ville ?? '' }}">
        </div>

        <div class="flex justify-end">
            <button type="submit" class="px-4 py-2 text-white bg-blue-500 rounded-md hover:bg-blue-600 focus:outline-none focus:ring focus:ring-blue-300">Enregistrer</button>
        </div>
    </form>
</div>

@endsection