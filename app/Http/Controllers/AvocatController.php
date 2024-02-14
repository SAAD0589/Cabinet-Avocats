<?php

namespace App\Http\Controllers;

use App\Models\Avocat;
use Illuminate\Http\Request;

class AvocatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admins.avocats.Affichage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        
        return view('Admins.avocats.Ajoute');

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name'=>'required|string|min:3',
            'LastName'=>'required|string|min:3',
            'tel'=>'required|string|min:3',
            'Specialise'=>'required|string|min:3',
            'email' => 'required|email',
            'conf_email' => 'required|email|same:email',
            'status'=>'required|string|min:3',           
            'Adr'=>'required|string|min:3',
            'comment'=>'required|string|min:3',
        ]);
 


    Avocat::create($validatedData);
    return redirect()->route('Succes_Avocat'); 

    }
    public function Succes_Avocat(){
        return view('Admins.clients.successfully')->with([
            'message' => 'تم إضافة  محامي  بنجاح',
            'type' => 'avocats'
        ]); 
    }
    /**
     * Display the specified resource.
     */
    public function show(Avocat $avocat)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Avocat $avocat)
    {
        return view('Admins.avocats.Update',compact('avocat'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Avocat $avocat)
    {
        request()->validate([
            'name'=>'required|string|min:3',
            'LastName'=>'required|string|min:3',
            'Specialise'=>'required|string|min:3',
            'tel'=>'required|string|min:3',
            'email' => 'required|email', 
            'conf_email' => 'required|email|same:email',
            'status'=>'required',
            'Adr'=>'required|string|min:3',
            'comment'=>'required|string|min:3',
        ]);   
        $user = Avocat::find($avocat->id);
        $user->update($request->all());
        
        return view('Admins.clients.successfully')->with([
            'message'=>'تم تعديل محامي بنجاح',
            'type' => 'avocats'
        ]);        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function DeleteAvocat(Request $request)
    {
        $avocat = Avocat::find($request->inputDelete);
        $avocat->isDeleted = 1;
        $avocat->save();
        return redirect()->route('avocats.index');  
    }
}
