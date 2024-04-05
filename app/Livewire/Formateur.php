<?php

namespace App\Livewire;

use App\Models\Formateur as ModelsFormateur;
use Livewire\Component;
use Livewire\WithPagination;



class Formateur extends Component
{
    /* public $formateurs; */
    public $metiers;
    public $etablissements;

    use WithPagination;
    



    public $id_formateur=0;

    
    public function fetch(){
       return ModelsFormateur::all();
      } 

public function idGet($id){
   $this->id_formateur = $id;
   
   
}
public function delete(){
   
   if($this->id_formateur == 0) {
       return;
       }
       $stagiare=ModelsFormateur::findOrFail($this->id_formateur);
       $stagiare->delete();
      /*  $this->formateurs=$this->fetch(); */
       $this->id_formateur = 0;
}

    public function render()
    {
        $formateurs=ModelsFormateur::paginate(6);
       
        return view('livewire.formateur',compact("formateurs"));
    }
}
