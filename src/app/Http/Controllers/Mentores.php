<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;

class Mentores extends Controller
{
    function index(){
        return view('registrarMentores');
    }

    function volver(){
        return view('home');
    }

    function add(Request $req){

        $query = DB::table('usuarios')->insert([
  
          'cedula'=> $req->input('cedula'),
          'codigo'=> $req->input('codigo'),
          'nombre'=> $req->input('nombre'),
          'apellido'=>$req->input('apellido'),
          'celular'=>$req->input('celular'),
          'genero'=>$req->input('genero'),
          'correo'=>$req->input('correo'),
          'contraseña'=>$req->input('contraseña')

        ]);

        if($query){

            return back()->with('exitosa','La inserción es satisfactoria');
        }else{
            return back()->with('falla','La inserción falló');
        }
      }

}
