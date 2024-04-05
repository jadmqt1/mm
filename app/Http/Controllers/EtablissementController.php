<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;
use App\Models\Ville;
use Illuminate\Http\Request;

class EtablissementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $etablissements=Etablissement::all();
        $villes=Ville::all();
        return view("etablissement.index",compact("etablissements","villes")); 
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
        $request->validate([
            
            'code' => 'required', 
        ]);
        Etablissement::create($request->all());
        return redirect()->route("etablissements.index");
    }

    /**
     * Display the specified resource.
     */
    public function show(Etablissement $etablissement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $villes=Ville::all();
        $etablissement=Etablissement::find($id);
        return view("etablissement.edit",compact("etablissement","villes"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Etablissement $etablissement)
    {
        $request->validate([
            
            'code' => 'required', 
        ]);
        $etablissement->update($request->post());
        return redirect()->route("etablissements.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Etablissement $etablissement)
    {
        //
    }
}
