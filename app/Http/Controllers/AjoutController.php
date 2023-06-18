<?php

namespace App\Http\Controllers;

use App\Models\Note;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class NoteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etudiants = DB::table('etudiant')->where('id_classe', '1')->get();
        $matieres = DB::table('matiere')->get();

        return view('profile.Profil-Enseignant.Ajoutnotes', [
            'matieres' => $matieres,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //  Store data in database
        Note::create($request->all());
        return back()->with('success', 'Your form has been submitted.');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Note $note, $idClasse)
    {
        $etudiants = DB::table('etudiant')->where('id_classe', $idClasse)->get();
        return $etudiants;
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Note $note)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Note $note)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Note $note)
    {
        //
    }
}
