<?php

namespace App\Http\Controllers;

use App\Models\RendezVous;
use App\Models\Avocat;
use App\Models\User;
use Illuminate\Http\Request;

class RendezVousController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('Admins.RendezVous.index');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $avocats=Avocat::where('isDeleted',0)->get();
        return view('Admins.RendezVous.Add',compact('avocats'));
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
            'TypeRendezVous'=>'required',
            'id_clt'=>'required',
            'AutrePersonne'=>'required',
            'status'=>'required',
            'id_avocat'=>'required',
            'DateHeure'=>'required',
            'commentaires'=>'required',
        ]);
        RendezVous::create($validatedData);
        return redirect()->route('Succes_RendezVous'); 

    }
    public function Succes_RendezVous(){
        return view('Admins.clients.successfully')->with([
            'message' =>'تم إضافة موعد بنجاح',
            'type' => 'RendezVous'
        ]); 
    }
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\RendezVous  $rendezVous
     * @return \Illuminate\Http\Response
     */
    public function show(RendezVous $rendezVous)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\RendezVous  $rendezVous
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $avocats=Avocat::where('isDeleted',0)->get();
        $rendez_vouses=RendezVous::find($id);
        $usercheck=User::find($rendez_vouses->id_clt);
        $users=User::where('isDeleted',0)
            ->where('type_clt',$usercheck->type_clt)
            ->get();
        return view('Admins.RendezVous.Update',compact('rendez_vouses','avocats','usercheck','users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\RendezVous  $rendezVous
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $requestValidate=request()->validate([
            'TypeRendezVous'=>'required',
            'DateHeure'=>'required',
            'status'=>'required',
            'id_avocat'=>'required',
            'id_clt'=>'required',
            'AutrePersonne'=>'required',
            'commentaires'=>'required',
        ]);
        $rendezVous=RendezVous::find($id);
        $rendezVous->update($requestValidate);
        return redirect()->route('RendezVous.index');  
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\RendezVous  $rendezVous
     * @return \Illuminate\Http\Response
     */
    public function delete(Request $request)
    {
        $rendezVous = RendezVous::find($request->FromRendezVous);
        $rendezVous->isDeleted = 1;
        $rendezVous->save();
        return redirect()->route('RendezVous.index');  
    }
}
