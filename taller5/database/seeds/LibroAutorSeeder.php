<?php

use Illuminate\Database\Seeder;
use App\Models\LibroAutor;

class LibroAutorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('libroautores')->delete();
         LibroAutor::create([
        	'isbn' => '0439785960',
        	'id' =>  '1'
	    ]);

         LibroAutor::create([
        	'isbn' => '0439358078',
        	'id' =>  '1'
	    ]);

         LibroAutor::create([
        	'isbn' => '0439554934',
        	'id' =>  '1'
	    ]);

         LibroAutor::create([
        	'isbn' => '0439785960',
        	'id' =>  '2'
	    ]);

         LibroAutor::create([
        	'isbn' => '0439358078',
        	'id' =>  '2'
	    ]);

         LibroAutor::create([
        	'isbn' => '0439554934',
        	'id' =>  '2'
	    ]);

         LibroAutor::create([
        	'isbn' => '0976540606',
        	'id' =>  '3'
	    ]);


         LibroAutor::create([
        	'isbn' => '0517226952',
        	'id' =>  '4'
	    ]);

         LibroAutor::create([
        	'isbn' => '0345453743',
        	'id' =>  '4'
	    ]);

         LibroAutor::create([
        	'isbn' => '076790818X',
        	'id' =>  '5'
	    ]);

         LibroAutor::create([
        	'isbn' => '076790818X',
        	'id' =>  '6'
	    ]);

         LibroAutor::create([
        	'isbn' => '0618517650',
        	'id' =>  '7'
	    ]);

          LibroAutor::create([
        	'isbn' => '0618517650',
        	'id' =>  '8'
	    ]);

           LibroAutor::create([
        	'isbn' => '0316156280',
        	'id' =>  '9'
	    ]);

            LibroAutor::create([
        	'isbn' => '0316016659',
        	'id' =>  '9'
	    ]);

    }
}
