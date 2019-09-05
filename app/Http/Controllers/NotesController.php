<?php

namespace Lavel\Http\Controllers;

use Illuminate\Http\Request;
use Lavel\Mensaje;
use Lavel\User;

class NotesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $tabla = Mensaje::where('user_id', auth()->id())->get();
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
        $tabla->dele();
    }
}
