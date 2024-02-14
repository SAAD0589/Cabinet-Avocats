<?php

namespace App\Http\Livewire;
use App\Models\Dossier;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Livewire\WithPagination;
class AfficherArchive extends Component
{public $trib_nom;
    public $ref_Trib;
    public $Clt;
    public $Enmy;
    public $reference;
    public $seances_count;
    use WithPagination;

    protected $paginationTheme = 'bootstrap';
    public function searchName()
    {
        $this->resetPage();
    }

    public function render()
    {
        $archives =Dossier::select(
            'dossiers.id as IdDoc',
            'User_Clt.name as Clt',
            'Adversaire as Enmy',
            'tribunals_dossiers.reference_trib as ref_Trib',
            'tribunals.trib_nom as trib_nom',
            'dossiers.reference as reference',
             DB::raw('COUNT(seances.id) as seances_count'))

        ->leftJoin('tribunals_dossiers', 'tribunals_dossiers.dossier_id', '=', 'dossiers.id')
         ->leftJoin('seances', 'seances.dossier_tr_id', '=', 'tribunals_dossiers.id')
         ->leftJoin('users as User_Clt', 'User_Clt.id', '=', 'dossiers.id_clt')
         ->leftJoin('tribunals', 'tribunals.id', '=', 'tribunals_dossiers.tribunal_id')
        
         ->where('dossiers.isArchive', 1)
         ->where('dossiers.isDeleted', 0)

         ->when($this->trib_nom, function ($query) {
            $query->where(function ($query) {
                $query->where('trib_nom', 'like', '%' . $this->trib_nom . '%');
            });
        })
        ->when($this->ref_Trib, function ($query) {
            $query->where('ref_Trib', 'like', '%' . $this->ref_Trib . '%');
        })
        ->when($this->Clt, function ($query) {
            $query->where('Clt', 'like', '%' . $this->Clt . '%');
        })
        ->when($this->Enmy, function ($query) {
            $query->where('Enmy', 'like', '%' . $this->Enmy . '%');
        })
        ->when($this->reference, function ($query) {
            $query->where('reference', 'like', '%' . $this->reference . '%');
        })
        ->when($this->seances_count, function ($query) {
            $query->havingRaw('COUNT(seances.id) = ?', [$this->seances_count]);
        })        
    ->groupBy(
        'IdDoc',
        'Clt',
        'Enmy',
        'seances.dossier_tr_id',
        'ref_Trib',
        'trib_nom',
        'reference',
        )

        ->get();
        return view('livewire.afficher-archive')->with([
            'archives'=>$archives,
        ]);
    }
}
