<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Assurance;
use App\Models\FolderAssurance;
use App\Models\PartieAssurance;
use App\Models\Tribunal;
use App\Models\RoutageDossier;
class AssuranceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admins.Dossiers.Assurances.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $users=User::where('role',0)
        ->where('isDeleted',0)
        ->where('type_clt','!=','clt3')
        ->get();
        return view('Admins.Dossiers.Assurances.Add.Form1',compact('users'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        $validatedData = $request->validate([
            
            'id_clt'=>'required',
            'Methode_Affectation'=>'required',
            'Date_Reception_Dossier'=>'required',
        ]);
        $assurance = Assurance::create($validatedData);
        // dd($assurance->id);
        $assurance->reference = $assurance->id; // Set the reference field to the ID
        $assurance->save(); 
        return redirect()->route('show1',compact('assurance'));  


    }
    public function AssuranceUpdate($id){
        $validateRequest=request()->validate([
            'id_clt'=>'required',
            'Methode_Affectation'=>'required',
            'Date_Reception_Dossier'=>'required',
        ]);   
        $assurance = Assurance::find($id);
        // dd($request->id_clt_enmy);
        $assurance->update($validateRequest);
        return redirect()->route('show1',compact('assurance'));  
    }
    public function show1(Request $request,$assurance)
    {
        $users=User::where('role',0)
        ->where('isDeleted',0)
        ->where('type_clt','!=','clt3')
        ->get();
        $assurancecheck = Assurance::find($assurance);
        $usercheck=User::find($assurancecheck->id_clt);
        $tribunals=Tribunal::all();


     return view('Admins.Dossiers.Assurances.Add.Form2',compact('assurancecheck','usercheck','tribunals','users'));

    }
    public function store2(Request $request,$id)
    {
        $validateRequest=request()->validate([
            'NumeroRapportPoliceJudiciaire'      =>'required',
            'MinisterePublicNon'                 =>'required',
            'Suivi_M_AgentRoi'                   =>'required',
            'NumeroDossier'                      =>'required',
            'id_tribunals'                       =>'required',
        ]);   
        $assurance = Assurance::find($id);
        $assurance->update($validateRequest);
        if($request->isFirst=='true'){
            $assurance->update(['isFirst'=>1]);
        }

        $Assure = $request->input('Assure');
        $RevendicationsMatiereDroitsCiviques = $request->input('RevendicationsMatiereDroitsCiviques');
        $AutreCompagnieAssurance = $request->input('AutreCompagnieAssurance');
        // dd($AutreCompagnieAssurance);
        foreach ($Assure as $key => $value) {
                PartieAssurance::create([
                    'id_assurances' => $id,
                    'Assure' => isset($Assure[$key]) ? $Assure[$key] : null,
                    'RevendicationsMatiereDroitsCiviques' => isset($RevendicationsMatiereDroitsCiviques[$key]) ? $RevendicationsMatiereDroitsCiviques[$key] : null,
                    'AutreCompagnieAssurance' => isset($AutreCompagnieAssurance[$key]) ? $AutreCompagnieAssurance[$key] : null,
                ]);
        }
        
        return redirect()->route('Succes_Assurance',['id' => $assurance->id]); 
    }
    public function Succes_Assurance($id){
        return view('Admins.clients.successfully')->with([
            'message' => 'تمت إضافة الملف بنجاح',
            'type' => 'assurance',
            'id'=>$id
        ]); 
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

     public function RoutageDossier($id){
        $users=User::where('type_clt','clt3')
        ->where('isDeleted',0)
        ->get();
        return view('Admins.Dossiers.Assurances.RoutageDossiers.index',compact('users','id'));
     }
     public function storeRoutageDossier(Request $request){
        $validatedData = $request->validate([
            'id_dossier_Assurance'=>'required',
            'id_secretary'=>'required',
        ]);
        $RoutageDossier = RoutageDossier::create($validatedData);
        $RoutageDossier->save(); 
        return redirect()->route('assurances.index');  

     }
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
