<?php

namespace App\Http\Controllers;

use App\Models\Autor;
use Illuminate\Http\Request;

class AutorController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return \DB::table('autores')
                ->select('nombres')
                ->get();
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c=new Autor();
        $c->nombres= $request->get('nombres');
        $c->save();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Relacional\Autor  $autor
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $c= Autor::find($id); 
        $c->nombres= $request->get('nombres');
        $c->save();
    }

}
