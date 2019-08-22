<?php

use Illuminate\Database\Seeder;
use App\Models\Usuario;

class UsuarioSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('usuarios')->delete();
         Usuario::create([
        	'cedula' => '0900010202',
        	'nombre' =>  'Alina',
        	'apellido' => 'Yamashita',
        	'fecha'	=> '1999-12-12',
        	'email' => 'example@mail.com'
	    ]);
          Usuario::create([
        	'cedula' => '0900010203',
        	'nombre' =>  'Masato',
        	'apellido' => 'Morikawa',
        	'fecha'	=> '1999-12-12',
        	'email' => 'example1@mail.com'
	    ]);
          Usuario::create([
        	'cedula' => '0900010204',
        	'nombre' =>  'Tom',
        	'apellido' => 'Holland',
        	'fecha'	=> '1999-12-12',
        	'email' => 'example2@mail.com'
	    ]);
          Usuario::create([
        	'cedula' => '0900010205',
        	'nombre' =>  'Charlie',
        	'apellido' => 'Brown',
        	'fecha'	=> '1999-12-12',
        	'email' => 'example3@mail.com'
	    ]);
          Usuario::create([
        	'cedula' => '0900010206',
        	'nombre' =>  'Des',
        	'apellido' => 'Tiny',
        	'fecha'	=> '1999-12-12',
        	'email' => 'example4@mail.com'
	    ]);


    }
}
