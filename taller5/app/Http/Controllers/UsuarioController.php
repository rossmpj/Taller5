<?php

namespace App\Http\Controllers;

use App\Models\Usuario;
use Illuminate\Http\Request;

class UsuarioController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return Usuario::all();
    }

    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $c=new Usuario();
        $c->cedula= $request->get('cedula');
        $c->nombre= $request->get('nombre');
        $c->apellido= $request->get('apellido');
        $c->fecha= $request->get('fecha');
        $c->email= $request->get('email');
        $c->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Relacional\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        return Usuario::where('email',$email)->get();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Relacional\Usuario  $usuario
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $cedula)
    {
        $c=Usuario::find($cedula); 
        $c->nombre= $request->get('nombre');
        $c->apellido= $request->get('apellido');
        $c->fecha= $request->get('fecha');
        $c->email= $request->get('email');
        $c->save();
    }

      /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relacional\Usuario $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
  //
    }
}
