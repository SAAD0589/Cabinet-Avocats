<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Implementation;

use App\Models\Dossier;


class AffichageImplementation extends Component

{ 

    public $implementation;
    public $activeButton=1;
    public $bgcolor1='#C09F5E';
    public $bgcolor2='#fff';
    public $search;
    public $text='البحث حسب';


    public function Change1()
    {
        $this->bgcolor1='#C09F5E';   
        $this->bgcolor2='#fff';
        $this->activeButton = 1;

        $this->Affichage();


            }
    
    public function Change2()
    {
        $this->bgcolor2='#C09F5E'; 
        $this->bgcolor1='#fff'; 
        $this->activeButton = 2;
        $this->Affichage();

     }

    public function Affichage(){
        $query=Dossier::select(
            'User_clt.name as Clt',
            'Adversaire as Enmy',
            'dossiers.reference',
            'tribunal_types.type_nom',
            'implementations.status',
            'implementations.id as IdImp',
            'implementations.date_R',
            'implementations.folder_implentaire_num',
            'implementations.implementation_num',
            'implementations.trib_reference',
            'implementations.procedure'
        )
        ->leftJoin('users as User_clt', 'User_clt.id','=', 'dossiers.id_clt')

        ->leftJoin('tribunals_dossiers', 'dossiers.id','=', 'tribunals_dossiers.dossier_id')
        ->leftJoin('tribunal_types', 'tribunal_types.id','=', 'tribunals_dossiers.type_tribunal')
        ->leftJoin('implementations', 'implementations.dossier_id','=', 'tribunals_dossiers.id')
        ->where('implementations.isDeleted',0 )
        ->when($this->search, function ($query) {
            if ($this->text === 'مرجع الملف') {
                $query->where('dossiers.reference', 'like', '%' . $this->search . '%');


            }
        })
        ->when($this->search, function ($query) {
            if ($this->text === "رقم الملف التنفيذي") {
                $query->where('implementations.folder_implentaire_num', 'like', '%' . $this->search . '%');

            }
        })
        ->when($this->search, function ($query) {
            if ($this->text === 'رقم الملف') {
                $query->where('implementations.trib_reference', 'like', '%' . $this->search . '%');

            }
        });
        if ($this->activeButton === 1) {
            $query->where('dossiers.type_clt', 'clt2');

        }
            
        if ($this->activeButton === 2) {
            $query->where('dossiers.type_clt', 'clt1');

        }
        
        $this->implementation=$query->get();


    }
    public function FilterReference(){
        $this->text = 'مرجع الملف';
        $this->Affichage();
    }
    public function FilterNum(){
        $this->text ="رقم الملف التنفيذي";
        $this->Affichage();
    }
    public function FilterNumDoc(){
        $this->text = 'رقم الملف';
        $this->Affichage();
    }
    
    public function render()
    {
        $this->Affichage();

        return view('livewire.affichage-implementation')->with([
            'implementations'=>$this->implementation
        ]);;
    }
}
