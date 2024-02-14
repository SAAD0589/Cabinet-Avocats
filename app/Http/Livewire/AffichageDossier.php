<?php

namespace App\Http\Livewire;

use App\Models\User;
use App\Models\Dossier;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class AffichageDossier extends Component
{   public $users;
    public $bgcolor1='#C09F5E';
    public $bgcolor2='#fff';
    public $border='50px';
    public $text='البحث حسب';
    public $name;
    public $searchClient;

    public $checkValue=null;
    public $results;

    protected $activeButton=0;
    public $search;
    public function Change1()
    {
        $this->bgcolor1='#C09F5E';   
        $this->bgcolor2='#fff';
        $this->activeButton = 1;
        $this->Filtrage();
        // $this->users = User::select('users.type_clt', 'users.id', 'users.name', DB::raw('COUNT(dossiers.id) as dossier_count'))
        // ->join('dossiers', 'dossiers.id_clt', '=', 'users.id')
        // ->where('dossiers.isDeleted', 0)
        // ->where('users.role', 0)
        // ->where('users.type_clt', 'clt2')
        // ->groupBy('users.id', 'users.name', 'users.type_clt')
        // ->get();
        // dd( $this->users );
            }
    
    public function Change2()
    {
        $this->bgcolor2='#C09F5E'; 
        $this->bgcolor1='#fff'; 
        $this->activeButton = 2;
        $this->Filtrage();
        // $this->users = User::select('users.type_clt', 'users.id', 'users.name', DB::raw('COUNT(dossiers.id) as dossier_count'))
        // ->join('dossiers', 'dossiers.id_clt', '=', 'users.id')
        // ->where('dossiers.isDeleted', 0)
        // ->where('users.role', 0)
        // ->where('users.type_clt', 'clt1')
        // ->groupBy('users.id', 'users.name', 'users.type_clt')
        // ->get();   
     }

    
    

    public function Filtrage() {
       
    
        $checkUsers=User::select(
            'users.id',
            'users.name',
            DB::raw('COUNT(dossiers.id) as dossier_count')
        )
        ->leftJoin('dossiers', 'dossiers.id_clt','=', 'users.id')
        ->where('dossiers.isDeleted',0 )
        ->where('users.role',0 ) 
        ->where('dossiers.isArchive',0);
        if ($this->activeButton === 1) {
            $checkUsers->where('users.type_clt', 'clt2');
        } 
        if ($this->activeButton === 2) {
            $checkUsers->where('users.type_clt', 'clt1');
        }
        $checkUsers->groupBy('users.id','users.name');
        $this->users=$checkUsers->get();

        $query = User::select(
            'dossiers.reference',
            'avocats.name as avocats_name',
            // 'enemies.name as enemy_name', 
            'TypeDossier.name as TypeDossier', 
            'tribunals_dossiers.juge as Juge',
            'tribunals_dossiers.reference_trib as RefTrib',
            'Ttribunals.trib_nom as Ttribunals',
            'TribunalTypes.type_nom as TribunalTypes',
            'users.type_clt', 'users.id', 'users.name', DB::raw('COUNT(dossiers.id) as dossier_count'),
            DB::raw('COUNT(seances.dossier_tr_id) as seances_count'),
            'procedures.procedure_name as procedureName')

            ->leftJoin('dossiers', 'dossiers.id_clt', '=', 'users.id')
            ->leftJoin('avocats', 'dossiers.id_avocat', '=', 'avocats.id')

            ->join('tribunals_dossiers', 'dossiers.id', '=', 'tribunals_dossiers.dossier_id')

            ->leftJoin('tribunals as Ttribunals', 'tribunals_dossiers.tribunal_id', '=', 'Ttribunals.id')
            ->leftJoin('type_dossiers as TypeDossier', 'tribunals_dossiers.type_dossier', '=', 'TypeDossier.id')

            ->leftJoin('tribunal_types as TribunalTypes', 'tribunals_dossiers.type_tribunal', '=', 'TribunalTypes.id')
    
            // ->join('users as enemies', 'dossiers.id_clt_enmy', '=', 'enemies.id')
            ->leftJoin('seances','seances.dossier_tr_id', '=', 'tribunals_dossiers.id')
            ->leftJoin('procedures','procedures.dossier_tr_id', '=', 'tribunals_dossiers.id')


            ->where('dossiers.isDeleted', 0)
            ->where('users.role', 0)
            ->where('dossiers.isArchive', 0)

            ->when($this->searchClient, function ($query) {
                    $query->where('users.name', 'like', '%' . $this->searchClient . '%');
            })
            ->when($this->text === 'اسم الموكل', function ($query) {
                    $query->where('users.name', 'like', '%' . $this->search . '%');

            })
            ->when($this->text === 'المرجع', function ($query) {
                    $query->where('dossiers.reference', 'like', '%' . $this->search . '%');

            })
            ->when($this->text === 'رقم الملف', function ($query) {
                    $query->where('tribunals_dossiers.reference_trib', 'like', '%' . $this->search . '%');
            });
            // ->when($this->search, function ($query) {
            //     if ($this->text === 'الخصم') {
            //         $query->where('enemies.name', 'like', '%' . $this->search . '%');
            //     }
            // });
            if ($this->activeButton === 1) {
                $query->where('users.type_clt', 'clt2');
            }
                
            if ($this->activeButton === 2) {
                $query->where('users.type_clt', 'clt1');
            }
            $this->results = $query->groupBy(
                'Ttribunals',
                'TribunalTypes', 
                'RefTrib',
                'Juge',
                'TypeDossier',
                // 'enemy_name', 
                //'dossiers.id_clt_enmy',
                'dossiers.reference',
                'users.id', 
                'users.name', 
                'users.type_clt',
                'avocats.name',
                'procedureName')
            ->get();
    }
    public function FilterName(){
        $this->text = 'اسم الموكل';
        $this->Filtrage();
    }
    public function FilterReference(){
        $this->text = 'المرجع';
        $this->Filtrage();
    }
    public function FilterNum(){
        $this->text = 'رقم الملف';
        $this->Filtrage();
    }
    public function FilterEnmy(){
        $this->text = 'الخصم';
        $this->Filtrage();
    }
    public function render()
    {   
        $this->Filtrage();
        return view('livewire.affichage-dossier')->with([
            'users'=>$this->users,
            'results'=>$this->results
        ]);
    }
}
