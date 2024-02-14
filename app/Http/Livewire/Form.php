<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Form extends Component
{
     public $type_clt=true;
    public function Form1(){
        $this->type_clt=true;
    }
    public function Form2(){
        $this->type_clt=false;
       
    }
    // public function save(){
    //     if($this->selectedForm){
    //         $formFields=$this->validate([
    //             'name'=>'required|string|min:3'
    //         ]);
    //         dd('saad');
    //     }elseif(!$this->selectedForm){
    //        $formFields= $this->validate([
    //         'nom_Agence'=>'required|string|min:3',
    //         ]);
    //         dd('saad');
    //     }
    // }
    public function render()
    {
        return view('livewire.form')->with([
            'type_clt' =>$this->type_clt ,
        ]);
    }
}
