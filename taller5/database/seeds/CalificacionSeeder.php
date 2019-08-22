<?php

use Illuminate\Database\Seeder;
use App\Models\Calificacion;

class CalificacionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('calificaciones')->delete();
        Calificacion::create([
        	'calificacion' => '3',
        	'cedula' =>  '0900010202',
        	'isbn' =>  '0439785960'
	    ]);

        Calificacion::create([
        	'calificacion' => '5',
        	'cedula' =>  '0900010202',
        	'isbn' =>  '0316156280'
	    ]);

        Calificacion::create([
        	'calificacion' => '5',
        	'cedula' =>  '0900010202',
        	'isbn' =>  '0316016659'
	    ]);
    }
}
