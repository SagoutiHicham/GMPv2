<?php

namespace App\Http\Controllers;

use App\Models\cours;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class SupportCours extends Controller
{
    /**
     * Display a listing of the resource.
     */ 
    public function index()
    {
        // $etudiants = DB::table('etudiant')->where('id_classe', '1')->get();
        $cours = DB::table('cours')->where('idCours', '1')->get();
        $matieres = DB::table('matiere')->get();

        return view('profile.Profil-Enseignant.supportCours', [
            'matieres' => $matieres,
            'cours' => $cours,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    // public function create(Request $request)
    // {
    //     //  Store data in database
    //     cours::create($request->all());
    //     return back()->with('success', 'Your form has been submitted.');
    // }

    // /**
    //  * Store a newly created resource in storage.
    //  */
    // public function store(Request $request)
    // {
    //     //
    // }

    // /**
    //  * Display the specified resource.
    //  */
    // public function show(cours $cours, $idClasse)
    // {
    //     $cours = DB::table('cours')->where('idCours', $idClasse)->get();
    //     return $cours;
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  */
    // public function edit(cours $cours)
    // {
    //     //
    // }

    // /**
    //  * Update the specified resource in storage.
    //  */
    // public function update(Request $request, cours $cours)
    // {
    //     //
    // }

    // /**
    //  * Remove the specified resource from storage.
    //  */
    // public function destroy(cours $cours)
    // {
    //     //
    // }
}
