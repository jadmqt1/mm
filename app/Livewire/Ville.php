<?php

namespace App\Livewire;

use App\Models\Ville as ModelsVille;
use Livewire\Component;
use Livewire\WithPagination;

class Ville extends Component
{
    public $regions;
    use WithPagination;

    public $id_ville=0;

    
public function fetch(){
   return Ville::all();
  } 

  public function idGet($id){
    $this->id_ville = $id;
    
    
}
public function delete(){

if($this->id_ville == 0) {
   return;
   }
   $ville=ModelsVille::findOrFail($this->id_ville);
   $ville->delete();
  $this->fetch();
   $this->id_ville = 0;
}


    public function render()
    {
        $villes=ModelsVille::paginate(4);
        return view('livewire.ville',["villes"=>$villes]);
    }
}
