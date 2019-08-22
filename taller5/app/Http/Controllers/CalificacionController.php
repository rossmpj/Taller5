<?php

namespace App\Http\Controllers;

use App\Models\Calificacion;
use Illuminate\Http\Request;

class CalificacionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       return Calificacion::all();
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $c=new Calificacion();
        $c->calificacion= $request->get('calificacion');
        $c->cedula= $request->get('cedula');
        $c->isbn= $request->get('isbn');
        $c->save();
    }

    /**
     * Muestra la calificación de un libro a partir del email del usuario
     *
     * @param  \App\Models\Relacional\Calificacion  $calificacion
     * @return \Illuminate\Http\Response
     */
    public function show($email)
    {
        return \DB::table('calificaciones')
            ->join('usuarios','usuarios.cedula','=','calificaciones.cedula')
            ->join('libros','libros.isbn','=','calificaciones.isbn')
            ->select('libros.isbn','libros.titulo', 'calificaciones.calificacion')
            ->where('usuarios.email',$email)
            ->get(); 
    }



}
