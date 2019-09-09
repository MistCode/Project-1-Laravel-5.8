<?php

namespace Lavel\Http\Controllers;

use Illuminate\Http\Request;
use Lavel\Mensaje;

class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if($request->ajax()){
            return response()->json([],200);
        }
        return view('notas.index');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        $tabla = new Mensaje();
        $tabla->name = $request->name;
        $tabla->mensaje = $request->mensaje;
        $tabla->user_id = auth()->id();
        $tabla->save();

        return $tabla;
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required',
            'mensaje' => 'required'
        ]);
        $tabla = Mensaje::find($id);
        $tabla->name = $request->name;
        $tabla->mensaje = $request->mensaje;
        $tabla->save();

        return $tabla;
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $tabla = Mensaje::find($id);
        $tabla->delete();
    }
}
