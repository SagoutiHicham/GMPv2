@extends('layouts.model')
@section('title','\'projet')
@section('content')


<div class="container  m-3">
    <h1 class="text-center">Ajouter un projet tutorés</h1>

    @if(auth()->check() && auth()->user()->fk_role_id === 6)
    <form action="{{ route('projet.store') }}" method="POST" class="max-w-md mx-auto">
        @csrf
    
    
        <div class="mb-4">
            <label for="alternance_date_debut" class="block mb-1">Nom du projet</label>
            <input type="date" name="projet_nom" id="projet_nom" value="projet_nom" required class="w-full px-3 py-2 border rounded">
            @error('projet_nom')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_date_fin" class="block mb-1">description</label>
            <textarea type="date" name="detail" id="detail" value="detail" required class="w-full px-3 py-2 border rounded"></textarea>
            @error('description')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>

    
    
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Enregistrer</button>
    </form>
   
    @endif
</div>
    
@endsection