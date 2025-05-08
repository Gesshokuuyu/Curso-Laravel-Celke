<?php

namespace App\Http\Controllers;

use App\Models\User;
use Exception;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function create()
    {
       return view('users.create');  
    }

    public function store(Request $request) {
            // dd($request);
        try{
            User::create([
                'name' => $request->name,
                'email' => $request->email,
                'password' => $request->password
            ]);

            return redirect()->route('user.create')->with('success', 'Usuario cadastrado com sucesso!');

        }catch( Exception $e){
            return redirect()->route('user.create')->with('error', 'Erro ao cadastrar usuario! ' . $e->getMessage());
        }
        
    }
}
