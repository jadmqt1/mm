<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;
use Carbon\Carbon;


use App\Models\stagiare;
use Illuminate\Http\Request;


class StagiareController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $stagiares=stagiare::all();
        return view("stagiare.index",["stagiares"=>$stagiares]);
    }

    /**
     * Show the form for creating a new resource.
     */
    

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        
        $request->validate([
            
            'photo' => 'required|mimes:jpeg,png,jpg,gif', 
        ]);
        
        // Handle the image
    $image = $request->file('photo');
    $currentTimestamp = Carbon::now()->timestamp;
    $imageName = $currentTimestamp; 
    $image->move('images', $imageName.".".$image->getClientOriginalExtension());
    $stagiareData = $request->post();
    $stagiareData['photo'] = $imageName.".".$image->getClientOriginalExtension();
    stagiare::create($stagiareData);
    return redirect()->route("stagiares.index");
    }

    /**
     * Display the specified resource.
     */

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        
        $stagiare=stagiare::find($id);
        return view("stagiare.edit",["stagiare"=>$stagiare]);
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, stagiare $stagiare)
    {
        
       $validatedData = $request->validate([
            'nom' => 'required', // Adjust validation rules as needed
            // Add validation rules for other attributes here
        ]);
        $stagiare->nom=$request->input("nom");
        $stagiare->prenom=$request->input("prenom");
        $stagiare->email=$request->input("email");
        $stagiare->ville=$request->input("ville");
        
        $stagiare->adresse=$request->input("adresse");
if($request->hasFile('photo')){
    $image = $request->file('photo');
    $currentTimestamp = Carbon::now()->timestamp;
    $imageName = $currentTimestamp; // Append current timestamp to ensure unique names
     // Store the image in the 'images' directory
    $image->move('images', $imageName.".".$image->getClientOriginalExtension());
    $stagiare->photo=$imageName.".".$image->getClientOriginalExtension();
}
        // Update the resource with the validated data
        $stagiare->save($validatedData);
        return redirect()->route("stagiares.index"); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(stagiare $stagiare)
    {
        //
    }
}
