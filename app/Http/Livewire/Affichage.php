<?php

namespace App\Http\Livewire;
use App\Models\User;

use Livewire\Component;
use Livewire\WithPagination;

class Affichage extends Component
{  use WithPagination;

    protected $paginationTheme = 'bootstrap';

    public $bgcolor1='#C09F5E';
    public $bgcolor2='#fff';
    public $border='50px';
    
    public $name;
    public $LastAction;
    public $email;
    public $tel;
    public $status;

    public $client1;
    public $client2;
    public $nom_Agence=null;

    public $activeButton=0;
    
    public function Change1()
    {
        $this->bgcolor1='#C09F5E';   
        $this->bgcolor2='#fff';
        $this->activeButton = 1;
    }
    
    public function Change2()
    {
        $this->bgcolor2='#C09F5E'; 
        $this->bgcolor1='#fff'; 
        $this->activeButton = 2;
    }
    public function searchName()
    {
        $this->resetPage();
    }

    public function render()
    {
        
        $query = User::where(function ($query) {
            $query->where('isDeleted', 0)
                ->where(function ($query) {
                    $query->where('type_clt', 'clt1')->orWhere('type_clt', 'clt2');
                })
        
            ->when($this->name, function ($query) {
                    $query->where('name', 'like', '%' . $this->name . '%')
                        ->orWhere('LastName', 'like', '%' . $this->name . '%');
            })

            ->when($this->nom_Agence, function ($query) {
                $query->where('nom_Agence', 'like', '%' . $this->nom_Agence . '%');
            })

            ->when($this->email, function ($query) {
            $query->where('email', 'like', '%' . $this->email . '%');
            })

            ->when($this->status, function ($query) {
            $query->where('status', 'like', '%' . $this->status . '%');
            })

            ->when($this->LastAction, function ($query) {
                $query->where('created_at', 'like', '%' . $this->LastAction . '%');
                });
            
            if ($this->activeButton === 1) {
                $query->where('type_clt', 'clt2');
            }
        
            if ($this->activeButton === 2) {
                $query->where('type_clt', 'clt1');
            }
        })
            ->paginate(2);
        return view('livewire.affichage',['data' => $query,'activeButton'=>$this->activeButton]);
    }
}
