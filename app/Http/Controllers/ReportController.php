<?php

namespace App\Http\Controllers;

use App\Models\Report;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReportController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admins.Reports.Affichage');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admins.Reports.Ajoute');

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->dossier_id);
        $validatedData = $request->validate([
            'Num_Doc_R'=>'required',
            'date_R'=>'required',
            'dossier_id'=>'required',
            'procedure'=>'required',
            'judicial_commisioner'=>'required',
            'trib_reference'=>'required',
            'type_dossier'=>'required',
        ]);
         Report::create($validatedData);
         return redirect()->route('reports.index');  


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function show(Report $report)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $report=Report::find($id);
        $reportChecks= DB::table('dossiers')
        ->select('tribunals_dossiers.id','dossiers.reference','tribunal_types.type_nom')
        
        ->join('tribunals_dossiers','dossiers.id','=','tribunals_dossiers.dossier_id')
        ->join('tribunal_types','tribunals_dossiers.type_tribunal','=','tribunal_types.id')
        ->join('reports','tribunals_dossiers.id','=','reports.dossier_id')
        ->where('reports.dossier_id',$report->dossier_id)
        ->get();
        // dd($reportChecks);
        return view('Admins.Reports.Update',compact('report','reportChecks'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestValidate=request()->validate([
            'Num_Doc_R'=>'required',
            'date_R'=>'required',
            'dossier_id'=>'required',
            'procedure'=>'required',
            'judicial_commisioner'=>'required',
            'trib_reference'=>'required',
            'type_dossier'=>'required',
        ]);
        $report=Report::find($id);
        $report->update($requestValidate);
        return redirect()->route('reports.index'); 
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Report  $report
     * @return \Illuminate\Http\Response
     */
    public function deleteRep(Request $request)
    {
        //Switch valeur is Deleted a 1
        // dd($request->inputDelete);
        $report = Report::find($request->inputDelete);
        $report->isDeleted = 1;
        $report->save();
        return back()->withInput();
    }
}
