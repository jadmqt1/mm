<?php

namespace App\Http\Controllers;

use App\Models\Region;
use App\Models\Ville;
use Illuminate\Http\Request;

class VilleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $regions=Region::all();
        return view("ville.index",compact("regions"));
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
            
            'ville' => 'required', 
        ]);
        ville::create($request->all());
        return redirect()->route("villes.index")->with("success","Vos données ont été enregistrées avec succès !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Ville $ville)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $ville=ville::find($id);
        $regions=Region::all();
        return view("ville.edit",compact("regions","ville"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Ville $ville)
    {
        $request->validate([
            'ville' => 'required', 
        ]);
        $ville->update($request->post());
        return redirect()->route("villes.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Ville $ville)
    {
        //
    }
}
