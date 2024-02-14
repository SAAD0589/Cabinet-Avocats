<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('Admins.users.Affichage');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Admins.users.Ajoute');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
     
          

            // dd($request->Adjectifs);
            $validatedData = $request->validate([
                'name'=>'required|string|min:3',
                'LastName'=>'required|string|min:3',
                'email' => 'required|email',
                'conf_email' => 'required|email|same:email',
                'password' => 'required|min:3',
                'conf_password' => 'required|:min3mail|same:password', 
                'type_clt'=>'required|string|min:3',
                'status'=>'required',
                'Adjectifs'=>'required|string|min:3',
                'Tel_Portable'=>'required|string|min:3',
                // 'Tel_Fix'=>'required|string|min:3',
                // 'Tel_Portable_2'=>'required|string|min:3',
                // 'Fax'=>'required|string|min:3',
                // 'city'=>'required|string|min:3',
                // 'Adr'=>'required|string|min:3',
                
                // 'comment'=>'required|string|min:3',
            ]);
            
       
            $validatedData['type_clt'] = $request->type_clt;

        

        $validatedData['password'] = Hash::make($validatedData['password']);

        // dd($validatedData);
        User::create($validatedData);
        // return redirect()->route('clients.index'); 
        return redirect()->route('Succes_User'); 

      
    }
    public function Succes_User(){
        return view('Admins.clients.successfully')->with([
            'message' => 'تم إضافة  مستخدم  بنجاح',
            'type' => 'users'
        ]); 
    }
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user=User::find($id);

        
        
        return view('Admins.users.Update',compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request,  User $user)
    {
        if($request->password!=''){
            $validatedData = request()->validate([
                'name'=>'required|string|min:3',
                'LastName'=>'required|string|min:3',
                'email' => 'required|email',
                'conf_email' => 'required|email|same:email',
                'password' => 'required|min:3',
                'conf_password' => 'required|:min3mail|same:password', 
                'status'=>'required',
                'Adjectifs'=>'required',
                'Tel_Portable'=>'required|string|min:3',
                // 'Tel_Fix'=>'required|string|min:3',
                // 'Tel_Portable_2'=>'required|string|min:3',
                // 'Fax'=>'required|string|min:3',
                // 'city'=>'required|string|min:3',
                // 'Adr'=>'required|string|min:3',
                // 'comment'=>'required|string|min:3',
            ]);   
        }else{
           $validatedData = request()->validate([
                'name'=>'required|string|min:3',
                'LastName'=>'required|string|min:3',
                'email' => 'required|email',
                'conf_email' => 'required|email|same:email',     
                'status'=>'required',
                'Adjectifs'=>'required',
                'Tel_Portable'=>'required|string|min:3',
            ]);  
            $user = User::find($user->id);


if ($user->Adjectifs == 'admin' && $request->Adjectifs=='secretary') {
    $user->Adjectifs = $request->Adjectifs;
}

 elseif ($user->Adjectifs == 'secretary' && $request->Adjectifs=='admin') {
    $user->Adjectifs = $request->Adjectifs;
    
}
$user->save();

        }
        
        $usercheck = User::find($user->id);
        $usercheck->update($validatedData );
        
        return view('Admins.clients.successfully')->with([
            'message'=>"تم تعديل  مستخدم  بنجاح",
            'type' => 'users'
        ]);        
       
    }

    /**
     * Remove the specified resource from storage.
     */
    public function DeleteUser(Request $request)
    {
        // dd($request->inputDelete);
        $user = User::find($request->inputDelete);
        $user->isDeleted = 1;
        $user->save();
        return redirect()->route('users.index');  

    }
}
