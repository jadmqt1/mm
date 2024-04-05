<?php

namespace App\Http\Controllers;

use App\Models\Metier;
use Illuminate\Http\Request;

class MetierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view("metier.index");
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
            
            'metier' => 'required', 
        ]);
        Metier::create($request->all());
        return redirect()->route("metiers.index")->with("success","Vos données ont été enregistrées avec succès !");
    }

    /**
     * Display the specified resource.
     */
    public function show(Metier $metier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $metier=Metier::find($id);
        return view("metier.edit",compact("metier"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Metier $metier)
    {
        $request->validate([
            
            'metier' => 'required', 
        ]);
        $metier->update($request->post());
        return redirect()->route("metiers.index");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Metier $metier)
    {
        //
    }
}
