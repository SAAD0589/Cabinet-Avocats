<?php

namespace App\Http\Controllers;

use App\Models\Implementation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ImplementationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admins.Implementations.Afficher');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admins.Implementations.Ajoute');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'folder_implentaire_num'=>'required',
            'date_R'=>'required',
            'dossier_id'=>'required',
            'procedure'=>'required',
            'implementation_num'=>'required',
            'trib_reference'=>'required',
            'type_dossier'=>'required',
        ]);
        // dd($request);

        Implementation::create($validatedData);
         return redirect()->route('implementations.index');  
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Implementation  $implementation
     * @return \Illuminate\Http\Response
     */
    public function show(Implementation $implementation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Implementation  $implementation
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $implementation=Implementation::find($id);
        $ImpChecks= DB::table('dossiers')
        ->select('tribunals_dossiers.id','dossiers.reference','tribunal_types.type_nom')
        
        ->join('tribunals_dossiers','dossiers.id','=','tribunals_dossiers.dossier_id')
        ->join('tribunal_types','tribunals_dossiers.type_tribunal','=','tribunal_types.id')
        ->join('implementations','tribunals_dossiers.id','=','implementations.dossier_id')
        ->where('implementations.dossier_id',$implementation->dossier_id)
        ->get();
        return view('Admins.Implementations.Update',compact('implementation','ImpChecks'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Implementation  $implementation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestValidate=request()->validate([
            'folder_implentaire_num'=>'required',
            'date_R'=>'required',
            'dossier_id'=>'required',
            'procedure'=>'required',
            'implementation_num'=>'required',
            'trib_reference'=>'required',
            'type_dossier'=>'required',
        ]);
        $implementation=Implementation::find($id);
        $implementation->update($requestValidate);
        return redirect()->route('implementations.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Implementation  $implementation
     * @return \Illuminate\Http\Response
     */
    public function deleteImp(Request $request)
    {
        // dd($request->inputDelete);
        $implementation = Implementation::find($request->inputDelete);
        $implementation->isDeleted = 1;
        $implementation->save();
        return back()->withInput();
    }
}
