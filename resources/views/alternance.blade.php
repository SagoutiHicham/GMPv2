@extends('layouts.model')
@section('title','Offre d\'alternance')
@section('content')


<div class="container  m-3">
    <h1 class="text-center">Ajouter une offre d'alternance</h1>

    @if(auth()->check() && auth()->user()->fk_role_id === 6)
    <form action="{{ route('alternance.store') }}" method="POST" class="max-w-md mx-auto">
        @csrf
    
    
        <div class="mb-4">
            <label for="alternance_date_debut" class="block mb-1">Date de début</label>
            <input type="date" name="alternance_date_debut" id="alternance_date_debut" value="{{ old('alternance_date_debut') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_date_debut')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_date_fin" class="block mb-1">Date de fin</label>
            <input type="date" name="alternance_date_fin" id="alternance_date_fin" value="{{ old('alternance_date_fin') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_date_fin')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_detail" class="block mb-1">Détails</label>
            <textarea name="alternance_detail" id="alternance_detail" rows="4" required class="w-full px-3 py-2 border rounded">{{ old('alternance_detail') }}</textarea>
            @error('alternance_detail')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
    
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Enregistrer</button>
    </form>
    @else
    <form action="{{ route('alternance.store') }}" method="POST" class="max-w-md mx-auto">
        @csrf
    
        <div class="mb-4">
            <label for="alternance_nom" class="block mb-1">Nom</label>
            <input type="text" name="alternance_nom" id="alternance_nom" value="{{ old('alternance_nom') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_nom')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_date_debut" class="block mb-1">Date de début</label>
            <input type="date" name="alternance_date_debut" id="alternance_date_debut" value="{{ old('alternance_date_debut') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_date_debut')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_date_fin" class="block mb-1">Date de fin</label>
            <input type="date" name="alternance_date_fin" id="alternance_date_fin" value="{{ old('alternance_date_fin') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_date_fin')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_detail" class="block mb-1">Détails</label>
            <textarea name="alternance_detail" id="alternance_detail" rows="4" required class="w-full px-3 py-2 border rounded">{{ old('alternance_detail') }}</textarea>
            @error('alternance_detail')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_rue" class="block mb-1">Rue</label>
            <input type="text" name="alternance_rue" id="alternance_rue" value="{{ old('alternance_rue') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_rue')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_code_postal" class="block mb-1">Code postal</label>
            <input type="number" name="alternance_code_postal" id="alternance_code_postal" value="{{ old('alternance_code_postal') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_code_postal')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_ville" class="block mb-1">Ville</label>
            <input type="text" name="alternance_ville" id="alternance_ville" value="{{ old('alternance_ville') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_ville')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <div class="mb-4">
            <label for="alternance_email" class="block mb-1">Email</label>
            <input type="email" name="alternance_email" id="alternance_email" value="{{ old('alternance_email') }}" required class="w-full px-3 py-2 border rounded">
            @error('alternance_email')
                <span class="text-red-500">{{ $message }}</span>
            @enderror
        </div>
    
        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded">Enregistrer</button>
    </form>
    @endif
</div>
    
@endsection