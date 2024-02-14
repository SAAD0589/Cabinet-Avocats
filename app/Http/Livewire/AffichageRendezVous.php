<?php

namespace App\Http\Livewire;
use App\Models\RendezVous;

use Livewire\Component;
use Livewire\WithPagination;

class AffichageRendezVous extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';

    public $TypeRendezVous;
    public $Nameclient ;
    public $AutrePersonne;
    public $status;
    public $nameProfesseur;
    public $DateHeure;
    public $commentaires;
    public function searchName()
    {
        $this->resetPage();
    }
    public function render()
    {
        $query = RendezVous::select(
            'rendez_vouses.id as Id_rendezVous',
            'TypeRendezVous',
            'users.name as Client',
            'AutrePersonne',
            'rendez_vouses.status',
            'avocats.name as professeur',
            'DateHeure',
            'commentaires',
        )

        ->leftJoin('users', 'users.id','=', 'rendez_vouses.id_clt')
        ->leftJoin('avocats', 'avocats.id','=', 'rendez_vouses.id_avocat')
        ->where('rendez_vouses.isDeleted',0)

        ->when($this->TypeRendezVous, function ($query) {
                $query->where('TypeRendezVous', 'like', '%' . $this->TypeRendezVous . '%');
        })
        ->when($this->Nameclient, function ($query) {
            $query->where('users.name', 'like', '%' . $this->Nameclient . '%');
        })
        ->when($this->AutrePersonne, function ($query) {
            $query->where('AutrePersonne', 'like', '%' . $this->AutrePersonne . '%');
        })
        ->when($this->status, function ($query) {
            $query->where('status', 'like', '%' . $this->status . '%');
        })
        ->when($this->nameProfesseur, function ($query) {
            $query->where('avocats.name', 'like', '%' . $this->nameProfesseur . '%');
        })
        ->when($this->DateHeure, function ($query) {
            $query->where('DateHeure', 'like', '%' . $this->DateHeure . '%');
        })
        ->when($this->commentaires, function ($query) {
            $query->where('commentaires', 'like', '%' . $this->commentaires . '%');
        })

        ->paginate(10);
        return view('livewire.affichage-rendez-vous', ['data' => $query]);
    }
}
