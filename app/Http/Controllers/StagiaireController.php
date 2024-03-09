<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class StagiaireController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiaires = Stagiaire::all();
        return view('Stagiaire.index', compact('stagiaires'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Stagiaire.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
        $validated = $request->validate([
            'matricule' => 'required',
            'civilite' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'statut' => 'required',
            'cin' => 'required|unique:stagiaires',
            'date_naissance' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
            'filere' => 'required',
            'groupe' => 'required',
            'niveau' => 'required',
            'type_stag' => 'required',
            'commentaire' => 'required'
        ]);
        
        Stagiaire::create($validated);

        return redirect()->route('stagiaire.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //
    }
    public function search(Request $request)
    {
        dd($request);
    }
}
