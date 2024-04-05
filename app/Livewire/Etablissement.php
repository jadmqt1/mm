<?php

namespace App\Livewire;

use App\Models\Etablissement as ModelsEtablissement;
use Livewire\Component;

class Etablissement extends Component
{
    public $etablissements;
    public $villes;


    public $id_etablissement=0;

    
    public function fetch(){
       return ModelsEtablissement::all();
      } 

public function idGet($id){
   $this->id_etablissement = $id;
   
   
}
public function delete(){
   
   if($this->id_etablissement == 0) {
       return;
       }
       $stagiare=ModelsEtablissement::findOrFail($this->id_etablissement);
       $stagiare->delete();
       $this->etablissements=$this->fetch();
       $this->id_etablissement = 0;
}
    public function render()
    {
        return view('livewire.etablissement');
    }
}
