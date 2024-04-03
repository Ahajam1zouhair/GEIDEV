<?php

namespace App\Http\Controllers;

use App\Models\Filires;
use App\Http\Requests\StoreFiliresRequest;
use App\Http\Requests\UpdateFiliresRequest;


class FiliresController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // vi
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreFiliresRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Filires $filires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Filires $filires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFiliresRequest $request, Filires $filires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Filires $filires)
    {
        //
    }
}
