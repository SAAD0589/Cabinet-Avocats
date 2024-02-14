<?php

namespace App\Http\Controllers;

use App\Models\Recuperation;
use App\Models\Dossier;
use App\Models\User;
use App\Models\Ville;
use App\Models\Tribunal;
use App\Models\FolderRecuperation;
use App\Models\TypeRecuperation;
use Illuminate\Http\Request;

class RecuperationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admins.Dossiers.Recuperation.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create1()
    {
        $dossiers=Dossier::all();
        return view('Admins.Dossiers.Recuperation.Forms.Form1',compact('dossiers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store1(Request $request)
    {
        // dd($request->id_type_dossier);
        $validatedData = $request->validate([
            'id_clt'=>'required',
            'id_type_dossier'=>'required',
            // 'dossier_id'=>'required',
            'enmy'=>'required',
            'date_Rec'=>'required',      
        ]);
        // dd($validatedData);
        $recuperation = Recuperation::create($validatedData);
        // dd($recuperation->id);
        $recuperation->reference = $recuperation->id; // Set the reference field to the ID
        $recuperation->save(); 

        return redirect()->route('show1',compact('recuperation'));  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Recuperation  $recuperation
     * @return \Illuminate\Http\Response
     */
    // public function show()
    // {
    // }
    public function show1(Request $request,$recuperation)
    {
        // Display Form One Update and add Form 2 
        // dd($recuperation->type_clt);
        // $dossiers=Dossier::all();
        
        $recuperationcheck = Recuperation::find($recuperation);
        
        // dd($dossiercheck);
        $villes=Ville::all();
        $secretarys=User::where('type_clt','clt3')
        ->where('isDeleted',0)->get();
        $tribunals=Tribunal::all();
        $Usercheck = User::find($recuperationcheck->id_clt);
        $users=User::where('type_clt',$Usercheck->type_clt)->get();
        return view('Admins.Dossiers.Recuperation.Forms.Form2',
        compact('recuperationcheck','users','Usercheck','villes','secretarys','tribunals'));

        // dd($recuperationcheck);
    }
    public function store2(Request $request,$id)
    {
        $validatedData = $request->validate([
            'name_Rec'=>'required',
            'num_Rec'=>'required',
            'adr_Rec'=>'required',
            'id_ville'=>'required',
            'id_trib'=>'required',      
            'id_userOffice'=>'required'
        ]);
        // dd($validatedData);
        $recuperation = Recuperation::find($id);
        $recuperation->update($request->all());
        return redirect()->route('show2',compact('recuperation'));  
    }
    public function show2(Request $request,$recuperation)
    { 
        $recuperationcheck = Recuperation::find($recuperation);
        $villes=Ville::all();
        $tribunals=Tribunal::all();
        $secretarys=User::where('type_clt','clt3')
        ->where('isDeleted',0)->get();

        return view('Admins.Dossiers.Recuperation.Forms.Form3',compact('recuperationcheck','villes','tribunals','secretarys'));
    }
    public function store3(Request $request,$id)
    {
        $FolderRecuperation = FolderRecuperation::create(array_merge(
            $request->all(),
            ['id_rec' => $id]
        ));
        
        // $FolderRecuperation->update(['id_rec ',$id]);

        $recuperation = Recuperation::find($id);
        // $recuperation->update(['id_folder_recs',$FolderRecuperation->id]);
        return redirect()->route('show3',compact('recuperation'));  
    }
    public function show3(Request $request,$recuperation)
    { 
        $folder_recuperations=FolderRecuperation::where('id_rec',$recuperation)->first();
        $recuperationcheck = Recuperation::find($recuperation);
        return view('Admins.Dossiers.Recuperation.Forms.Form4',compact('recuperationcheck','folder_recuperations'));
    }
    public function store4(Request $request,$id)
    {
        // dd($request->Name_Recuperation);
        $TypeRecuperation = TypeRecuperation::create($request->all());
        $recuperation = Recuperation::find($id);
        $recuperation->update(['id_type_recs ',$TypeRecuperation->id]);
        // dd($TypeRecuperation);
        return view('Admins.clients.successfully')->with([
            'message' => 'تمت إضافة الملف بنجاح',
            'type' => 'docs'
        ]); 
    }


    public function UpdateForm1(Request $request,$id){
        request()->validate([
            'type_clt'=>'required',
            'reference'=>'required',
            'id_type_dossier'=>'required',
            'id_clt'=>'required',
            'enmy'=>'required',
            'date_Rec'=>'required'
        ]); 
        // dd($id);  
        $recuperation = Recuperation::find($id);
        
        $recuperation->update($request->all());
        // dd($recuperation);
        return redirect()->route('show1', $id);
    }
    public function UpdateForm2(Request $request,$id){
        request()->validate([
            'name_Rec'=>'required',
            'num_Rec'=>'required',
            'adr_Rec'=>'required',
            'id_ville'=>'required',
            'id_trib'=>'required',
            'id_userOffice'=>'required'
        ]); 
        // dd($id);  
        $recuperation = Recuperation::find($id);
        
        $recuperation->update($request->all());
        // dd($recuperation);
        return redirect()->route('show2', $id);
    }
    public function UpdateFoldrs(Request $request,$id){

        // $FolderRecuperation = FolderRecuperation::create(array_merge(
        //     $request->all(),
        //     ['id_rec' => $id]
        // ));
        
        // dd($id);  
        $recuperation = Recuperation::find($id);
        
        $recuperation->update($request->all());
        // dd($recuperation);
        return redirect()->route('show2', $id);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Recuperation  $recuperation
     * @return \Illuminate\Http\Response
     */
    public function edit(Recuperation $recuperation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Recuperation  $recuperation
     * @return \Illuminate\Http\Response
     */
   

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Recuperation  $recuperation
     * @return \Illuminate\Http\Response
     */
    public function destroy(Recuperation $recuperation)
    {
        //
    }
}
