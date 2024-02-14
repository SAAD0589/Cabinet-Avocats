<?php

namespace App\Http\Controllers;

use App\Exports\DossiersExport;
use App\Exports\AllDocExport;
use Maatwebsite\Excel\Facades\Excel;

use App\Models\User;
use App\Models\Ville;
use App\Models\Avocat;
use App\Models\Dossier;
use App\Models\TypeDossier;
use Illuminate\Http\Request;
use App\Models\Tribunals_dossiers;
use App\Models\Tribunal;
use Illuminate\Support\Facades\DB;

class DossiersController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    
    public function index()
    {
        return view('Admins.Dossiers.index');
    }
    public function Affichage(){
        return view('Admins.Dossiers.ReclamationsDiverses.index');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $avocats=Avocat::where('isDeleted',0)->get();
       
        $users=User::where('type_clt', 'clt2')
        ->where('isDeleted',0)
        ->get();
        return view('Admins.Dossiers.ReclamationsDiverses.Add.Form1',compact('users','avocats'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'id_clt'=>'required',
            'couleur'=>'required',
            'type_clt'=>'required',
            'id_avocat'=>'required',
            'date_ref'=>'required',
            'Adversaire'=>'required',
            'avocat_Adversaire'=>'required',
            'Adresse_Adversaire'=>'required'
        ]);

        $validatedData['type_clt'] = $request->type_clt;

        $dossier = Dossier::create($validatedData);
        $dossier->reference = $dossier->id; // Set the reference field to the ID
        $dossier->save(); 

        
        // $usercheck=User::find($dossier->id_clt);
        // dd($user->id);
     

 
    return redirect()->route('dossier.show',compact('dossier'));  
}

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $usersClt1=User::where('type_clt','=', 'clt1')
        ->get();

        $usersClt2=User::where('type_clt','=', 'clt2')
        ->get();
        
        $avocats=Avocat::all();
        $villes=Ville::all();
        $dossier=Dossier::find($id);
        // dd($dossier);
        $usercheck=User::find($dossier->id_clt);
        $avocatcheck=Avocat::find($dossier->id_avocat );
        $typeDossiers=TypeDossier::all()->take(4);
        return view('Admins.Dossiers.ReclamationsDiverses.Updates.Form1',with([
            'dossier'       => $dossier,
            'villes'        =>$villes,
            'avocats'       =>$avocats,
            'usersClt1'     =>$usersClt1,
            'usersClt2'     =>$usersClt2,
            'usercheck'     =>$usercheck,
            'avocatcheck'   =>$avocatcheck,
            'typeDossiers'  =>$typeDossiers,
        ])
        );
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Request $request,$id)
    {   
       
        //     $villes=Ville::all();
        // return view('Admins.Dossiers.Add_Update.UpdateForm2',compact('id','villes'));
     
        
    }

    /**
     * Update the specified resource in storage.
     */
    public function UpdateForm1(Request $request,$id){
        request()->validate([
            'type_clt'=>'required',
            'id_clt'=>'required',
            'reference'=>'required',
            "date_ref" => "required",
            'couleur'=>'required',
            'id_avocat'=>'required',
            'Adversaire'=>'required',
            'avocat_Adversaire'=>'required',
            'Adresse_Adversaire'=>'required',
        ]);   
        $dossier = Dossier::find($id);
        // dd($request->id_clt_enmy);
        $dossier->update($request->all());
        return redirect()->route('dossier.show', $dossier->id);

        
    }
  
    public function Createapel(Request $request,$id){
        $validateRequest=request()->validate([
            'reference_trib'=>'required',
            'tribunal_id'=>'required',
            'sale_num'=>'required',
            'juge'=>'required',
            'jugement'=>'required',
            'heure'=>'required',
            'date_dec'=>'required',
            'descsentes'=>'required',
            'criminal'=>'required',
            'txt_dec'=>'required'
        ]);   
        $validateRequest['dossier_id'] = $id;

        $validateRequest['type_tribunal'] = $request->type_tribunal;
        $tribunals_dossiers = Tribunals_dossiers::create($validateRequest);
        // $dossier->update($request->all());
        // dd($request->type_tribunal);
        return redirect()->route('Succes_Dossier', $id);

    }
    public function Succes_Dossier(){
        // dd('Succes_Dossier');
        return view('Admins.clients.successfully')->with([
            'message' => 'تمت إضافة الملف بنجاح',
            'type' => 'ReclamationsDiverses'
        ]); 
    }
    public function Createprimary(Request $request,$id){
        $validateRequest=request()->validate([
            'tribunal_id'=>'required',
            'ville'=>'required',
            'reference_trib'=>'required',
            'type_dossier'=>'required',
            'sale_num'=>'required',
            'juge'=>'required',
            'heure'=>'required',
            'jugement'=>'required',
            'date_jugement'=>'required',
            'prejudice'=>'required',
            'type_tribunal'=>'required',
        ]);   

        $validateRequest['dossier_id'] = $id;
        $validateRequest['type_tribunal'] = $request->type_tribunal;

        $tribunals_dossiers = Tribunals_dossiers::create($validateRequest);
        // dd($tribunals_dossiers);

        // $dossier->update($request->all());
        return redirect()->route('Succes_Dossier', $id);

    }
    public function Createcas(Request $request,$id){
       $validateRequest= request()->validate([
            'jugement'=>'required',
            'reference_trib'=>'required',
            'juge'=>'required',
            'date_dec'=>'required',
        ]);   
        $validateRequest['dossier_id'] = $id;
        $validateRequest['type_tribunal'] = $request->type_tribunal;
        $tribunals_dossiers = Tribunals_dossiers::create($validateRequest);
        // $dossier->update($request->all());
        // dd($tribunals_dossiers);
        return redirect()->route('Succes_Dossier', $id);

    }
    public function Updateobservation(){
        request()->validate([
            'observation'=>'required',
        ]);   
        $dossier = Dossier::find($id);
        $dossier->update($request->all());
        return redirect()->route('Succes_Dossier', $id);

    }

    public function DossiersProcedure(){
        $dossiers=Dossier::all();
        return view('Admins.Dossiers.ReclamationsDiverses.DossiersProcedure.index');
    }

    public function UpdateReclamationsDiverses($id){
        $usersClt1=User::where('type_clt','=', 'clt1')
        ->get();

        $usersClt2=User::where('type_clt','=', 'clt2')
        ->get();
        
        $avocats=Avocat::all();
        $villes=Ville::all();
        $dossier=Dossier::find($id);
        $tribunals_dossiers=Tribunals_dossiers::where('dossier_id',$dossier->id)->first();
        $tribunal=Tribunal::find($tribunals_dossiers->tribunal_id);
        // dd($dossier);
        $usercheck=User::find($dossier->id_clt);
        $avocatcheck=Avocat::find($dossier->id_avocat );
        $typeDossiers=TypeDossier::all()->take(4);
        $tribunalsApels=Tribunal::where('id_type',2)->get();

        return view('Admins.Dossiers.ReclamationsDiverses.Plus.Updates.Form1',with([
            'dossier'           => $dossier,
            'villes'            =>$villes,
            'avocats'           =>$avocats,
            'usersClt1'         =>$usersClt1,
            'usersClt2'         =>$usersClt2,
            'usercheck'         =>$usercheck,
            'avocatcheck'       =>$avocatcheck,
            'typeDossiers'      =>$typeDossiers,
            'tribunals_dossiers'=>$tribunals_dossiers,
            'tribunal'          =>$tribunal,
            'tribunalsApels'     =>$tribunalsApels
        ])
        );
    }

    public function UpdateReclamationsDiversesForm1(Request $request,$id){
        request()->validate([
            'type_clt'=>'required',
            'id_clt'=>'required',
            'reference'=>'required',
            "date_ref" => "required",
            'couleur'=>'required',
            'id_avocat'=>'required',
            'Adversaire'=>'required',
            'avocat_Adversaire'=>'required',
            'Adresse_Adversaire'=>'required',
        ]);   
        $dossier = Dossier::find($id);
        // dd($request->id_clt_enmy);
        $dossier->update($request->all());
        return redirect()->route('UpdateReclamationsDiverses', $dossier->id);
    }


    public function UpdateReclamationsDiversesPrimary(Request $request,$id){
        // dd($id);
        request()->validate([
            'ville'=>'required',
            'tribunal_id'=>'required',
            'type_dossier'=>'required',
            "reference_trib" => "required",
            'juge'=>'required',
            'sale_num'=>'required',
            'heure'=>'required',
            'date_jugement'=>'required',
            // 'jugement'=>'required',
            // 'prejudice'=>'required',
            // 'descsentes'=>'required'
        ]);   
        $tribunals_dossiers = Tribunals_dossiers::find($id);
        $dossier=Dossier::find($tribunals_dossiers->id);
        $user=User::find($dossier->id_clt);
        // dd($dossier);
        // dd($request->id_clt_enmy);
        $tribunals_dossiers->update($request->all());
        return redirect()->route('plus', $user->id);
    }
    public function UpdateReclamationsDiversesApel(Request $request,$id){
        // dd($request->tribunal_id);
        request()->validate([
            'tribunal_id'=>'required',
            'reference_trib'=>'required',
            'juge'=>'required',
            "sale_num" => "required",
            'heure'=>'required',
            'jugement'=>'required',
            'descsentes'=>'required',
            'date_dec'=>'required',
            'txt_dec'=>'required',
            'criminal'=>'required',
        ]);   
        $tribunals_dossiers = Tribunals_dossiers::find($id);
        $dossier=Dossier::find($tribunals_dossiers->id);
        $user=User::find($dossier->id_clt);
        // dd($dossier);
        // dd($request->id_clt_enmy);
        $tribunals_dossiers->update($request->all());
        return redirect()->route('plus', $user->id);
    }
    
    public function UpdateReclamationsDiversesCas(Request $request,$id){
        request()->validate([
            'reference_trib'=>'required',
            'jugement'=>'required',
            'date_dec'=>'required',
            'juge'=>'required'

        ]);   
        $tribunals_dossiers = Tribunals_dossiers::find($id);
        $dossier=Dossier::find($tribunals_dossiers->id);
        $user=User::find($dossier->id_clt);
        // dd($dossier);
        // dd($request->id_clt_enmy);
        $tribunals_dossiers->update($request->all());
        return redirect()->route('plus', $user->id);
    }

    public function UpdateReclamationsDiversesObservation(Request $request,$id){
        request()->validate([
            'observation'=>'required',

        ]);   
        // $tribunals_dossiers = Tribunals_dossiers::find($id);
        $dossier=Dossier::find($id);
        $user=User::find($dossier->id_clt);
        // dd($dossier);
        // dd($request->id_clt_enmy);
        $dossier->update($request->all());
        return redirect()->route('plus', $user->id);
    }





    public function update(Request $request,$id)
    {
        if ($request->selectedForm==1) {
        request()->validate([
                'e1_trib'=>'required',
                'e1_ville'=>'required',
                'e1_reference_trib'=>'required',
                'e1_type_dossier'=>'required',
                'e1_sale_nim'=>'required',
                'juge'=>'required',
                'e1_heure'=>'required',
                'e1_jugement_num'=>'required',
                'e1_date_jugement'=>'required',
                'e1_prejudice'=>'required',
                'e1_jugement'=>'required',
                'e1_decision'=>'required'
            ]);   
            $dossier = Dossier::find($id);
            $dossier->update($validateRequest);
        }
        elseif($request->selectedForm==2){
            request()->validate([
                'e2_refereence_cour'=>'required',
                'e2_cours_apel'=>'required',
                'e2_salle'=>'required',
                'e2_migistrat'=>'required',
                'e2_dec'=>'required',
                'e2_heure'=>'required',
                'e2_date_dec'=>'required',
                'e2_sent_num'=>'required',
                'criminal'=>'required',
                'e2_txt_dec'=>'required',
            ]);   
          

        }elseif($request->selectedForm==3){
           $validateRequest= request()->validate([
                'e3_sent_num'=>'required',
                'e3_reference'=>'required',
                'e3_migistrat'=>'required',
                'e3_date_sent'=>'required',
            ]);   
            $data = $request->all();
            $data['e3_cour_cas'] = 3;
            $dossier = Dossier::find($id);
            $dossier->update($data);

        }elseif($request->selectedForm==4){
        request()->validate([
                'observation'=>'required|string|min:3',
            ]);   
           
        }elseif($request->selectedForm==0){
            $dossier = Dossier::find($id);
            $dossier->type_clt=$request->type_clt;
            $dossier->reference=$request->reference;
            $dossier->couleur=$request->couleur;
            $dossier->id_clt_enmy=$request->id_clt_enmy;
            $dossier->id_avocat=$request->avocat_enmy;
            $dossier->adr_clt_enmy=$request->adr_clt_enmy;
            $dossier->avocat_enmy=$request->avocat_enmy;
            // dd($dossier);
            // request()->validate([
            //     'type_clt'=>'required',
            //     'reference'=>'required',
            //     'id_clt'=>'required',
            //     'couleur'=>'required',
            //     // 'date_ref'=>'required',
            //     'id_clt_enmy'=>'required',
            //     'id_avocat'=>'required',
            //     'adr_clt_enmy'=>'required',
            //     'avocat_enmy'=>'required',
            // ]);   
        }
        $dossier = Dossier::find($id);
        $dossier->update($request->all());
        // dd($request->all());
        return view('Admins.Dossiers.Affichage');
            }

    /**
     * Remove the specified resource from storage.
     */
    public function PlusDoc($id){
        // dd($id);
        return view('Admins.Dossiers.ReclamationsDiverses.Plus.index',compact('id'));
    }
    public function exportDossier($id)
    {
        return Excel::download(new DossiersExport($id), 'Dossiers.xlsx');
    }

    public function exportAllDoc()
    {
        return Excel::download(new AllDocExport, 'AllDoc.xlsx');
    }

    public function deleteDoc(Request $request)
    {
        // dd($request->inputDelete);
        $dossier = Dossier::find($request->inputDelete);
        $dossier->isDeleted = 1;
        $dossier->save();
        // dd($dossier);
        // $dossier->delete();
        return back()->withInput();
    }
}
