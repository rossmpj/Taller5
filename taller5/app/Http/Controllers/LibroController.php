<?php

namespace App\Http\Controllers;

use App\Models\Libro;
use Illuminate\Http\Request;

class LibroController extends Controller
{
    public function index()
    {
        return Libro::all();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $libro=new libro();
        $libro->isbn= $request->get('isbn');
        $libro->titulo= $request->get('titulo');
        $libro->save();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Relacional\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function show($titulo)
    {
        return libro::where('titulo',$titulo)->get();
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Relacional\Libro  $libro
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $libro= Libro::find($id); 
        $libro->titulo= $request->get('titulo');
        $est->save();
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Relacional\Libro  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $libro= Libro::find($id); 
        $libro->delete();
    }
}
