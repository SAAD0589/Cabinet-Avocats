<?php

namespace App\Http\Livewire;

use App\Models\Ville;
use App\Models\Region;
use App\Models\Dossier;
use Livewire\Component;
use App\Models\Tribunal;
use Illuminate\Support\Facades\DB;
class AllDoc extends Component
{
    protected $dossiers;
    public $villesId;
    protected $tribunals;
    public  $regionCheck;
    public $tribunalCheck=null;
    public $TypeDossier;

    public $bg1='#fff';
    public $bg2='#C09F5E';
    public $bg3='#fff';

    public $color1='black';
    public $color2='#fff';
    public $color3='#black';

    public $typeNom='محكمة الإستئناف';
    public function filterDossiers(){
        $query =Dossier::select(
            'users.name as User',
        'Adversaire',
        'dossiers.reference',
        'tribunals_dossiers.juge as Juge',
         'tribunals_dossiers.reference_trib as RefTrib',
         'Ttribunals.trib_nom as Tribunal',
         'TypeDossier.name as TypeDossier',
         'avocats.name as Avocat',
         'TribunalTypes.type_nom as TribunalType',
         'villes.ville_nom as VillesName',
         'procedures.procedure_name as procedureName'

         )
        
        ->leftJoin('users', 'dossiers.id_clt', '=', 'users.id')
        ->leftJoin('tribunals_dossiers', 'tribunals_dossiers.dossier_id', '=', 'dossiers.id')
        ->leftJoin('avocats', 'dossiers.id_avocat', '=', 'avocats.id')
        ->leftJoin('tribunals as Ttribunals', 'tribunals_dossiers.tribunal_id', '=', 'Ttribunals.id')
        ->leftJoin('tribunal_types as TribunalTypes', 'tribunals_dossiers.type_tribunal', '=', 'TribunalTypes.id')
        ->leftJoin('type_dossiers as TypeDossier','TypeDossier.id', '=', 'tribunals_dossiers.type_dossier')

        ->leftJoin('villes','villes.id', '=', 'tribunals_dossiers.ville')
        ->leftJoin('procedures','procedures.dossier_tr_id', '=', 'tribunals_dossiers.id')

        ->where('dossiers.isDeleted', 0)
        // if ($this->tribunalCheck !== null) {
        //     $query->where('Ttribunals.trib_nom',  $this->tribunalCheck )
        //     // ->where('TribunalTypes.type_nom', $typeNom);
           
        // }

        ->when($this->TypeDossier, function ($query) {
            // dd($this->villesId);
            $query->where(function ($query) {
                $query->where('TypeDossier.id',$this->TypeDossier);
            });
        })

        ->when($this->typeNom, function ($query) {
            $query->where(function ($query) {
                $query->where('TribunalTypes.type_nom', $this->typeNom);
            });
        })


        ->when($this->villesId, function ($query) {
            // dd($this->villesId);
            $query->where(function ($query) {
                $query->where('villes.id',$this->villesId)
                ->where('TribunalTypes.type_nom', $this->typeNom);
        });
        })
        
        ->when($this->tribunalCheck, function ($query) {
            $query->where(function ($query) {
                $query->where('Ttribunals.trib_nom', 'like', '%' . $this->tribunalCheck . '%')
                ->where('TribunalTypes.type_nom', $this->typeNom);
            });
        });


        // if ($typeNom !== null) {
        //     $query->where('TribunalTypes.type_nom', $typeNom);
        // }
        // // if ($this->regionCheck !== null) {
        // //     $query->where('regions.nom', 'like', DB::raw("CONCAT('%', '" . $this->regionCheck . "', '%')"));
        // // }
        
        $this->dossiers=$query->groupBy(
        'User',
        'Adversaire',
        'dossiers.reference',
        'Juge',
        'RefTrib',
        'Tribunal',
        'TypeDossier',
        'Avocat',
        'TribunalType',
        'VillesName',
        'procedureName')
        ->get();
    }
    public function mount(){
        
        $this->filterDossiers();
    }
    public function TribunalTypePremary(){
        $this->typeNom='المحكمة الإبتدائية';
        $this->filterDossiers();
        $this->bg1='#C09F5E';
        $this->bg2='#fff';
        $this->bg3='#fff';
        
       $this->color1='#fff';
       $this->color2='black';
       $this->color3='black';

 
     }
     public function TribunalTypeApel(){
        $this->typeNom='محكمة الإستئناف';
        $this->filterDossiers();
        $this->bg1='#fff';
        $this->bg2='#C09F5E';
        $this->bg3='#fff';

       $this->color1='black';
       $this->color2='#fff';
       $this->color3='black';
 
     }
    public function TribunalTypeCas(){
        $this->typeNom='محكمة النقض';
       $this->filterDossiers();
         $this->bg1='#fff';
        $this->bg2='#fff';
        $this->bg3='#C09F5E';
        
       $this->color1='black';
       $this->color2='black';
       $this->color3='#fff';

    }

    public function SelectTypeDossier(){
        // dd($this->villesId);
        $this->filterDossiers();
 
    }
    public function SelectRegion(){
        // dd($this->villesId);
        $this->filterDossiers();
 
    }
    
    public function SelectTribunal(){
        $this->filterDossiers();
    }
    public function render()
    {
        $this->villes=Ville::all();

        $this->tribunals=Tribunal::all();
        return view('livewire.all-doc')->with([
            'dossiers'=>$this->dossiers,
            'villes'=>$this->villes,
            'tribunals'=>$this->tribunals,
        ]);
    }
}
