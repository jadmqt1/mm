<?php

namespace App\Livewire;

use App\Models\stagiare as ModelsStagiare;
use Livewire\Component;

class Stagiare extends Component
{
    public $stagiares;
    public $groupes;

    public $id_stag=0;

    
     public function fetch(){
        return ModelsStagiare::all();
       } 
/*     public function idGet($id)
    {
        
        $this->id_stag=$id;
       
    dd($this->stag);
} */
public function idGet($id){
    $this->id_stag = $id;
    
    
}
public function delete(){
    
    if($this->id_stag == 0) {
        return;
        }
        $stagiare=ModelsStagiare::findOrFail($this->id_stag);
        $stagiare->delete();
        $this->stagiares=$this->fetch();
        $this->id_stag = 0;
}
    public function render()
    {       
        return view('livewire.stagiare');
    }
}
