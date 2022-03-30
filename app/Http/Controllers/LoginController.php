<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use DB;
use Illuminate\Support\Facades\Hash;
use Session;

class LoginController extends Controller
{
    //Función que mandara a la vista de login//
    public function login(){
        return view('auth/login');
    }

    public function principal(){
        return view('principal');
    }

    //Creamos las validaciones//

    public function valida(Request $request)
    {
        $this ->validate($request,[
        'correo'=>'email|required|email',
        'password'=>'required|min:5|alpha_num',      
        ]);
    
        $correo = $request->input('correo');
        $password =$request ->input('password');



        //Consulta para obtener el usuario con el mismo correo //
        $consulta= Usuarios::where('correo',$request->correo)->get();

        $cuantos = count($consulta);


        //Validación para el login//
        if($cuantos==1 and Hash::check($request->password,$consulta[0]->password))
        {
            Session::put('sessionusuario',$consulta[0]->nombre . ' ' .$consulta[0]->tipou . ' ' .$consulta[0]->correo);
            
            $sessionusuario = session('sessionusuario');

            return redirect('principal')
            ->with('sessionusuario',$sessionusuario);
        }else{
            return redirect('/')->with('status', 'No se encontro al usuario');

        }
    }
}
