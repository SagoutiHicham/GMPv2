<?php

namespace App\Http\Controllers;

use App\Models\Entreprise;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Redirector;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class EntrepriseController extends Controller
{
    public function store(Request $request)
<<<<<<< Updated upstream
    {   $id = auth()->id();
       
        $records = Entreprise::where('fk_entreprise_user_id',$id)->get();
    
=======
    {

        $id = auth()->id();

        $records = Entreprise::where('fk_entreprise_user_id',$id)->get();

>>>>>>> Stashed changes
        if ($records->isEmpty()) {
            // La colonne 'fk_entreprise_user_id' est vide pour tous les enregistrements
            // Effectuez les actions nécessaires ici

            $id = auth()->id();
            $request->validate([
                'entreprise_nom' => 'required|string',
                'rue' => 'required|string',
                'code_postal' => 'required|integer',
                'ville' => 'required|string',
            ]);

            $entreprise = new Entreprise;
            $entreprise->entreprise_nom = $request->entreprise_nom;
            $entreprise->email = $request->email;
            $entreprise->rue = $request->rue;
            $entreprise->code_postal = $request->code_postal;
            $entreprise->ville = $request->ville;
            $entreprise->fk_entreprise_user_id = $id;

            $entreprise->save();
        } else {
            // La colonne 'fk_entreprise_user_id' est remplie pour au moins un enregistrement
            // Effectuez les actions nécessaires ici

            // Récupérer les données du formulaire en excluant 'fk_entreprise_user_id'

            $id = auth()->id();

            $entreprise = Entreprise::where('fk_entreprise_user_id', $id)->first();
            $entrepriseId = $entreprise->entreprise_id;
            $data = $request->only([

                'entreprise_nom',
                'rue',
                'code_postal',
                'ville',
                'email'
            ]);

            // Mettre à jour les valeurs dans la table "entreprise"
            $entreprise = Entreprise::findOrFail($entrepriseId);
            $entreprise->update($data);
        }

        return redirect()->to('profil/entreprise')->with('success', 'L\'entreprise a été enregistrée avec succès.');
    }

    public function show()
    {

        $id = auth()->id();

        $entreprise = Entreprise::where('fk_entreprise_user_id', $id)->first();

        return view('profile.entreprise.entreprise', compact('entreprise'));
    }

    public function showedit()
    {

        $id = auth()->id();

        $entreprise = Entreprise::where('fk_entreprise_user_id', $id)->first();

        return view('profile.entreprise.editentreprise', compact('entreprise'));
    }
}
