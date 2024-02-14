<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\Ville;
use App\Models\Avocat;
use App\Models\Dossier;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class DossierController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function Affichage(){
        return view('Admins.Dossiers.Affichage');
    }
    public function index()
    {
        return view('Admins.Dossiers.index');
    }

    /**
     * Show the form for creating a new resource.
     */
    
    public function create()
    {
        $avocats=Avocat::all();
       
        $users=User::where('type_clt', 'clt2')
        ->get();
        return view('Admins.Dossiers.UpdateDoc.Add.addDossier',compact('users','avocats'));
    }
   
    public function villeSelect(Request $request){

        $nameVille=Ville::where('id','=',$request->tribunal)->first();
        $tribunal=DB::table('tribunals')
        ->join('regions','regions.id','=', 'tribunals.id_reg')
        ->join('tribunal_types','tribunal_types.id','=', 'tribunals.id_type')
        ->where( 'regions.nom', 'like', '%' . $nameVille->ville_nom . '%')
        ->where( 'tribunal_types.type_nom', 'like', '%' . 'المحكمة الإبتدائية' . '%')
        ->select('tribunals.*','tribunals.trib_nom')
        ->get();
        // dd($tribunal);
        return response()->json($tribunal);
    }
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       
            // dd($request->type_clt);
            $validatedData = $request->validate([
                'reference'=>'required',
                'id_clt'=>'required',
                'couleur'=>'required',
                'type_clt'=>'required',
                // 'id_clt_enmy'=>'required',
                'id_avocat'=>'required',
                // 'avocat_enmy'=>'required',

                // 'tribunal'=>'required|string|min:3',
                // 'ville'=>'required|string|min:3',
                // 'e1_trib'=>'required|string|min:3',
                // 'e1_type_dossier'=>'required|string|min:3',
                // 'e1_sale_nim'=>'required|string|min:3',
                // 'juge'=>'required|string|min:3',
                // 'e1_heure'=>'required|string|min:3',
                // 'e1_jugement_num'=>'required|string|min:3',
                // 'e1_date_jugement'=>'required|string|min:3',
                // 'e1_prejudice'=>'required|string|min:3',
                // 'e1_jugement'=>'required|string|min:3',
                // 'e1_decision'=>'required|string|min:3',
                // 'e1_date_dec'=>'required|string|min:3',
                // 'e1_descsentes'=>'required|string|min:3',
            ]);
    
            $dossier = Dossier::create($validatedData);
            $usercheck=User::find($dossier->id_clt);
            // dd($user->id);
            $avocat=DB::table('dossiers')
            ->join('avocats','avocats.id','=', 'dossiers.id_avocat')
            ->select('avocats.*','avocats.name')
            ->first();

            $user=DB::table('dossiers')
            ->join('users','users.id','=', 'dossiers.id_clt')
            ->select('users.*','users.name')
            ->first();

            $usersClt1=User::where('type_clt','=', 'clt1')
            ->get();

            $usersClt2=User::where('type_clt','=', 'clt2')
            ->get();

            $avocats=Avocat::all();
            $villes=Ville::all();
        return view('Admins.Dossiers.UpdateDoc.Add.updateDossier',compact('villes'))->with([
            'message' => 'تم إضافة مسطرة بنجاح',
            'dossier'=>$dossier,
            'avocat'=>$avocat,
            'avocats'=>$avocats,
            'usercheck'=>$usercheck,
            'usersClt2'=>$usersClt2,

        ]); 
    }

    /**
     * Display the specified resource.
     */
    public function show(Dossier $dossier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Dossier $dossier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,$id)
    {
        // dd($id);
        // dd($request->all());

        $validator = Validator::make($request->all(), [
            'e1_heure' => ['required'],
        ]);
    
        if ($validator->fails()) {
            // If validation fails, return back with errors and old input
            return redirect()->back()->withErrors($validator)->withInput();
        }
    // if ($validator->fails()) {
    //     return redirect()->back()->withErrors($validator)->withInput();
    // }

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Dossier $dossier)
    {
        //
    }
}
