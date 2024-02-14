<?php

namespace App\Http\Controllers;

use App\Models\AnnuaireTelephonique;
use Illuminate\Http\Request;

class AnnuaireTelephoniqueController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admins.AnnuaireTelephonique.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('Admins.AnnuaireTelephonique.Add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->email);
        $validatedData = $request->validate([
            'QualiteService'=>'required',
            'Nomcomplet'=>'required',
            'NumeroTelephoneFixe'=>'required',
            'telephonePortable'=>'required',
            'TypeUtilisateur'=>'required|in:1,2',
            'email'=>'required'
        ]);
        AnnuaireTelephonique::create($validatedData);
        return redirect()->route('Succes_AnnuaireTelephonique'); 
    }
    public function Succes_AnnuaireTelephonique(){
        return view('Admins.clients.successfully')->with([
            'message' =>'تم إضافة دليل هاتف بنجاح',
            'type' => 'AnnuaireTelephonique'
        ]); 
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AnnuaireTelephonique  $annuaireTelephonique
     * @return \Illuminate\Http\Response
     */
    public function show(AnnuaireTelephonique $annuaireTelephonique)
    {
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AnnuaireTelephonique  $annuaireTelephonique
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $checkAnnuaireTelephonique=AnnuaireTelephonique::find($id);
        return view('Admins.AnnuaireTelephonique.Update',compact('checkAnnuaireTelephonique'));

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AnnuaireTelephonique  $annuaireTelephonique
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $requestValidate=request()->validate([
            'QualiteService'=>'required',
            'Nomcomplet'=>'required',
            'NumeroTelephoneFixe'=>'required',
            'telephonePortable'=>'required',
            'TypeUtilisateur'=>'required|in:1,2',
            'email'=>'required'
        ]);
        $AnnuaireTelephonique=AnnuaireTelephonique::find($id);
        $AnnuaireTelephonique->update($requestValidate);
        return redirect()->route('AnnuaireTelephonique.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AnnuaireTelephonique  $annuaireTelephonique
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $annuaireTelephonique = AnnuaireTelephonique::find($request->inputDelete);
        $annuaireTelephonique->isDeleted = 1;
        $annuaireTelephonique->save();
        return redirect()->route('AnnuaireTelephonique.index'); 
    }
}
