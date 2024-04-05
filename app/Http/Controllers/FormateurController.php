<?php

namespace App\Http\Controllers;

use App\Models\Etablissement;

use App\Models\Formateur;
use App\Models\Metier;
use App\Models\Permutation;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class FormateurController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    { 
        /*$notification=Permutation::where("formateur_id",Auth::id()); */
        /* $formateurs=Formateur::all(); */
        $metiers=Metier::all();
        $Etablissement=Etablissement::all();
        return view("formateur.index",[/* "formateurs"=>$formateurs ,*/"metiers"=>$metiers,"etablissements"=>$Etablissement]);
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
        {
        
            $request->validate([
                
                'photo' => 'required|mimes:jpeg,png,jpg,gif', 
            ]);
            
            // Handle the image
        $image = $request->file('photo');
        $currentTimestamp = Carbon::now()->timestamp;
        $imageName = $currentTimestamp; 
        $image->move('images', $imageName.".".$image->getClientOriginalExtension());
        $formateurData = $request->post();
        /* dd($formateurData); 
        nom,prenom,tel,matricule,grade,poste,metier_id,etablissement_id,email,password,date_naissance,date_recrutement,photo"
        */
        $formateurData['photo'] = $imageName.".".$image->getClientOriginalExtension();
         
        $formateur= new Formateur;
        $formateur['nom']=$formateurData['nom'];
        $formateur['prenom']=$formateurData['prenom'];
        $formateur['tel']=$formateurData['tel'];
        $formateur['matricule']=$formateurData['matricule'];
        $formateur['grade']=$formateurData['grade'];
        $formateur['poste']=$formateurData['poste'];
        $formateur['metier_id']=$formateurData['metier_id'];
        $formateur['etablissement_id']=$formateurData['etablissement_id'];
        $formateur['email']=$formateurData['email'];
        $formateur['password']=Hash::make($formateurData['password']);
        $formateur['date_naissance']=$formateurData['date_naissance'];
        $formateur['date_recrutement']=$formateurData['date_recrutement'];
        $formateur['photo']=$formateurData['photo'];
        /* dd($formateur); */
        $formateur->save();

       
        
        return redirect()->route("formateurs.index");
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(Formateur $formateur)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $formateur=Formateur::find($id);
        $metiers=Metier::all();
        $Etablissements=Etablissement::all();   
        
        return view("formateur.edit",compact("metiers","Etablissements","formateur"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Formateur $formateur)
    {
        $validatedData = $request->validate([
            'nom' => 'required', // Adjust validation rules as needed
            // Add validation rules for other attributes here
        ]);

        $formateurData = $request->post();

       
        $formateur['nom']=$formateurData['nom'];
        $formateur['prenom']=$formateurData['prenom'];
        $formateur['tel']=$formateurData['tel'];
        $formateur['matricule']=$formateurData['matricule'];
        $formateur['grade']=$formateurData['grade'];
        $formateur['poste']=$formateurData['poste'];
        $formateur['metier_id']=$formateurData['metier_id'];
        $formateur['etablissement_id']=$formateurData['etablissement_id'];
        $formateur['email']=$formateurData['email'];
        $formateur['password']=$formateurData['password'];
        $formateur['date_naissance']=$formateurData['date_naissance'];
        $formateur['date_recrutement']=$formateurData['date_recrutement'];

if($request->hasFile('photo')){
    $image = $request->file('photo');
    $currentTimestamp = Carbon::now()->timestamp;
    $imageName = $currentTimestamp; // Append current timestamp to ensure unique names
     // Store the image in the 'images' directory
    $image->move('images', $imageName.".".$image->getClientOriginalExtension());
    $formateur->photo=$imageName.".".$image->getClientOriginalExtension();
}
        // Update the resource with the validated data
        $formateur->save();
        return redirect()->route("formateurs.index"); 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Formateur $formateur)
    {
        //
    }

    public function singIn(Request $request)
{
    $email = $request->email;
    $password = $request->password; // Corrected variable name
    $values = ['email' => $email, 'password' => $password];
    
    
    // Attempt authentication
    if(Auth::attempt($values)){
        //Connectewh
        
        $request->session()->regenerate();
        return redirect()->route('formateurs.index');
    }else{
        return back()->with('danger', 'Identifiants incorrects. Veuillez réessayer.');
        // SHI hJA RALTA
    }
}
public function logout(){
    session()->flush();
    Auth::logout();
    return redirect()->route('login');
    
}
}
