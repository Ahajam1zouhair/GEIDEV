<?php

namespace App\Http\Controllers;

use App\Models\Stagiaire;
use Illuminate\Http\Request;

class DachboardController extends Controller
{
    public function index()
    {
        $StagiaireStatuts = Stagiaire::pluck('statut')->unique()->toArray();
        $totaleStagiairesStatuts = [];
        
        foreach ($StagiaireStatuts as $statut) {
            $Stagiaires = Stagiaire::where('statut', $statut)->count(); 
            $totaleStagiairesStatuts[] = [
                'name' => $statut,
                'value' => $Stagiaires
            ];
        }
        $totaleStagiaires = Stagiaire::count() ;
        // dd($totaleStagiaires);
        return view('Dashboard.Dashboard', compact('totaleStagiaires'), ['totaleStagiairesStatuts' => $totaleStagiairesStatuts]);
    }
}
