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
    public function createBeneficiaire()
    {
        return view('stagiaire.createBeneficiaire');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $validationRules = [
            'civilite' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'statut' => 'required',
            'cin' => 'required|unique:stagiaires',
            'date_naissance' => 'required',
            'tel' => 'required',
            'email' => 'required|email',
            'type_stag' => 'required',
        ];

        // Add conditional validation for 'commentaire' or 'filere', 'groupe', 'niveau'
        if ($request['type_stag'] === "externe") {
            $validationRules['commentaire'] = 'required';
        } else {
            $validationRules['matricule'] = 'required';
            $validationRules['filere'] = 'required';
            $validationRules['groupe'] = 'required';
            $validationRules['niveau'] = 'required';
        }

        $validated = $request->validate($validationRules);

        Stagiaire::create($validated);

        return redirect()->route('stagiaire.index');
    }


    /**
     * Display the specified resource.
     */
    public function show(Stagiaire $stagiaire)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Stagiaire $stagiaire)
    {
        if ($stagiaire->type_stag === "externe") {
            return view('stagiaire.editBeneficiaire', compact('stagiaire'));
        } else {
            return view('Stagiaire.edit', compact('stagiaire'));
        }
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Stagiaire $stagiaire)
    {
        $validationRules = [
            'email' => 'required|email',
            'type_stag' => 'required',
            'nom' => 'required',
            'prenom' => 'required',
            'civilite' => 'required',
            'statut' => 'required',
            'cin' => 'required',
            'date_naissance' => 'required',
            'tel' => 'required',
        ];
    
        if ($request->input('type_stag') === "externe") {
            $validationRules['commentaire'] = 'required';
        } else {
            $validationRules['matricule'] = 'required';
            $validationRules['filere'] = 'required';
            $validationRules['groupe'] = 'required';
            $validationRules['niveau'] = 'required';
        }
    
        $validated = $request->validate($validationRules);
        $stagiaire->update($validated);
    
        return redirect()->route('stagiaire.index');
    }
    

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Stagiaire $stagiaire)
    {
        //
    }
    public function apiIndex(Request $request)
    {
        $query = Stagiaire::query();

        $stagiaires = $query->get();
        return response()->json($stagiaires);
    }
}
