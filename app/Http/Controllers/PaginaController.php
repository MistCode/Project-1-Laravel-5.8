<?php

namespace Lavel\Http\Controllers;

use Lavel\Registro;
use Illuminate\Http\Request;

class PaginaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $usuarios = Registro::all();


        return view('grupos.index', compact('usuarios'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('grupos.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if($request->hasfile('avatar'))
        {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $file->move(public_path().'/images/', $name);
        }

        $ingresar = new Registro();
        $ingresar->name = $request->input('name');
        $ingresar->slug = str_slug($request->slug);
        $ingresar->avatar = $name;
        
        $ingresar->save();

        return "saved";
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Registro $mostrar, $slug)
    {
        $mostrar = Registro::where('slug','=',$slug)->firstOrFail();

        //dd($mostrar);
        return view('grupos.show', compact('mostrar'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit(Registro $mostrar, $slug)
    {
        $mostrar = Registro::where('slug','=',$slug)->firstOrFail();
        return view('grupos.edit', compact('mostrar'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Registro $mostrar, $slug)
    {
        $mostrar = Registro::where('slug','=',$slug)->firstOrFail();
        $mostrar->fill($request->except('avatar'));
        if($request->hasfile('avatar'))
        {
            $file = $request->file('avatar');
            $name = time().$file->getClientOriginalName();
            $mostrar->avatar = $name;
            $file->move(public_path().'/images/', $name);
        }
        $mostrar->save();

        return 'update';
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}