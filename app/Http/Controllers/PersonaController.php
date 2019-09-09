<?php

namespace Lavel\Http\Controllers;

use Lavel\Persona;
use Lavel\Registro;
use Illuminate\Http\Request;

class PersonaController extends Controller
{
    public function index(Registro $grupo, Request $request){
    	if($request->ajax()){
    		return response()->json($grupo->personas, 200);
    	}
    	return view('personas.index');
    }

    public function store(Registro $grupo, Request $request){
        if($request->ajax()){

            $persona = new Persona();
            $persona->name = $request->input('name');
            $persona->picture = $request->input('picture');
            $persona->registro()->associate($grupo)->save();
            //$persona->save();

            return response()->json([
                //"grupo"=>$grupo,
                "message" => "Persona Creada Correctamente.",
                "persona" => $persona
            ], 200);
        }
    }
}