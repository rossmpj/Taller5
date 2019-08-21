<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Autor extends Model
{
     protected $table = 'autores';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'nombres'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
    	'created_at', 'updated_at'
    ];

    // Relación: Asignatura - AsignaturaTutor (1 - M)
    public function libroautor()
    {
        return $this->hasMany('App\Models\Relacional\LibroAutor');
    }
}
