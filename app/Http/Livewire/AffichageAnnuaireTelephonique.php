<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Livewire\WithPagination;
use App\Models\AnnuaireTelephonique;
class AffichageAnnuaireTelephonique extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $bgcolor1='#C09F5E';
    public $bgcolor2='#fff';
    public $border='50px';
    public $QualiteService;
    public $Nomcomplet ;
    public $telephonePortable;
    public $NumeroTelephoneFixe;
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
        $query=AnnuaireTelephonique::where(function ($query) {
            $query->where('isDeleted', 0)
            ->when($this->QualiteService, function ($query) {
                    $query->where('QualiteService', 'like', '%' . $this->QualiteService . '%');
            })

            ->when($this->Nomcomplet, function ($query) {
            $query->where('Nomcomplet', 'like', '%' . $this->Nomcomplet . '%');
            })

            ->when($this->telephonePortable, function ($query) {
            $query->where('telephonePortable', 'like', '%' . $this->telephonePortable . '%');
            })

            ->when($this->NumeroTelephoneFixe, function ($query) {
                $query->where('NumeroTelephoneFixe', 'like', '%' . $this->NumeroTelephoneFixe . '%');
                });
            
            if ($this->activeButton === 1) {
                $query->where('TypeUtilisateur', 1);
            }
        
            if ($this->activeButton === 2) {
                $query->where('TypeUtilisateur',2);
            }
        })
            ->paginate(10);
        return view('livewire.affichage-annuaire-telephonique',['data' => $query]);
    }
}
