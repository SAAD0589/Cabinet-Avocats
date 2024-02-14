<?php

namespace App\Http\Controllers;

use App\Models\Dossier;
use Illuminate\Http\Request;

class ArchiveController extends Controller
{
    public function saveArchive($id){
        $dossier = Dossier::find($id);
        $dossier->isArchive=1;
        $dossier->save();
        // dd($id);
        return back()->withInput();

    }
    public function index(){
       
        return view('Admins.Archives.Affichage');
    }
    public function Delete(Request $request){
       
        // dd($request->inputDelete);
        $dossiers = Dossier::find($request->inputDelete);
        $dossiers->isDeleted = 1;
        $dossiers->save();
        return back()->withInput();
    }
    //Delete From Archive
    public function DeleteArchive(Request $request){
       
        $dossiers = Dossier::find($request->inputDelete);
        $dossiers->isArchive = 0;
        $dossiers->save();
        return back()->withInput();
    }
}
