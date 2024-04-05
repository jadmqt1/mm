<?php

namespace App\Livewire;

use App\Models\Metier as ModelsMetier;
use Livewire\Component;
use Livewire\WithPagination;

class Metier extends Component
{
    use WithPagination;
    public $id_metier=0;

    
     public function fetch(){
        return ModelsMetier::all();
       } 

public function idGet($id){
    $this->id_metier = $id;
    
    
}
public function delete(){
    
    if($this->id_metier == 0) {
        return;
        }
        $stagiare=ModelsMetier::findOrFail($this->id_metier);
        $stagiare->delete();
        
        $this->id_metier = 0;
        
}
    public function render()
    {
        $metiers=ModelsMetier::paginate(4);
        return view('livewire.metier',["metiers"=>$metiers]);
    }
}
