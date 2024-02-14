<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Dossier;
use Illuminate\Support\Facades\DB;

class PlusDocc extends Component
{ 
    protected $dossiers;
    public $text='البحث حسب';
    public $search;
    public $idDoc;
  
  
    public function redirectToShow()
    {
       
        // $route = route('show', ['id' => $dossierId]);
        // return Redirect::to($route);
    }

    public function FetchData(){

        // dd($this->idDoc);
        // $this->idDoc=$idDoc;
        $query =Dossier::select(
            'users.id',
            'users.name as User',
            'Adversaire',
            'dossiers.reference',
            'tribunals_dossiers.juge as Juge',
            'tribunals_dossiers.reference_trib as RefTrib',
            'tribunals_dossiers.id as IDTrb',
            'Ttribunals.trib_nom as Tribunal',
            'TypeDossier.name as TypeDossier',
            'avocats.name as AvocatName',
            'TribunalTypes.type_nom as TribunalType',
            'dossiers.id as IdDoc',

            DB::raw('COUNT(seances.dossier_tr_id) as seances_count'),
              'procedures.procedure_name as procedureName'

             )
        
             ->leftJoin('users', 'dossiers.id_clt', '=', 'users.id')
             ->join('tribunals_dossiers', 'tribunals_dossiers.dossier_id', '=', 'dossiers.id')
             ->leftJoin('avocats', 'dossiers.id_avocat', '=', 'avocats.id')
             ->leftJoin('tribunals as Ttribunals', 'tribunals_dossiers.tribunal_id', '=', 'Ttribunals.id')
             ->leftJoin('tribunal_types as TribunalTypes', 'tribunals_dossiers.type_tribunal', '=','TribunalTypes.id')
            //  ->leftJoin('users as enemies', 'dossiers.id_clt_enmy', '=', 'enemies.id')
             ->leftJoin('type_dossiers as TypeDossier','TypeDossier.id', '=', 'tribunals_dossiers.type_dossier')

             ->leftJoin('seances','seances.dossier_tr_id', '=', 'tribunals_dossiers.id')
             ->leftJoin('procedures','procedures.dossier_tr_id', '=', 'tribunals_dossiers.id')

        ->where('dossiers.isArchive', 0)
        ->where('dossiers.isDeleted', 0)
        ->where('dossiers.id_clt', $this->idDoc)
        ->when($this->search, function ($query) {
            if ($this->text === 'اسم الموكل') {
                $query->where('users.name', 'like', '%' . $this->search . '%');

            }
        })
        ->when($this->search, function ($query) {
            if ($this->text === 'المرجع') {
                $query->where('dossiers.reference', 'like', '%' . $this->search . '%');

            }
        })
        ->when($this->search, function ($query) {
            if ($this->text === 'رقم الملف') {
                $query->where('tribunals_dossiers.reference_trib', 'like', '%' . $this->search . '%');

            }
        })
        ->when($this->search, function ($query) {
            if ($this->text === 'الخصم') {
                $query->where('Adversaire', 'like', '%' . $this->search . '%');

            }
        });

   
        $this->dossiers=$query->groupBy(
            'User',
            'users.id',
            'Adversaire',
            'dossiers.reference',
            'Juge',
            'RefTrib',
            'Tribunal',
            'TypeDossier',
            'AvocatName',
            'TribunalType',
            'IDTrb',
            'IdDoc',
            'procedureName')

        ->get();
        
    }
    // public function Filtrage(){
    //     // $this->idDoc=$idDoc;
    //     $query =Dossier::select(
    //         'users.id',
    //         'users.name as User',
    //         'enemies.name as Enemies',
    //         'dossiers.reference',
    //         'tribunals_dossiers.juge as Juge',
    //          'tribunals_dossiers.reference_trib as RefTrib',
    //          'tribunals_dossiers.id as IDTrb',
    //          'Ttribunals.trib_nom as Tribunal',
    //          'TypeDossier.name as TypeDossier',
    //          'avocats.name as Avocat',
    //          'TribunalTypes.type_nom as TribunalType',
    //          'dossiers.id as IdDoc'
    //          )
        
    //          ->leftJoin('users', 'dossiers.id_clt', '=', 'users.id')
    //          ->join('tribunals_dossiers', 'tribunals_dossiers.dossier_id', '=', 'dossiers.id')
    //          ->leftJoin('avocats', 'dossiers.id_avocat', '=', 'avocats.id')
    //          ->leftJoin('tribunals as Ttribunals', 'tribunals_dossiers.tribunal_id', '=', 'Ttribunals.id')
    //          ->leftJoin('tribunal_types as TribunalTypes', 'tribunals_dossiers.type_tribunal', '=', 'TribunalTypes.id')
    //          ->leftJoin('users as enemies', 'dossiers.id_clt_enmy', '=', 'enemies.id')
    //          ->leftJoin('type_dossiers as TypeDossier','TypeDossier.id', '=', 'tribunals_dossiers.dossier_id')

    //     ->where('dossiers.isArchive', 0)
    //     ->where('dossiers.isDeleted', 0)
    //     ->where('dossiers.id_clt', $this->idDoc)
        

    //     // if ($this->text === 'اسم الموكل') {
    //     //     $query->where('users.name', 'LIKE', '%' . $this->search . '%');
    //     //     // dd($this->search);
    //     // } elseif ($this->text === 'المرجع') {
    //     //     $query->where('dossiers.reference', $this->search);
    //     //         // ->orWhere('dossiers.e1_reference_trib', $this->search);
    //     // }elseif ($this->text === 'رقم الملف') {
    //     //     $query->where('dossiers.e1_reference_trib', $this->search);
    //     //         // ->orWhere('dossiers.e1_reference_trib', $this->search);
    //     // }elseif ($this->text === 'الخصم') {
    //     //     // $query->where('dossiers.enemy_name', $this->search);
    //     //     $query->where('enemies.name', 'LIKE', '%' . $this->search . '%');

    //     // }
    //     ->when($this->search, function ($query) {
    //        dd($this->search);
    //     });
 

   
    //     $this->dossiers=$query->groupBy(
    //         'User',
    //         'users.id',
    //         'Enemies',
    //         'dossiers.reference',
    //         'Juge',
    //         'RefTrib',
    //         'Tribunal',
    //         'TypeDossier',
    //         'Avocat',
    //         'TribunalType',
    //         'IDTrb',
    //         'IdDoc')

    //     ->get();
    //     // dd( $this->dossiers);
    // }   
    public function FilterName(){
        $this->text = 'اسم الموكل';
        $this->FetchData();
    }
    public function FilterReference(){
        $this->text = 'المرجع';
        $this->FetchData();
    }
    public function FilterNum(){
        $this->text = 'رقم الملف';
        $this->FetchData();
    }
    public function FilterEnmy(){
        $this->text = 'الخصم';
        $this->FetchData();
    }
    public function render()
    {
        $this->FetchData($this->idDoc);
        return view('livewire.plus-docc')->with([
            'dossiers'=>$this->dossiers
        ]);
    }
}
