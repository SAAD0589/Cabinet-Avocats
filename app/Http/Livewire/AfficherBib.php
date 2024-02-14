<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Bibliotheque;
use Livewire\WithPagination;
class AfficherBib extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public $parties;
    public $Date_Seance;
    public $Avocat;
    public $date_insert_dossier;
    public $date_back_dossier;
    public function searchName()
    {
        $this->resetPage();
    }

    public function render()
    {
        
       $query=Bibliotheque::where('isDeleted','=','0')
        ->when($this->parties, function ($query) {
        $query->where('parties', 'like', '%' . $this->parties . '%');
    })
    ->when($this->Date_Seance, function ($query) {
        $query->where('Date_Seance', 'like', '%' . $this->Date_Seance . '%');
    })
    ->when($this->Avocat, function ($query) {
        $query->where('Avocat', 'like', '%' . $this->Avocat . '%');
    })
    ->when($this->date_insert_dossier, function ($query) {
        $query->where('date_insert_dossier', 'like', '%' . $this->date_insert_dossier . '%');
    })
    ->when($this->date_back_dossier, function ($query) {
        $query->where('date_back_dossier', 'like', '%' . $this->date_back_dossier . '%');
    })
    ->paginate(10);
        return view('livewire.afficher-bib')->with([
            'bibliotheques'=>$query
        ]);;
    }
}
