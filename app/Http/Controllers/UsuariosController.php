<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Usuarios;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Session;
use Illuminate\Support\Facades\Crypt;

class UsuariosController extends Controller
{
    public function alta_usuarios(){
        $consulta = Usuarios::orderBy('idu','DESC')
            ->take(1)->get();

        $cuantos = count($consulta);
        if ($cuantos==0) {
            $idesigue = 1;
        } else {
            $idesigue = $consulta[0]->idu + 1;
        }

        return view('auth/register')
            ->with('idesigue',$idesigue);

    }

    //Guardar usuarios//
    public function guarda_usuarios(Request $request){

        $this->validate($request,[
            'nombre'=>'required',
            'empresa'=>'required',
            'detalles'=>'required',
            'tipou'=>'required',
            'fotou'=>'required',
            'correo'=>'required',
            'password'=>'required',
        ]);
        $passwordEncriptado = Hash::make($request->password);
    
        $usuarios = new Usuarios;
        $usuarios->idu = $request->idu;
        $usuarios->nombre = $request->nombre;
        $usuarios->empresa = $request->empresa;
        $usuarios->detalles = $request->detalles;
        $usuarios->tipou = $request->tipou;
        $usuarios->fotou = $request->fotou;
        $usuarios->correo = $request->correo;
        $usuarios->password = Hash::make($request->password);
    
        $usuarios->save();
        return view('auth/login');
    }

}
    
    


