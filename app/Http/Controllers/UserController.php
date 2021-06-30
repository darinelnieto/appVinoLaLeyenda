<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class UserController extends Controller
{
    public function registroNuevo(Request $request){

        if(User::where('email', '=', $request->email)->exists()){
            return redirect()->back()->with('error', "¡ El email que ingresaste para el nuevo usuario ya existe ! por favor prueba con otro", 'request');
        }

        $nuevo = new User();

        $nuevo->name = $request->name;
        $nuevo->email = $request->email;
        $nuevo->phone = $request->phone;
        $nuevo->password = bcrypt($request->password);
        $nuevo->rol = $request->rol;
        $nuevo->state = $request->state;

        $nuevo->save();

       return redirect()->back()->with('exito', "¡ El Usuario se ha agregado con éxito !");
    }

    public function editador(Request $request){

        $edita = User::find($request->id);

        $edita->id = $request->id;
        $edita->name = $request->name;
        $edita->email = $request->email;
        $edita->phone = $request->phone;
        $edita->rol = $request->rol;
        $edita->password = bcrypt($request->password);
        $edita->state = $request->state;

        $edita->save();

        return redirect('appVinosAdmin');

    }

    public function estado(Request $request){
        $estado = User::find($request->id);

        $estado->id = $request->id;
        $estado->state = $request->state;

        $estado->save();

        return redirect('appVinosAdmin');
    }
}
