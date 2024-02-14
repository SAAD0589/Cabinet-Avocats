<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Report;
use App\Models\Dossier;
use App\Models\Ville;
use App\Models\Implementation;
use App\Models\Tribunal;
use Maatwebsite\Excel\Facades\Excel;
use App\Exports\RepImpExport;
use Livewire\WithPagination;
use Maatwebsite\Excel\Concerns\FromCollection;

class FormTribunalDoc extends Component
{
  use WithPagination;
  protected $paginationTheme = 'bootstrap';


    public $activeButton=2;
    public $bgcolor1='#C09F5E';
    public $bgcolor2='#fff';
    protected $results = null;
    public $check=1;
    public $bg1='#fff';
    public $bg2='#C09F5E';
    public $bg3='#fff';

    public $color1='black';
    public $color2='#fff';
    public $color3='#black';
    public $typeNom='محكمة الإستئناف';
    public $villesId;
    public $tribunalCheck=null;
    protected $tribunals;


    public function Change1()
    {
        $this->bgcolor1='#C09F5E';   
        $this->bgcolor2='#fff';
        $this->activeButton = 1;

        $query=Dossier::select(
            'User_clt.name as Clt',
            'Adversaire as Enmy',
            'dossiers.reference',
            'tribunal_types.type_nom',
            'reports.status',
            'reports.id as IdItem',
            'reports.date_R',
            'reports.Num_Doc_R',
            'reports.judicial_commisioner',
            'reports.trib_reference',
            'reports.procedure',
            'villes.ville_nom as VillesName',
            'Ttribunals.trib_nom as Tribunal'
        )
        ->leftJoin('users as User_clt', 'User_clt.id','=', 'dossiers.id_clt')
        ->leftJoin('tribunals_dossiers', 'dossiers.id','=', 'tribunals_dossiers.dossier_id')
        ->leftJoin('tribunal_types', 'tribunal_types.id','=', 'tribunals_dossiers.type_tribunal')
        ->leftJoin('reports', 'reports.dossier_id','=', 'tribunals_dossiers.id')
        ->leftJoin('villes','villes.id', '=', 'tribunals_dossiers.ville')
        ->leftJoin('tribunals as Ttribunals', 'tribunals_dossiers.tribunal_id', '=', 'Ttribunals.id')
        ->where('reports.isDeleted',0 )
        ->when($this->typeNom, function ($query) {
            $query->where(function ($query) {
                $query->where('tribunal_types.type_nom', $this->typeNom);
            });
        })
        ->when($this->tribunalCheck, function ($query) {
            $query->where(function ($query) {
                $query->where('Ttribunals.trib_nom', 'like', '%' . $this->tribunalCheck . '%')
                ->where('tribunal_types.type_nom', $this->typeNom);
            });
        })
        ->when($this->villesId, function ($query) {
            // dd($this->villesId);
            $query->where(function ($query) {
                $query->where('villes.id',$this->villesId)
                ->where('tribunal_types.type_nom', $this->typeNom);
        });
        });
        $this->results=$query->get();
        $this->check=1;
            }
    
    public function Change2()
    {
        $this->bgcolor2='#C09F5E'; 
        $this->bgcolor1='#fff'; 
        $this->check=2;

        $this->activeButton = 2;
        $query=Dossier::select(
            'User_clt.name as Clt',
            'Adversaire as Enmy',
            'dossiers.reference',
            'tribunal_types.type_nom',
            'implementations.status',
            'implementations.id as IdItem',
            'implementations.date_R',
            'implementations.folder_implentaire_num',
            'implementations.implementation_num',
            'implementations.trib_reference',
            'implementations.procedure',
            'villes.ville_nom as VillesName',
            'Ttribunals.trib_nom as Tribunal'

        )
        ->leftJoin('users as User_clt', 'User_clt.id','=', 'dossiers.id_clt')

        ->leftJoin('tribunals_dossiers', 'dossiers.id','=', 'tribunals_dossiers.dossier_id')
        ->leftJoin('tribunal_types', 'tribunal_types.id','=', 'tribunals_dossiers.type_tribunal')
        ->leftJoin('implementations', 'implementations.dossier_id','=', 'tribunals_dossiers.id')
        ->leftJoin('villes','villes.id', '=', 'tribunals_dossiers.ville')
        ->leftJoin('tribunals as Ttribunals', 'tribunals_dossiers.tribunal_id', '=', 'Ttribunals.id')

        ->when($this->typeNom, function ($query) {
            $query->where(function ($query) {
                $query->where('tribunal_types.type_nom', $this->typeNom);
            });
        })
        ->when($this->villesId, function ($query) {
            // dd($this->villesId);
            $query->where(function ($query) {
                $query->where('villes.id',$this->villesId)
                ->where('tribunal_types.type_nom', $this->typeNom);
        });
        })
        ->when($this->tribunalCheck, function ($query) {
            $query->where(function ($query) {
                $query->where('Ttribunals.trib_nom', 'like', '%' . $this->tribunalCheck . '%')
                ->where('tribunal_types.type_nom', $this->typeNom);
            });
        })
        ->where('implementations.isDeleted',0 );
        $this->results=$query->get();

     }  


     public function TribunalTypePremary(){
        $this->typeNom='المحكمة الإبتدائية';
        if($this->check==1){
            $this->Change1();

        }else{
            $this->Change2();

        }
         $this->bg1='#C09F5E';
        $this->bg2='#fff';
        $this->bg3='#fff';
        
       $this->color1='#fff';
       $this->color2='black';
       $this->color3='black';

 
     }
     public function TribunalTypeApel(){
        $this->typeNom='محكمة الإستئناف';
        if($this->check==1){
            $this->Change1();

        }else{
            $this->Change2();

        }        $this->bg1='#fff';
        $this->bg2='#C09F5E';
        $this->bg3='#fff';

       $this->color1='black';
       $this->color2='#fff';
       $this->color3='black';
 
     }
    public function TribunalTypeCas(){
        $this->typeNom='محكمة النقض';
        if($this->check==1){
            $this->Change1();

        }else{
            $this->Change2();

        }
         $this->bg1='#fff';
        $this->bg2='#fff';
        $this->bg3='#C09F5E';
        
       $this->color1='black';
       $this->color2='black';
       $this->color3='#fff';

    }
    public function SelectRegion(){
        if($this->check==1){
            $this->Change1();

        }else{
            $this->Change2();

        }    
 
    }
    public function SelectTribunal(){
        if($this->check==1){
            $this->Change1();

        }else{
            $this->Change2();

        }   
 
    }
     public function mount(){
        $this->Change1();
     }  
     public function exportToExcel()
     {
        if ($this->check == 1) {
            $this->Change1();
        } else {
            $this->Change2();
        }
     // Check the contents of $this->results

         return Excel::download(new RepImpExport($this->results), 'RemImp.xlsx');
         dd($this->results);
         $this->resetPage();
     }
    public function render()
    {
        
        $villes=Ville::all();
        $this->tribunals=Tribunal::all();

        return view('livewire.form-tribunal-doc')->with([
            'items'=>$this->results,
            'villes'=>$villes,
            'tribunals'=>$this->tribunals,

        ]);
    }
}
