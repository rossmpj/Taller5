<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Calificacion extends Model
{
       protected $table = 'calificaciones';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'calificacion','cedula','isbn'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

     // Relación: Tutor - AsignaturaTutor (1 - M)
    public function libros()
    {
        return $this->belongsTo('App\Models\Relacional\Libro', 'isbn');
    }

     // Relación: Tutor - AsignaturaTutor (1 - M)
    public function usuarios()
    {
        return $this->belongsTo('App\Models\Relacional\Usuario', 'cedula');
    }
}
