<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Recuperation;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AffichageRecuperation extends Component{
       public $users;
        public $bgcolor1='#C09F5E';
        public $bgcolor2='#fff';
        public $border='50px';
        public $text='البحث حسب';
        public $name;
        public $searchClt;
        public $results;
        protected $activeButton=0;
        public $search;
        public function Change1()
        {
            $this->bgcolor1='#C09F5E';   
            $this->bgcolor2='#fff';
            $this->activeButton = 1;
            $this->Filtrage();

        }
        
        public function Change2()
        {
            $this->bgcolor2='#C09F5E'; 
            $this->bgcolor1='#fff'; 
            $this->activeButton = 2;
            $this->Filtrage(); 
         }
        public function Filtrage() {
            $checkUsers=User::select(
                'users.id',
                'users.name',
                DB::raw('COUNT(recuperations.id) as recuperations_count')
            )
            ->leftJoin('recuperations', 'recuperations.id_clt','=', 'users.id')
            ->where('recuperations.isDeleted',0 )
            ->where('users.role',0 )
            ->when($this->searchClt, function ($query) {
                $query->where('users.name', 'like', '%' . $this->searchClt . '%');
            })
            ->when($this->search, function ($query) {
                if ($this->text === 'اسم الموكل') {
                    $query->where('users.name', 'like', '%' . $this->search . '%');
                }
            })
            ->when($this->search, function ($query) {
                if ($this->text === 'المرجع') {
                    $query->where('recuperations.reference', 'like', '%' . $this->search . '%');
                }
            });
            if ($this->activeButton === 1) {
                $checkUsers->where('users.type_clt', 'clt2');
            }
                
            if ($this->activeButton === 2) {
                $checkUsers->where('users.type_clt', 'clt1');
            }
            $checkUsers->groupBy('users.id','users.name');
       
            
            $this->users=$checkUsers->get();
    
            // $query = User::select(
            //     'users.type_clt', 'users.id', 'users.name', DB::raw('COUNT(recuperations.id) as recuperations_count'))
            //     ->join('recuperations', 'recuperations.id_clt', '=', 'users.id')            
            //     ->where('recuperations.isDeleted', 0)
            //     ->where('users.role', 0)
    
              
            // $this->results = $query->groupBy(
            //     'users.id', 
            //     'users.name', 
            //     'users.type_clt'
            //     )
            //     ->get();
        }
        
        public function FilterName(){
            $this->text = 'اسم الموكل';
            $this->Filtrage();
        }
        public function FilterReference(){
            $this->text = 'المرجع';
            $this->Filtrage();
        }
        public function render()
        {
            $this->Filtrage();
    
        return view('livewire.affichage-recuperation')->with([
            'users'=>$this->users,
            'results'=>$this->results
        ]);
    }
}
