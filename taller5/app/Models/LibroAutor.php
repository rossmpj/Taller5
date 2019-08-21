<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class LibroAutor extends Model
{
     protected $table = 'libroautores';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'isbn','id'
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
    public function autores()
    {
        return $this->belongsTo('App\Models\Relacional\Autor', 'id');
    }

}
