<?php

namespace App\Http\Controllers;

use App\Models\Filieres;
use App\Models\groupes;
use Illuminate\Http\Request;

class FilieresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
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
    public function show(Filieres $filieres)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filieres $filieres)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Filieres $filieres)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filieres $filieres)
    {
        //
    }

    public function fetchGroupes($filiereId)
    {
        $groupes = groupes::where('filiere_id', $filiereId)->get();
        return response()->json($groupes);
    }

//     public function fetchGroupes($filiereName)
// {
//     // Find the filiere by name
//     $filiere = Filiere::where('name_filiere', urldecode($filiereName))->first();

//     if (!$filiere) {
//         return response()->json(['error' => 'Filiere not found'], 404);
//     }

//     // Get the groupes associated with the found filiere
//     $groupes = Groupe::where('filiere_id', $filiere->id)->get();

//     return response()->json($groupes);
// }

}
