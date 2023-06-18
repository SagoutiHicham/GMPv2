<?php

namespace App\Http\Controllers;
use App\Models\Entreprise;
use App\Models\User;
use App\Models\Alternance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AlternanceController extends Controller
{
    public function store(Request $request)
    {   
        $user_id = auth()->id();

        $entreprise = Entreprise::where('fk_entreprise_user_id',$user_id)->first();

        if (auth()->check()){
            $request->validate([
                'alternance_date_debut' => 'required|date',
                'alternance_date_fin' => 'required|date',
                'alternance_detail' => 'required|string',
            ]);
        $alternance = new Alternance;
        $alternance->alternance_nom = $entreprise->entreprise_nom;
        $alternance->alternance_date_debut = $request->alternance_date_debut;
        $alternance->alternance_date_fin = $request->alternance_date_fin;
        $alternance->alternance_detail = $request->alternance_detail;
        $alternance->alternance_rue = $entreprise->rue;
        $alternance->alternance_code_postal = $entreprise->code_postal;
        $alternance->alternance_ville = $entreprise->ville;
        $alternance->alternance_email = $entreprise->email;
        $alternance->fk_user_id = $user_id;

        }else {
             // Validez les données reçues depuis le formulaire
        $request->validate([
            'alternance_nom' => 'required|string',
            'alternance_date_debut' => 'required|date',
            'alternance_date_fin' => 'required|date',
            'alternance_detail' => 'required|string',
            'alternance_rue' => 'required|string',
            'alternance_code_postal' => 'required|integer',
            'alternance_ville' => 'required|string',
            'alternance_email' => 'required|string|email',
        ]);
        $alternance = new Alternance;
        $alternance->alternance_nom = $request->alternance_nom;
        $alternance->alternance_date_debut = $request->alternance_date_debut;
        $alternance->alternance_date_fin = $request->alternance_date_fin;
        $alternance->alternance_detail = $request->alternance_detail;
        $alternance->alternance_rue = $request->alternance_rue;
        $alternance->alternance_code_postal = $request->alternance_code_postal;
        $alternance->alternance_ville = $request->alternance_ville;
        $alternance->alternance_email = $request->alternance_email;
        }
        
        // Créez une nouvelle instance du modèle Alternance avec les données du formulaire
        

        // Enregistrez le modèle dans la base de données
        $alternance->save();

        // Redirigez ou effectuez toute autre action appropriée
        return redirect()->back()->with('success', 'Les données ont été enregistrées avec succès.');
    }
}