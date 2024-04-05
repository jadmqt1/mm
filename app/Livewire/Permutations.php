<?php

namespace App\Livewire;

use App\Models\Permutation;
use Livewire\Component;

class Permutations extends Component
{
    public $permutations;
    public $villes;
    public $formateurs;


public $id_permutation=0;

    
public function fetch(){
   return Permutation::all();
  } 

public function idGet($id){
$this->id_permutation = $id;


}
public function delete(){

if($this->id_permutation == 0) {
   return;
   }
   $stagiare=Permutation::findOrFail($this->id_permutation);
   $stagiare->delete();
   $this->permutations=$this->fetch();
   $this->id_permutation = 0;
}
    public function render()
    {
        return view('livewire.permutations');
    }
}
