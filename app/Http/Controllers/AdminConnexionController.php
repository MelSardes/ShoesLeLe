<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminConnexionController extends Controller
{
    public function index(){
        
        return view('auth.admin.login');
    }
    
    public function connexionAdmin(Request $request){
        $email = 'admin@admin.com';
        $mdp = 'admin123';


        $request -> validate([
            
            'email'=>'required',
            'password' => 'required'
        ]);

        if ($email == $request->email && $mdp == $request->password) {
            return view('admin.dashboard');
        } else {
            return view('auth.admin.login')->with('erreur', 'Identifiants incorrects');
        }
    }
}
