<?php
namespace Lavel\Http\Controllers;
use Illuminate\Http\Request;
use Lavel\Comunidad;
use Lavel\Mensaje;
class NotesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Comunidad $comunidad, Request $request)
    {
            return $comunidad->tablas = Mensaje::all();
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Comunidad $comunidad, Request $request)
    {
        
        $this->validate($request,[
            'name' => 'required',
            'mensaje' => 'required'
        ]);
        $tabla = new Mensaje();
        $tabla->name = $request->input('name');
        $tabla->mensaje = $request->input('mensaje');
        //$tabla->user_id = auth()->id();
        $tabla->comunidad()->associate($comunidad)->save();
        //traer comunidad_id https://plugins.krajee.com/file-basic-usage-demo
        return $tabla;
    }
    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Comunidad $comunidad, Request $request, $id)
    {
        
        $this->validate($request,[
            'name' => 'required',
            'mensaje' => 'required'
        ]);
        $tabla = Mensaje::find($id);
        $tabla->name = $request->name;
        $tabla->mensaje = $request->mensaje;
        $tabla->comunidad()->associate($comunidad)->save();
        return $tabla;
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Comunidad $comunidad, $id)
    {
        $tabla = Mensaje::find($id);
        $tabla->comunidad()->associate($comunidad)->delete();
    }
}