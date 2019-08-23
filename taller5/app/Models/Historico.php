<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Jenssegers\Mongodb\Eloquent\Model as Eloquent;


class Historico extends Eloquent
{
    protected $connection='mongodb';	//base de datos no relacional
    protected $collection= 'coleccion'; //Nombre de la colección creada en mongo
    protected $fillable=[					//campos de la colección
    	'titulos','autores','isbn','calificacion_promedio'
    ];
}
