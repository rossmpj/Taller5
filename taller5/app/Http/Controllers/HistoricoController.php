<?php

namespace App\Http\Controllers;

use App\Models\Historico;
use Illuminate\Http\Request;

class HistoricoController extends Controller
{
    
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Historico  $historico
     * @return \Illuminate\Http\Response
     */
    public function show($autor)
    {
         return Historico::where('autores',$autor)
         ->orderBy('calificacion_promedio', 'desc')
         ->get();
    }

}
