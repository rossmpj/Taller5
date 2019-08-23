<?php

use Illuminate\Database\Seeder;
use App\Models\Autor;

class AutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('autores')->delete();
    	Autor::create([
        	'nombres' => 'J.K. Rowling'
	    ]);

	    Autor::create([
        	'nombres' => 'Mary GrandPre'
	    ]);

	    Autor::create([
        	'nombres' => 'W. Frederick Zimmerman'
	    ]);

	    Autor::create([
        	'nombres' => 'Douglas Adams'
	    ]);

	    Autor::create([
        	'nombres' => 'Bill Bryson'
	    ]);

	    Autor::create([
        	'nombres' => 'William Roberts'
	    ]);


	    Autor::create([
        	'nombres' => 'J.R.R. Tolkien'
	    ]);

	    Autor::create([
        	'nombres' => 'Alan  Lee'
	    ]);

	    Autor::create([
        	'nombres' => 'Darren Shan'
	    ]);

    }
}
