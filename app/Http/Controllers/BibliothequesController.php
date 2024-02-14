<?php

namespace App\Http\Controllers;


use App\Models\Bibliotheque;
use Illuminate\Http\Request;

use App\Exports\BibliothequeExport;
use App\Exports\UsersExport;
use Maatwebsite\Excel\Facades\Excel;



class BibliothequesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admins.Bibliotheques.Affichage');
    }
    public function exportUsers()
    {
        return Excel::download(new BibliothequeExport, 'Bibliotheques.xlsx');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create($id)
    {
       
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit($id)
    {
     
        $bibliotheque=Bibliotheque::find($id);
        return view('Admins.Bibliotheques.Update',compact('bibliotheque'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $requestValidate=request()->validate([
            'date_insert_dossier'=>'required',
            'date_back_dossier'=>'required',
        ]);
        $bibliotheque=Bibliotheque::find($id);
        $bibliotheque->update($requestValidate);
        return redirect()->route('bibliotheques.index');  

        // dd($request->date_insert_dossier);
    }
    public function delete(Request $request){
        // dd($request->inputDelete);
        $bibliotheque = Bibliotheque::find($request->inputDelete);
        $bibliotheque->isDeleted = 1;
        $bibliotheque->save();
        // $user->delete();
        return redirect()->route('bibliotheques.index'); 
    }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
