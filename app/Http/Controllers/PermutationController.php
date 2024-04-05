<?php

namespace App\Http\Controllers;

use App\Models\Formateur;
use App\Models\Permutation;
use App\Models\Ville;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class PermutationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $villes=Ville::all();
        $formateurs=Formateur::all();        
        $permutations=Permutation::all();
            return view("permutation.index",compact("permutations","formateurs","villes"));
        
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //go to livewire
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $formateurData = $request->post();
        $permutation=new Permutation;
        $permutation->date=$formateurData["date"];
        $permutation->ville_id=$formateurData["ville_id"];
        $permutation->formateur_id=$formateurData["formateur_id"];
        /* dd($request->all()); */
        $permutation->save();
        return redirect()->route("permutations.index");
    }
 
    /**
     * Display the specified resource.
     */
    public function show(Permutation $permutation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $villes=Ville::all();
        

        $permutation=Permutation::find($id);
        return view("permutation.edit",compact("permutation","villes"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Permutation $permutation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Permutation $permutation)
    {
        //
    }

    public function valide($id)
    {
        $permutation=Permutation::find($id);
        $permutation->valide=1;
        $permutation->save();
        return redirect()->route("permutations.index");
    }
}
