<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\ClientRequest;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\ValidationClient;
class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admins.clients.Affichage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    { 
        return view('Admins.clients.Ajoute');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request,ValidationClient $validation)
    {
       
        // dd($request->type_clt);
        if ($request->type_clt=='clt1') {
            $validatedData = $request->validate([
                'name'=>'required|string|min:3',
                'LastName'=>'required|string|min:3',
                'nom_Agence'=>'required|string|min:3',
                // 'RC'=>'required|string|min:3',
                // 'ICE'=>'required|string|min:3',
                // 'images'=>'image',  
                'email' => 'required|email',
                'conf_email' => 'required|email|same:email',
                'password' => 'required|min:3',
                'conf_password' => 'required|:min3mail|same:password', 
                // 'Tel_Portable'=>'required|string|min:3',
                // 'Tel_Fix'=>'required|string|min:3',
                // 'Fax'=>'required|string|min:3',
                'status'=>'required',
                // 'city'=>'required|string|min:3',
                // 'Adr'=>'required|string|min:3',
                'type_clt'=>'required',
                // 'comment'=>'required|string|min:3',
            ],[
                'name.required' => 'The name field is required.',
                'LastName.required' => 'The Last Name field is required.',
                'nom_Agence.required' => 'The Agency Name field is required.',
                'email.required' => 'The email field is required.',
                'email.email' => 'Please enter a valid email address.',
            ]);
            // $validatedData['type_clt'] = $request->type_clt;
          

        } else {
            $validatedData = $request->validate([
                'name'=>'required|string|min:3',
                'LastName'=>'required|string|min:3',
                // 'images'=>'image',
                // 'cin'=>'required|string|min:3',
                // 'passport'=>'required|string|min:3',
                'email' => 'required|email',
                'conf_email' => 'required|email|same:email',
                'password' => 'required|min:3',
                'conf_password' => 'required|:min3mail|same:password', 
                'type_clt'=>'required|string|min:3',
                // 'Tel_Portable'=>'required|string|min:3',
                // 'Tel_Fix'=>'required|string|min:3',
                // 'Fax'=>'required|string|min:3',
                'status'=>'required|string|min:3',
                'type_clt'=>'required',
                // 'city'=>'required|string|min:3',
                // 'Adr'=>'required|string|min:3',
                // 'comment'=>'required|string|min:3',
            ]);
            // $validatedData['type_clt'] = $request->type_clt;

        }

        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($validatedData);
        User::create($validatedData);
        return redirect()->route('Succes_Client'); 
        
    }
    public function Succes_Client(){
        return view('Admins.clients.successfully')->with([
            'message' => 'تم إضافة موكل بنجاح',
            'type' => 'clients'
        ]); 
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
        $user=User::find($id);
        $userCheck=User::where('id','=',$id)
        ->where('type_clt','=',$user->type_clt)
        ->first();
        
        if($userCheck->type_clt=='clt1'){
        return view('Admins.clients.Updateclt1',compact('userCheck'));

        }else{
        return view('Admins.clients.Updateclt2',compact('userCheck'));

        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        if ($request->selectedForm) {
            $validateRequest=request()->validate([
                'name'=>'required|string|min:3',
                'LastName'=>'required|string|min:3',
                'nom_Agence'=>'required|string|min:3',
                // 'RC'=>'required|string|min:3',
                // 'ICE'=>'required|string|min:3',
                'email' => 'required|email', 
                // 'Tel_Portable'=>'required|string|min:3',
                // 'Tel_Fix'=>'required|string|min:3',
                // 'Fax'=>'required|string|min:3',
                'status'=>'required|string|min:3',
                // 'city'=>'required|string|min:3',
                // 'Adr'=>'required|string|min:3',
                // 'comment'=>'required|string|min:3',
            ]);          

        } else {
            $validateRequest=request()->validate([
                'name'=>'required|string|min:3',
                'LastName'=>'required|string|min:3',
                'cin'=>'required|string|min:3',
                'passport'=>'required|string|min:3',
                'email' => 'required|email',
                'Tel_Portable'=>'required|string|min:3',
                'Tel_Fix'=>'required|string|min:3',
                // 'Fax'=>'required|string|min:3',
                // 'status'=>'required|string|min:3',
                // 'city'=>'required|string|min:3',
                // 'Adr'=>'required|string|min:3',
                // 'comment'=>'required|string|min:3',
            ]);

        }
        $user = User::find($id);
        $user->update($validateRequest);
        
        return view('Admins.clients.successfully')->with([
            'message'=>'تم تعديل موكل بنجاح',
            'type' => 'clients'
        ]); 
        
    }

    /**
     * Remove the specified resource from storage.
     */
    public function DeleteClt(Request $request)
    {
        // dd($request->inputDelete);
        $user = User::find($request->inputDelete);
        $user->isDeleted = 1;
        $user->save();
        // $user->delete();
        return redirect()->route('clients.index');  
    }
}
