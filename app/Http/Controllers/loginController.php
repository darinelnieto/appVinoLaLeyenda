<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use App\User;
use App\paginate;

class loginController extends Controller
{
    function login(){
        
        return view('login');
    }
    function logeado(Request $request){
        // login app
       $validacion = request()->only('email', 'password');

        if(Auth::attempt($validacion)){
            if(Auth::user()->state === "Inactivo"){
                return redirect()->back();
            }else{
                return redirect('appVinosAdmin');
            }
        }else{
            return redirect('login');
        }

    }

    function validado(){
        
        $usuarios = DB::table('users')->paginate(10);

        return view('appVinosAdmin', compact('usuarios', 'productos'));

    }

}
