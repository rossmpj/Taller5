<?php

use Illuminate\Database\Seeder;
use App\Models\Libro;

class LibroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('libros')->delete();
         Libro::create([
        	'isbn' => '0439785960',
        	'titulo' =>  'Harry Potter and the Half-Blood Prince (Harry Potter  #6)'
	    ]);

         Libro::create([
        	'isbn' => '0439358078',
        	'titulo' =>  'Harry Potter and the Order of the Phoenix (Harry Potter  #5)'
	    ]);

         Libro::create([
        	'isbn' => '0439554934',
        	'titulo' =>  'Harry Potter and the Sorcerers Stone (Harry Potter  #1)'
	    ]);

         Libro::create([
        	'isbn' => '0976540606',
        	'titulo' =>  'Unauthorized Harry Potter Book Seven News: Half-Blood Prince Analysis and Speculation'
	    ]);

         Libro::create([
        	'isbn' => '0517226952',
        	'titulo' =>  'The Ultimate Hitchhikers Guide: Five Complete Novels and One Story (Hitchhikers Guide to the Galaxy  #1-5)'
	    ]);

         Libro::create([
        	'isbn' => '0345453743',
        	'titulo' =>  'The Ultimate Hitchhikers Guide to the Galaxy'
	    ]);

         Libro::create([
        	'isbn' => '076790818X',
        	'titulo' =>  'A Short History of Nearly Everything'
	    ]);

         Libro::create([
        	'isbn' => '0618517650',
        	'titulo' =>  'The Lord of the Rings (The Lord of the Rings  #1-3)'
	    ]);

         Libro::create([
        	'isbn' => '0316156280',
        	'titulo' =>  'Lord of the Shadows (Cirque Du Freak  #11)'
	    ]);

         Libro::create([
        	'isbn' => '0316016659',
        	'titulo' =>  'The Lake of Souls (Cirque du Freak #10)'
	    ]);
    }
}
