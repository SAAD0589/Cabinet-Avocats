<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Avocat;
use App\Models\Seance;
use App\Models\Dossier;
use App\Models\Procedure;
use App\Models\Attachment;
use App\Models\Bibliotheque;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RemarqueController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function addSeance(Request $request,$id){
        // dd($request->archive);
        $validatedData = $request->validate([
            'Avocat'=>'required',
            'Date_Seance'=>'required',
            'action'=>'required',
            'action1'=>'required',
            'avocat2'=>'required',
            'juge'=>'required',
            'comment'=>'required'
          
        ]); 
       
        $validatedData['dossier_tr_id']=$id;
        $seanceadd=Seance::create($validatedData);
        // dd($seanceadd);
        if($request->archive==1){
            $validatedData2 = $request->validate([
                'action'=>'required',
                'Date_Seance'=>'required',
                'Avocat'=>'required',
            ]); 

            $seances=DB::table('seances')
            ->select(
                'seances.id',
                'users_client.name as clt',
                'Adversaire'
            )
            ->leftJoin('tribunals_dossiers', 'seances.dossier_tr_id', '=', 'tribunals_dossiers.id')
            ->leftJoin('dossiers', 'dossiers.id', '=', 'tribunals_dossiers.dossier_id')
            ->leftJoin('users AS users_client', 'dossiers.id_clt', '=', 'users_client.id')
            ->where('seances.id',$seanceadd->id)
            ->first();
                // dd($seances->clt);

            $validatedData2['parties']=$seances->clt.'  '.$seances->Adversaire;
            $validatedData2['seance_id']=$seances->id;

            Bibliotheque::create($validatedData2);
        }
        return redirect()->route('remarque.show', $id);

    }

    public function AddAttachement(Request $request){
        // dd($request->attachment);
        $validatedData = $request->validate([
            'name'=>'required',
            'type_att'=>'required',
            'file_att'=>'required',      
        ]);
        $validatedData['seance_id']=$request->attachment;
        $seances=Seance::find($request->attachment);
       
        $attachment=Attachment::create($validatedData);
        if ($request->hasFile('file_att')) {
            $file = $request->file('file_att');
            $imageName = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('images'), $imageName);
            $attachment->file_att = 'images/' . $imageName;
            $attachment->save();
        }
        // dd($validatedData);

        return redirect()->route('remarque.show', $seances->dossier_tr_id);
    }
    public function store()
    {}

    /**
     * Display the specified resource.
     */
    public function show(Request $request,$id)
    {
        // dd($id);
        $date = now()->format('Y-m-d');
        
        $secretarys=User::where('Adjectifs','secretary')->get();
        $avocats = Avocat::all();
        $seancesTest = Seance::where('dossier_tr_id', $id)->first();
        $seances = Seance::where('dossier_tr_id', $id)
        ->where('isDeleted', 0)
        ->get();
        // dd($seancesTest);
        // $attachments =Attachment::where('seance_id',$seancesTest->id)->get();
        // $attachment=$attachments->count();

        // $procedures=Procedure::where('dossier_id', $id)
        // ->where('isDeleted', 0)->paginate(2);


        $procedures=DB::table('procedures')
        ->select(
            'procedures.id',
            'procedures.dossier_tr_id as dossier_tr_id',
            'procedures.status',

            'procedures.procedure_name',
            'procedures.date_procedure',
            'procedures.resp_remarque',
            'procedures.date_responsable',
             'users_avocat.name AS avocat',
              'users_client.name AS user1',
              'Adversaire AS user2',
              'tribunals.trib_nom as tribunal'         
        )
        ->leftJoin('tribunals_dossiers', 'procedures.dossier_tr_id', '=', 'tribunals_dossiers.id')
        ->leftJoin('tribunals', 'tribunals_dossiers.tribunal_id', '=', 'tribunals.id')
        ->leftJoin('dossiers', 'tribunals_dossiers.dossier_id', '=', 'dossiers.id')

        ->leftJoin('users AS users_client', 'dossiers.id_avocat', '=', 'users_client.id')
        ->leftJoin('users AS users_avocat', 'dossiers.id_avocat', '=', 'users_avocat.id')


        ->where('procedures.dossier_tr_id', $id)
        ->where('procedures.isDeleted', 0)
        ->groupBy(
            'procedures.id',
            'procedures.dossier_tr_id',
            'procedures.procedure_name',
            'procedures.date_procedure',
            'procedures.resp_remarque',
            'procedures.date_responsable',
            'procedures.status',
            'tribunals.trib_nom',
            'users_avocat.name',
            'users_client.name',
            'Adversaire'
        )
        ->get();
        $results = DB::table('seances')
        ->select(
            'seances.dossier_tr_id as Reference',
            'seances.id as Id_Seance',
            'seances.Date_Seance as Date_Seance',
            'seances.Avocat as avocat',
            'seances.Action as action',
            'seances.juge as juge',
            'seances.comment as comment',
            'seances.status as status',
            DB::raw('COUNT(attachments.seance_id) as attachments_count'),
            'tribunals.trib_nom as tribunal',
            'villes.ville_nom as ville'
            
        )
        ->leftJoin('attachments', 'seances.id', '=', 'attachments.seance_id')

        ->leftJoin('tribunals_dossiers', 'seances.dossier_tr_id', '=', 'tribunals_dossiers.id')

        ->leftJoin('dossiers', 'seances.dossier_tr_id', '=', 'dossiers.reference')


        // ->leftJoin('tribunals_dossiers as tribunals_Doc', 'seances.id', '=', 'tribunals_Doc.dossier_id')

        ->leftJoin('tribunals', 'tribunals_dossiers.tribunal_id', '=', 'tribunals.id')
        ->leftJoin('villes', 'tribunals_dossiers.ville', '=', 'villes.id')




        ->where('seances.dossier_tr_id', $id)
        ->groupBy(
            'seances.dossier_tr_id',
        'seances.id',
        'seances.Date_Seance',
        'seances.Action',
        'seances.juge',
        'seances.Avocat',
        'seances.comment',
        'seances.status',
        'tribunals.trib_nom',
        'villes.ville_nom'

        )
        ->get();
    
        // dd($results);
        return view('Admins.Dossiers.ReclamationsDiverses.Seances_Procedures.index', compact('id', 'avocats','results','date','secretarys','procedures'));

    }
    
    public function Updateseanse(Request $request){
        $validatedData = $request->validate([
            'Avocat'=>'required',
            'Date_Seance'=>'required',
            'action'=>'required', 
            'action1' =>'required',    
            'avocat2'  =>'required',  
            'juge'=>'required',
            'comment'=>'required',
        ]);
        
        $seance = Seance::find($request->seanceInput);
        $seance->update($validatedData);
        // dd($request->seanceInput);
        return back()->withInput();

    }
    public function Updateatt(Request $request){
        $validatedData = $request->validate([
            'name'=>'required',
            'type_att'=>'required',
            'file_att'=>'required', 
        ]);
        // $validatedData['attachmentInput']=$request->attachmentInput;
        // dd($request->id_att);
        $attachment = Attachment::find($request->id_att);
        $attachment->update($validatedData);
        return back()->withInput();
    }
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    // public function AddSeance(Request $request,$id)
    // {
    //     dd($id);
    // }
    public function update(Request $request, string $id)
    {
    }

    /**
     * Remove the specified resource from storage.
     */
    public function deleteSeance(Request $request)
    {   
        $seance = Seance::find($request->inputDelete);

        $seance->isDeleted = 1;
        $seance->save();
                // dd($seance);

        return back()->withInput();
    }
    public function deleteAtt(Request $request)
    {   
        $attechment = Attachment::find($request->idatt);

        $attechment->isDeleted = 1;
        $attechment->save();
                // dd($attechment);

        return back()->withInput();
    }
    public function destroy(string $id)
    {
        //
    }
}
