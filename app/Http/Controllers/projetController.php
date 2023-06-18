<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\Projet;
use App\Models\User;
use App\Models\Alternance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class projetController extends Controller


{

    public function store(Request $request)
    {
        $user_id = auth()->id();

        $entreprise = Entreprise::where('fk_projet_user_id', $user_id)->first();



        if (auth()->check()) {
            $request->validate([
                'projet_nom' => 'required|date',
                'detail' => 'required|date',
                // 'alternance_detail' => 'required|string',
            ]);
            $projet = new Projet;
            $projet->projet_nom = $entreprise->entreprise_nom;
            $projet->detail = $request->detail;
            $projet->updated_at = $request->alternance_detail;
            $projet->created_at = $entreprise->rue;

            $projet->fk_projet_user_id = $user_id;
        } else {
            // Validez les données reçues depuis le formulaire
            $request->validate([
                'projet_nom' => 'required|string',
                'detail' => 'required|date',
                'updated_at' => 'required|date',
                'created_at' => 'required|string',
             
            ]);
            $projet = new Projet;
            $projet->projet_nom = $request->projet_nom;
            $projet->detail = $request->detail;
        }

        // Créez une nouvelle instance du modèle Alternance avec les données du formulaire


        // Enregistrez le modèle dans la base de données
        $projet->save();

        // Redirigez ou effectuez toute autre action appropriée
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès.');
    }
}
