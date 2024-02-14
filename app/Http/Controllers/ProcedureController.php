<?php

namespace App\Http\Controllers;

use App\Models\Seance;
use App\Models\Procedure;
use Illuminate\Http\Request;

class ProcedureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
    public function store(Request $request)
    {
         // dd($request->attachment);
         $validatedData = $request->validate([
            'date_procedure'=>'required',
            'dossier_tr_id'=>'required',
            'incharage'=>'required',  
            'procedure_name'=>'required',        
            'date_responsable'=>'required',
            'resp_remarque'=>'required'
        ]);
        // dd($request->attachment);
        $validatedData['procedure_type']='not';
    //     $seances=Seance::find($request->id_doc);
    //    dd($request->id_doc);
        Procedure::create($validatedData);
        // dd($validatedData);

        return redirect()->route('remarque.show', $request->dossier_tr_id);
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }
    public function UpdateProcedure(Request $request){
        $validatedData = $request->validate([
            'procedure_name'=>'required',
            'date_responsable'=>'required',
            'resp_remarque'=>'required', 
        ]);
        
        $procedure = Procedure::find($request->idPro);
        // dd($procedure);
        $procedure->update($validatedData);
        // dd($request->seanceInput);
        return back()->withInput();

    }
    /**
     * Remove the specified resource from storage.
     */
    public function DeletePro(Request $request)
    {
        $procedure = Procedure::find($request->procedure);
    //    dd($procedure);

        $procedure->isDeleted = 1;
        $procedure->save();

        return back()->withInput();
    }
    public function destroy(string $id)
    {
        
    }
}
