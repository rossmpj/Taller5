<?php

namespace App\Http\Controllers;

use App\Models\LibroAutor;
use Illuminate\Http\Request;

class LibroAutorController extends Controller
{

/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return libroAutor::all();
    }

   

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c=new libroAutor();
        $c->isbn= $request->get('isbn');
        $c->id= $request->get('id');
        $c->save();
    }

    /**
     * Mostrar todos los libros de un autor
     *
     * @param  \App\Models\Relacional\LibroAutor  $libroAutor
     * @return \Illuminate\Http\Response
     */
    public function show($nombreAutor)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Relacional\LibroAutor  $libroAutor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $idl)
    {
        $c=libroAutor::find($idl); 
        $c->isbn= $request->get('isbn');
        $c->id= $request->get('id');
        $c->save();
    }


}
